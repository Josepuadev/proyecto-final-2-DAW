import { inject, Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment.development';


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

  guardarToken(token : string): void {
    localStorage.setItem('token', token);
  }

  obtenerToken() : string | null {
    return localStorage.getItem('token');
  }

  cerrarSesion() : void {
    localStorage.removeItem('token');
  }

  estaLogeado() : boolean {
    return this.obtenerToken() !== null;
  }
}
