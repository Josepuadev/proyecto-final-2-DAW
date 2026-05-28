import { Component, inject, signal } from '@angular/core';
import { Authservice } from '../../services/auth/authservice';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-ajustes',
  imports: [RouterLink],
  templateUrl: './ajustes.html',
  styleUrl: './ajustes.css',
})
export class Ajustes {
  private authService = inject(Authservice);
  private router = inject(Router);

   modalCerrarSesion = signal(false);

  cerrarSesion(): void {
    this.authService.cerrarSesion();
    this.router.navigate(['/auth/login']);
  }

  clicao() {
    this.authService.cerrarSesion();
    this.router.navigate(['/auth/login']);
  }
}
