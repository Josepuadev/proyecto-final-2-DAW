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
  // 1 signal para mostrar al usuario un output de que esta cargando la rutina y no piense que ha petado
  cargando = signal(false);

  // computed() - deriva un valor de otro signal
  claseGiro = computed(() => this.emblemaGirando() ? 'girar' : '');

  /*
    Usuario hace clic en la insignia
    onClick() se ejecuta
    girando.set(true) -> claseGiro() devuelve 'girar'
                      -> Angular añade clase CSS 'girar' al escudo y la animacion arranca
  */

  onClick(): void {
    this.emblemaGirando.set(true);

    /*
    setTimeout 600ms -> espera que termine la animación
    girando.set(false) -> claseGiro() devuelve ''
                       -> clase 'girar' desaparece
    modalVisible.set(true)     → @if(modalVisible()) es true
                                  → Angular renderiza el modal
                                  → animación CSS scale 0→1 arranca
            ↓
    Usuario ve el modal
    */
   
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

