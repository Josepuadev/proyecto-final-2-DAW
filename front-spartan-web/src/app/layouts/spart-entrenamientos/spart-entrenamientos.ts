import { Component, inject } from '@angular/core';
import { Rutina } from '../../interfaces/rutina';
import { NgClass } from '@angular/common';
import { Rutinasespartanasservice } from '../../services/rutinasespartanas/rutinasespartanasservice';
import { RutinaCard } from './rutina-card/rutina-card';

@Component({
  selector: 'app-spart-entrenamientos',
  imports: [NgClass, RutinaCard],
  templateUrl: './spart-entrenamientos.html',
  styleUrl: './spart-entrenamientos.css',
})
export class SpartEntrenamientos {

  private rutinasEspartanasService = inject(Rutinasespartanasservice);

  rutinasPrehechas: Rutina[] = this.rutinasEspartanasService.obtenerTodasRutinas();

  busqueda: string = '';

  get rutinasFiltradas(): Rutina[] {
    if (this.busqueda === '') {
      return this.rutinasPrehechas;
    }

    return this.rutinasPrehechas.filter(rutina => 
      rutina.nombre.toLowerCase().includes(this.busqueda.toLowerCase()) || 
      rutina.descripcion.toLowerCase().includes(this.busqueda.toLowerCase())
    )

    
  }

  rutinaSeleccionada: Rutina | null = null;

  seleccionarRutina(rutina: Rutina): void {
    this.rutinaSeleccionada = rutina;
  }

  deseleccionar(): void {
    this.rutinaSeleccionada = null;
  }

  contador: number = 0;

  incrementar(): void {
    this.contador += 1;
  }

  decrementar(): void {
    this.contador -= 1;
  }

  reiniciar(): void {
    this.contador = 0
  }
}
