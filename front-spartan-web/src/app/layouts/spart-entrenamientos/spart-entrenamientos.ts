import { Component } from '@angular/core';
import { Rutina } from '../../interfaces/rutina';

@Component({
  selector: 'app-spart-entrenamientos',
  imports: [],
  templateUrl: './spart-entrenamientos.html',
  styleUrl: './spart-entrenamientos.css',
})
export class SpartEntrenamientos {

  rutinasPrehechas: Rutina[] = [
    {
      id: 1,
      nombre: 'Día de pecho',
      descripcion: 'Empuja como un espartano',
      ejerciciosIds: [1, 2, 3]
    },
    {
      id: 2,
      nombre: 'Dominación de espalda',
      descripcion: 'Controla tu cuerpo o sé controlado',
      ejerciciosIds: [4, 5]
    },
    {
      id: 3,
      nombre: 'Carrera del guerrero',
      descripcion: 'Los espartanos nunca paran',
      ejerciciosIds: [6]
    }
  ]
}
