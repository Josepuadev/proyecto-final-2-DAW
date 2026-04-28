import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NgStyle } from '@angular/common';
@Component({
  selector: 'app-entrenamientos',
  imports: [RouterLink, NgStyle],
  templateUrl: './entrenamientos.html',
  styleUrl: './entrenamientos.css',
})
export class Entrenamientos {
  imgTusEntrenamientos = 'assets/images/tusrutinas.jpeg';
  imgEntrenamientosEsp = 'assets/images/rutinasespartanas.jpeg';
}
