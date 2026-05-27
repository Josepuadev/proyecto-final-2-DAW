import { Component, inject, resource } from '@angular/core';
import { Router, RouterLink } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { Sesionesservice } from '../../services/sesiones/sesionesservice';
import { firstValueFrom, map } from 'rxjs';
import { signal, computed } from '@angular/core';
import { SerieLocal } from './interfaces/serie-local';

@Component({
  selector: 'app-rutinas',
  imports: [RouterLink],
  templateUrl: './rutinas.html',
  styleUrl: './rutinas.css',
})
export class Rutinas {

  private route = inject(ActivatedRoute);
  private idSesion = Number(this.route.snapshot.params['id']);
  private sesionService = inject(Sesionesservice);
  private router = inject(Router);

  ejercicioAbierto = signal<number | null>(null);
  mensajeErrorSerie = signal<string | null>(null);

  sesionCargada = resource({
    loader: () => firstValueFrom(this.sesionService.getSesion(this.idSesion))
  });

  esRutinaEspartana = computed(() => {
    const sesion = this.sesionCargada.value();
    return sesion?.rutina?.usuario_id === 1;
  });

  // Signal que guarda TODAS las series de todos los ejercicios
  // Es un Map: ejercicio_id → array de series
  seriesLocales = signal<Map<number, SerieLocal[]>>(new Map());

  toggleAcordeon(ejercicioId: number, seriesObjetivos: number): void {

    console.log('caca');
    if (this.ejercicioAbierto() === ejercicioId) {
      this.ejercicioAbierto.set(null);
      return;
    }

    this.ejercicioAbierto.set(ejercicioId);

    if (this.seriesLocales().has(ejercicioId)) return;

    // Creo las series vacias pero con el objetivo a cumplir como plantilla
    const seriesVacias: SerieLocal[] = [];

    for (let i = 1; i <= seriesObjetivos; i++) {
      seriesVacias.push({
        numero_serie: i,
        ejercicio_id: ejercicioId,
        repeticiones: null,
        segundos: null,
        metros: null,
        peso: null,
        completada: false,
      });
    }

    // Guardamos las series en el Map
    const mapaActual = this.seriesLocales();
    mapaActual.set(ejercicioId, seriesVacias);
    this.seriesLocales.set(new Map(mapaActual));

  }

  actualizarSerie(ejercicioId: number, numeroSerie: number, campo: keyof SerieLocal, valor: any): void {
    // 1. Obtienes el mapa actual
    const mapa = this.seriesLocales();
    const series = mapa.get(ejercicioId);

    if (!series) return;

    // serie que a modificar el -1 para acceder siempre a la poisicon adecuada
    // cosas de arrays...
    const serieActual = series[numeroSerie - 1];

    // nuevo objeto con los campos actuales
    const serieActualizada: SerieLocal = {
      numero_serie: serieActual.numero_serie,
      ejercicio_id: serieActual.ejercicio_id,
      repeticiones: serieActual.repeticiones,
      segundos:     serieActual.segundos,
      metros:       serieActual.metros,
      peso:         serieActual.peso,
      completada:   serieActual.completada,
    }

    // el as Never es para que trypescript no llore y me deje hacer lo que quieras
    serieActualizada[campo] = valor as never;

    series[numeroSerie - 1] = serieActualizada;

    // 2. Modificas lo que necesitas dentro del mapa
    mapa.set(ejercicioId, series);

    // 3. Creas una copia nueva para que Angular se entere
    this.seriesLocales.set(new Map(mapa));
    }

    completarSerie(ejercicioId: number, numeroSerie: number): void {

      const series = this.seriesLocales().get(ejercicioId);
      if (!series) return;

      const serie = series[numeroSerie - 1];

      // Bloque para revisar si la serie ha sido rellenada o no
      if (!serie.completada) {
        const tieneValor = serie.repeticiones !== null || serie.segundos !== null || serie.metros !== null;

        if (!tieneValor) {
          this.mensajeErrorSerie.set('Rellena los campos de la serie');

          // Borramos mensajes de error a los 2s
          setTimeout( () => this.mensajeErrorSerie.set(null), 2000);
          return;
        }
      }
    
      this.actualizarSerie(ejercicioId,numeroSerie, 'completada', !serie.completada);
    }

    agregarSerie(ejercicioId: number): void {
      const mapa = this.seriesLocales();
      const series = mapa.get(ejercicioId) ?? [];

      // Creamos la nueva serie con el número siguiente
      const nuevaSerie: SerieLocal = {
        numero_serie: series.length + 1,
        ejercicio_id: ejercicioId,
        repeticiones: null,
        segundos:     null,
        metros:       null,
        peso:         null,
        completada:   false,
      };

      series.push(nuevaSerie);
      mapa.set(ejercicioId, series);
      this.seriesLocales.set(new Map(mapa));
    }

    borrarSerie(ejercicioId: number, numeroSerie: number): void {
      // Cogemos el mapa completo de ejercicios y series
      const mapa = this.seriesLocales();
      // Elegimos las series de un ejercicio concreto
      const series = mapa.get(ejercicioId);
      if (!series) return;

      // Filtramos la serie que queremos borrar
      const seriesFiltradas = series.filter(serie => serie.numero_serie !== numeroSerie);

      // Renumeramos las series para no dejar huecos
      seriesFiltradas.forEach((serie, nuevoIndice) => serie.numero_serie = nuevoIndice + 1);

      mapa.set(ejercicioId, seriesFiltradas);
    }

  terminarRutina(): void {
    
    const todasSeries: SerieLocal[] = [];

    // Primer foreach para recorrer los arrays de los ejercicios
    this.seriesLocales().forEach((series) => {
      // Segundo foreach para recorrer las series de un ejercicio concreto
      series.forEach(serie => {
        todasSeries.push(serie)
      });
    });

    // Pequeña comprobacion de que al menos una serie haya sido filtrada
    const todasSeriesCompletada = todasSeries.filter(serie => serie.completada);

    if (todasSeriesCompletada.length === 0) {
      this.mensajeErrorSerie.set('Completa al menos una serie antes de terminar');
      setTimeout(() => this.mensajeErrorSerie.set(null), 2000);
      return;
    }

    this.sesionService.guardarSesion(this.idSesion, todasSeriesCompletada).subscribe({
      
      next: () => {
        this.router.navigate(['/entrenamientos']);
      },
      error: (err) => {
        console.error('Error al guardar la sesión', err);
      }
    });

  }

}

