import { Component, inject } from '@angular/core';
import { Authservice } from '../../services/auth/authservice';

@Component({
  selector: 'app-ajustes',
  imports: [],
  templateUrl: './ajustes.html',
  styleUrl: './ajustes.css',
})
export class Ajustes {
  private authService = inject(Authservice);

  clicao() {
    this.authService.cerrarSesion();
  }
}
