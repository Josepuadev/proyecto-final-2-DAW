import { Component, inject, signal } from '@angular/core';
import { FormBuilder, ReactiveFormsModule, FormGroup, Validators } from '@angular/forms';
import { Rutinaspersonalizadasservice } from '../../../services/rutinaspersonalizadas/rutinaspersonalizadasservice';
import { Router, RouterLink } from '@angular/router';
import { Rutina } from '../../../interfaces/rutina';
import { Ejercicio } from '../../../interfaces/ejercicio';
import { BuscadorEjercicios } from '../../../shared/buscador-ejercicios/buscador-ejercicios';
import { Sesionesservice } from '../../../services/sesiones/sesionesservice';

@Component({
  selector: 'app-nueva-rutina',
  imports: [ReactiveFormsModule, BuscadorEjercicios, RouterLink],
  templateUrl: './nueva-rutina.html',
  styleUrl: './nueva-rutina.css',
})
export class NuevaRutina {

  private formBuilder    = inject(FormBuilder);
  private rutinasService = inject(Rutinaspersonalizadasservice);
  private sesionesService = inject(Sesionesservice);
  private router         = inject(Router);

  // La rutina una vez creada en BD
  rutinaCreada   = signal<Rutina | null>(null);
  mensajesError  = signal<string | null>(null);

  // Controla si el buscador está visible
  buscadorVisible = signal(false);

  formulario: FormGroup = this.formBuilder.group({
    nombre:      [null, [Validators.required, Validators.maxLength(255)]],
    descripcion: [null, [Validators.required, Validators.maxLength(255)]],
    icono:       ['dumbbell'],
  });

  // PASO 1 — crear la rutina vacía en Laravel
  crearRutina(): void {
    // Validamos errores
    if (this.formulario.invalid) {
      
      this.mensajesError.set('Rellena Titulo y Descripcion');
        setTimeout(() => {
          this.mensajesError.set(null);
        }, 2000);

      this.formulario.markAllAsTouched();
      return;
    }

    this.rutinasService.crearRutina(this.formulario.value).subscribe({
      next: (respuesta) => {
        this.rutinaCreada.set(respuesta.rutina);
      },
      error: (err) => console.error('Error: ', err)
    });
  }

  // PASO 2 — recibe el ejercicio emitido por BuscadorEjercicios
  // y lo añade a la rutina
  onEjercicioSeleccionado(ejercicio: Ejercicio): void {
    const rutina = this.rutinaCreada();
    if (!rutina) return;

    this.rutinasService.añadirEjercicio(rutina.id, {
      ejercicio_id:          ejercicio.id,
      series:                1,
      repeticiones_objetivo: 10,
      peso_objetivo:         0,
      orden:                 (rutina.ejercicios?.length ?? 0) + 1,
    }).subscribe({
      next: () => {
        // Cierra el buscador
        this.buscadorVisible.set(false);
        // Recarga la rutina para ver el ejercicio añadido
        this.rutinasService.getRutinaById(rutina.id).subscribe({
          next: (rutinaActualizada) => this.rutinaCreada.set(rutinaActualizada)
        });
      },
      error: () => this.mensajesError.set('Error al añadir el ejercicio')
    });
  }

  irAEntrenar(): void {
    const rutina = this.rutinaCreada();
    if (!rutina) return;
  
    this.sesionesService.crearSesion({
      titulo:    rutina.nombre,
      rutina_id: rutina.id,
    }).subscribe({
      next: (respuesta) => {
        this.router.navigate(['/rutina', respuesta.sesion.id]);
      },
      error: () => this.mensajesError.set('Error al iniciar el entrenamiento')
    });
  }

}