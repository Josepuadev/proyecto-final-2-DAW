import { HttpClient } from '@angular/common/http';
import { Injectable, inject } from '@angular/core';
import { environment } from '../../../environments/environment';
import { Observable } from 'rxjs';
import { Rutina } from '../../interfaces/rutina';

@Injectable({
  providedIn: 'root',
})
export class Rutinaspersonalizadasservice {
  
  private peticionesHttp = inject(HttpClient);
  private apiUrl = environment.apiUrl;

  getRutinasUsuario(): Observable<Rutina[]> {
    return this.peticionesHttp.get<Rutina[]>(`${this.apiUrl}/rutinas`);
  }

  getRutinaById(id: number): Observable<Rutina> {
    return this.peticionesHttp.get<Rutina>(`${this.apiUrl}/rutinas/${id}`);
  }

  crearRutina(datos: {titulo: string, descripcion: string }): Observable<{rutina: Rutina}> {
    return this.peticionesHttp.post<{rutina: Rutina}>(`${this.apiUrl}/rutinas`, datos);
  }

  borrarRutina(idRutina: number): Observable <any> {
    return this.peticionesHttp.delete(`${this.apiUrl}/rutinas/${idRutina}`);
  }

  añadirEjercicio(idRutina: number, datos: {
      ejercicio_id:           number,
      series?:                number,
      repeticiones_objetivo?: number,
      segundos_objetivo?:     number,
      metros_objetivo?:       number,
      peso_objetivo?:         number,
      orden?:                 number,
    }): Observable<any> {
    return this.peticionesHttp.post<any>(`${this.apiUrl}/rutinas/${idRutina}/ejercicios`, datos);
  }

  quitarEjercicio(idRutina: number, ejercicio_id: number): Observable<any> {
    return this.peticionesHttp.delete<any>(`${this.apiUrl}/rutinas/${idRutina}/ejercicios/${ejercicio_id}`);
  }


}
