import { Component, inject } from '@angular/core';
import { Authservice } from '../../services/auth/authservice';
import { Router } from '@angular/router';

@Component({
  selector: 'app-ajustes',
  imports: [],
  templateUrl: './ajustes.html',
  styleUrl: './ajustes.css',
})
export class Ajustes {
  private authService = inject(Authservice);
  private router = inject(Router);

  clicao() {
    this.authService.cerrarSesion();
    this.router.navigate(['/auth/login']);
  }
}
