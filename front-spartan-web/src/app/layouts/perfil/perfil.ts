import { Component, inject } from '@angular/core';
import { RouterLink } from "@angular/router";
import { Authservice } from '../../services/auth/authservice';

@Component({
  selector: 'app-perfil',
  imports: [RouterLink],
  templateUrl: './perfil.html',
  styleUrl: './perfil.css',
})
export class Perfil {

  private authService = inject(Authservice);
  private usuario = this.authService.obtenerUsuario();
  nombreUsuario = this.usuario?.name ?? 'Usuario';

  public verUsuario(){
    console.log(this.usuario);
  }

}

