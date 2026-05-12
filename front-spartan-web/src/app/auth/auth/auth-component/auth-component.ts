import { Component } from '@angular/core';
import { RouterOutlet,RouterLink } from '@angular/router';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-auth-component',
  imports: [RouterOutlet,RouterLink, NgStyle],
  templateUrl: './auth-component.html',
  styleUrl: './auth-component.css',
})
export class AuthComponent {

  imgFotoPortada = 'assets/images/portadaInicio.jpeg';
}
