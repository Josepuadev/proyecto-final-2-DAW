import { Component, inject, resource } from '@angular/core';
import { RouterLink } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { Sesionesservice } from '../../services/sesiones/sesionesservice';
import { firstValueFrom, map } from 'rxjs';
import { signal } from '@angular/core';
import { SerieLocal } from './interfaces/serie-local';

@Component({
  selector: 'app-rutinas',
  imports: [RouterLink],
  templateUrl: './rutinas.html',
  styleUrl: './rutinas.css',
})
export class Rutinas {

  private route = inject(ActivatedRoute);
  private id = Number(this.route.snapshot.params['id']);
  private sesionService = inject(Sesionesservice);

  ejercicioABierto = signal<number | null>(null);

  sesionCargada = resource({
    loader: () => firstValueFrom(this.sesionService.getSesion(this.id))
  });

  // Signal que guarda TODAS las series de todos los ejercicios
  // Es un Map: ejercicio_id → array de series
  seriesLocales = signal<Map<number, SerieLocal[]>>(new Map());

  toggleAcordeon(ejercicioId: number, seriesObjetivos: number): void {

    console.log('caca');
    if (this.ejercicioABierto() === ejercicioId) {
      this.ejercicioABierto.set(null);
      return;
    }

    this.ejercicioABierto.set(ejercicioId);

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

    // Guardamos
    mapa.set(ejercicioId, series);
    this.seriesLocales.set(new Map(mapa));
    }

    completarSerie(ejercicioId: number, numeroSerie: number): void {
      this.actualizarSerie(ejercicioId,numeroSerie, 'completada', true);
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

}

