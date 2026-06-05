import { Component, Input, Output, EventEmitter, signal, computed, inject } from '@angular/core';
import { Rutina } from '../../../interfaces/rutina';
import { LucideAngularModule } from 'lucide-angular';
import { Sesionesservice } from '../../../services/sesiones/sesionesservice';
import { Router } from '@angular/router';

@Component({
  selector: 'app-rutina-card',
  imports: [LucideAngularModule],
  templateUrl: './rutina-card.html',
  styleUrl: './rutina-card.css',
})
export class RutinaCard {


  @Input() rutinaEnviada!: Rutina;
  @Output() rutinaSeleccionadas = new EventEmitter<Rutina>();
  
  private sesionesService = inject(Sesionesservice);
  private router = inject(Router);

  // 2 signals para controlar si el emblema esta girando o esta visible
  emblemaGirando = signal(false);
  modalVisible = signal(false);
  // 1 signal para mostrar al usuario un output de que esta 
  // cargando la rutina y no piense que ha petado
  cargando = signal(false);

  // computed() - deriva un valor de otro signal
  // computed() — se recalcula automáticamente cuando
  //  los valores de dentro cambian

  claseGiro = computed(() => this.emblemaGirando() ? 'girar' : '');



  onClick(): void {
    this.emblemaGirando.set(true);
   
    setTimeout(() => {
      this.emblemaGirando.set(false);
      this.modalVisible.set(true);
    }, 500);
  }

  cerrarModal(): void {
    this.modalVisible.set(false);
  }

  comenzar(): void {

    // Evitamos 2 click rapidos que haga que cargue dos veces 
    if (this.cargando()) return;

    this.cargando.set(true);

    this.sesionesService.crearSesion({
      // Creamos la sesion en laravel
      titulo:     this.rutinaEnviada.nombre,
      rutina_id:  this.rutinaEnviada.id,
    }).subscribe({
      next: (respuesta) => {

        // Ir al entrenamiento con su ID de sesion
        this.router.navigate(['/rutina', respuesta.sesion.id]);
      },
      error: () => {
        this.cargando.set(false);
        console.error('Error al cargar el entrenamiento');
      }
    });


  }


}

