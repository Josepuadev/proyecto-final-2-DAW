import { inject, Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';



@Injectable({
  providedIn: 'root',
})
export class Authservice {
  
  private peticionesHttp = inject(HttpClient);
  private apiUrl = environment.apiUrl;

  registrarse(datos: any): Observable<any> {
    return this.peticionesHttp.post(`${this.apiUrl}/register`, datos);
  }

  logearse(datos: any): Observable<any> {
    return this.peticionesHttp.post(`${this.apiUrl}/login`, datos);
  }

  guardarCredencialesUser(token : string, usuario : any): void {
    localStorage.setItem('token', token);
    localStorage.setItem('usuario', JSON.stringify(usuario));
  }

  obtenerUsuario() : any {
    const usuario = localStorage.getItem('usuario');

    return usuario ? JSON.parse(usuario) : null;
  }

  obtenerToken() : string | null {
    return localStorage.getItem('token');
  }

  cerrarSesion() : void {
    localStorage.removeItem('token');
    localStorage.removeItem('usuario');

  }

  estaLogeado() : boolean {
    return this.obtenerToken() !== null;
  }
}
