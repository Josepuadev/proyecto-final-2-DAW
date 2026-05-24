import { Component, Input, Output, EventEmitter, signal, computed } from '@angular/core';
import { Rutina } from '../../../interfaces/rutina';
import { LucideAngularModule } from 'lucide-angular';

@Component({
  selector: 'app-rutina-card',
  imports: [LucideAngularModule],
  templateUrl: './rutina-card.html',
  styleUrl: './rutina-card.css',
})
export class RutinaCard {


  @Input() rutinaEnviada!: Rutina;
  @Output() rutinaSeleccionadas = new EventEmitter<Rutina>();

  // 2 signals para controlar si el emblema esta girando o esta visible
  emblemaGirando = signal(false);
  modalVisible = signal(false);

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
    setTimeout(() => {
      this.rutinaSeleccionadas.emit(this.rutinaEnviada);
      this.modalVisible.set(false);
    }, 200)
  }


}

