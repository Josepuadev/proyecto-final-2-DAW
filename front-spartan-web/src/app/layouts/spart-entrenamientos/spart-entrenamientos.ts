import { Component, inject, resource, signal } from '@angular/core';
import { Rutinasespartanasservice } from '../../services/rutinasespartanas/rutinasespartanasservice';
import { RutinaCard } from './rutina-card/rutina-card';
import { Rutina } from '../../interfaces/rutina';
import { firstValueFrom } from 'rxjs';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-spart-entrenamientos',
  imports: [RutinaCard, RouterLink],
  templateUrl: './spart-entrenamientos.html',
  styleUrl: './spart-entrenamientos.css',
})
export class SpartEntrenamientos {

  private rutinasEspartanasService = inject(Rutinasespartanasservice);

  // con la funcion resource gestiona el ajax de petciones a la api de forma automatica
  // mejoras de angular modernos con el uso de la reactividad
  rutinasSpartana = resource({
    loader: () => firstValueFrom(this.rutinasEspartanasService.obtenerTodasRutinasEspartanas())
  });

  // Probando signals, para que angular actualice lo unico que le incumbe
  rutinaSeleccionada = signal<Rutina | null>(null);

  seleccionar(rutina: Rutina): void {
    // Set es una funcion para cambiar de valores en un signal ademas de que avisa a Angular de este suceso
    this.rutinaSeleccionada.set(rutina);
  }

  deseleccionar(): void {
    this.rutinaSeleccionada.set(null);
  }

}

