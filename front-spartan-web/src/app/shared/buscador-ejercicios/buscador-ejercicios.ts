import { Component, computed, inject, resource, signal, Output, EventEmitter, Input } from '@angular/core';
import { Ejerciciosservice } from '../../services/ejercicios/ejerciciosservice';
import { firstValueFrom } from 'rxjs';
import { Musculos } from '../../interfaces/musculos';
import { Ejercicio } from '../../interfaces/ejercicio';

@Component({
  selector: 'app-buscador-ejercicios',
  imports: [],
  templateUrl: './buscador-ejercicios.html',
  styleUrl: './buscador-ejercicios.css',
})
export class BuscadorEjercicios {

  private ejerciciosService = inject(Ejerciciosservice);

  // El padre escucha estos dos eventos
  @Output() ejercicioSeleccionado = new EventEmitter<Ejercicio>();
  @Output() cerrar                = new EventEmitter<void>();

  // Signals de filtros
  busqueda            = signal('');
  filtroTipo          = signal<number | null>(null);
  filtroMusculo       = signal<number | null>(null);

  // Signals para controlar los modales de filtro
  modalTipoVisible    = signal(false);
  modalMusculoVisible = signal(false);

  // Carga todos los ejercicios una vez
  listadoEjercicios = resource({
    loader: () => firstValueFrom(this.ejerciciosService.getTodosEjercicios())
  });

  // Extrae los músculos únicos de todos los ejercicios
  musculosDisponibles = computed(() => {
    const todos = this.listadoEjercicios.value() ?? [];
    const mapa  = new Map<number, Musculos>();

    todos.forEach(ejercicio => {
      ejercicio.musculos?.forEach(musculo => {
        mapa.set(musculo.id, musculo);
      });
    });

    return Array.from(mapa.values());
  });

  // Filtra en tiempo real según los tres filtros
  ejerciciosFiltrados = computed(() => {
    const todos   = this.listadoEjercicios.value() ?? [];
    const texto   = this.busqueda().toLowerCase();
    const tipo    = this.filtroTipo();
    const musculo = this.filtroMusculo();

    return todos.filter(e => {
      const coincideNombre  = texto === '' || e.nombre.toLowerCase().includes(texto);
      const coincideTipo    = tipo === null || e.tipo_id === tipo;
      const coincideMusculo = musculo === null || e.musculos?.some(m => m.id === musculo);
      return coincideNombre && coincideTipo && coincideMusculo;
    });
  });

  // Nombre del tipo seleccionado para mostrar en el botón
  nombreTipoSeleccionado = computed(() => {
    switch (this.filtroTipo()) {
      case 1:  return 'Fuerza';
      case 2:  return 'Calistenia';
      case 3:  return 'Resistencia';
      default: return 'Tipo';
    }
  });

  // Nombre del músculo seleccionado para mostrar en el botón
  nombreMusculoSeleccionado = computed(() => {
    const musculo = this.musculosDisponibles().find(m => m.id === this.filtroMusculo());
    return musculo ? musculo.nombre : 'Músculo';
  });

  // Selecciona un ejercicio y avisa al padre
  seleccionar(ejercicio: Ejercicio): void {
    this.ejercicioSeleccionado.emit(ejercicio);
  }

  // Selecciona tipo y cierra el modal de tipo
  seleccionarTipo(tipo: number | null): void {
    this.filtroTipo.set(tipo);
    this.modalTipoVisible.set(false);
  }

  // Selecciona músculo y cierra el modal de músculo
  seleccionarMusculo(musculoId: number | null): void {
    this.filtroMusculo.set(musculoId);
    this.modalMusculoVisible.set(false);
  }

}