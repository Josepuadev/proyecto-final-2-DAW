import { Component, inject, resource, signal } from '@angular/core';
import { RouterLink } from "@angular/router";
import { Authservice } from '../../services/auth/authservice';
import { Sesionesservice } from '../../services/sesiones/sesionesservice';
import { firstValueFrom, single } from 'rxjs';
import { DatePipe } from '@angular/common';

@Component({
  selector: 'app-perfil',
  imports: [RouterLink,DatePipe],
  templateUrl: './perfil.html',
  styleUrl: './perfil.css',
})
export class Perfil {

  private authService = inject(Authservice);
  private sesionesService = inject(Sesionesservice);

  private usuario = this.authService.obtenerUsuario();
  nombreUsuario = this.usuario?.name ?? 'Guerrero';

  sesiones = resource({
    loader: () => firstValueFrom(this.sesionesService.getSesiones())
  });

  sesionAbierta = signal<number | null>(null);

  toggleSesion(idSesion: number): void {
    this.sesionAbierta.set(this.sesionAbierta() === idSesion ? null : idSesion);
  }

}

