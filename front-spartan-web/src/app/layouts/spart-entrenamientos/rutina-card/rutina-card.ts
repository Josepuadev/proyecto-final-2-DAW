import { Component, Input, Output, EventEmitter } from '@angular/core';
import { Rutina } from '../../../interfaces/rutina';

@Component({
  selector: 'app-rutina-card',
  imports: [],
  templateUrl: './rutina-card.html',
  styleUrl: './rutina-card.css',
})
export class RutinaCard {


  @Input() rutinaEnviada!: Rutina;
  @Input() seleccionada: boolean = false;
  @Output() rutinaSeleccionadas = new EventEmitter<Rutina>();

  onClick(): void {
    this.rutinaSeleccionadas.emit(this.rutinaEnviada);
  }


}
