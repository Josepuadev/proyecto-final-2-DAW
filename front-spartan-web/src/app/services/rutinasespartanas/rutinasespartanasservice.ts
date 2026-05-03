import { Injectable } from '@angular/core';
import { Rutina } from '../../interfaces/rutina';

@Injectable({
  providedIn: 'root',
})
export class Rutinasespartanasservice {
  
  private rutinasPrehechas: Rutina[] = [
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
    },
    {
      id: 4,
      nombre: 'Mar de poseidon',
      descripcion: 'Sobrevive a los embites del agua',
      ejerciciosIds: [7,8]
    },
    {
      id: 5,
      nombre: 'Infierno de Hades',
      descripcion: 'Ni con las espadas del exilio sobrevivirás',
      ejerciciosIds: [1,8,7,11]
    }
  ]

  obtenerTodasRutinas(): Rutina[]  {
    return [...this.rutinasPrehechas];
  }

  buscarRutinaId(id: number): Rutina | undefined {
    return this.rutinasPrehechas.find(rutina => rutina.id === id);
  }

  agregarRutina(rutina: Rutina): void {
    this.rutinasPrehechas.push(rutina);
  }

  eliminarRutina(id: number): void {
    this.rutinasPrehechas.filter(rutina => rutina.id !== id);
  }
}
