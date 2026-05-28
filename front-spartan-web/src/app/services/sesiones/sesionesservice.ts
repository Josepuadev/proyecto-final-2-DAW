import { HttpClient } from '@angular/common/http';
import { inject, Injectable } from '@angular/core';
import { environment } from '../../../environments/environment';
import { Observable } from 'rxjs';
import { Sesion } from '../../interfaces/sesion';

@Injectable({
  providedIn: 'root',
})
export class Sesionesservice {
  
  private peticionesHttp = inject(HttpClient);
  private apiUrl = environment.apiUrl;

  crearSesion(datos: {titulo: string, rutina_id?: number}): Observable< {sesion: Sesion}> {
    return this.peticionesHttp.post<{ sesion: Sesion }>(`${this.apiUrl}/sesiones`, datos);
  }

  getSesiones(): Observable<Sesion[]> {
    return this.peticionesHttp.get<Sesion[]>(`${this.apiUrl}/sesiones`);
  }

  getSesion(idSesion: number): Observable<Sesion> {
    return this.peticionesHttp.get<Sesion>(`${this.apiUrl}/sesiones/${idSesion}`);
  }

  guardarSesion(idSesion: number, ejercicios: any[]): Observable<any> {
    return this.peticionesHttp.post(`${this.apiUrl}/sesiones/${idSesion}/guardar`, {ejercicios});
  }
}
