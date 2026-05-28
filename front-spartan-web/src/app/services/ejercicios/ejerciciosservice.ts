import { HttpClient } from '@angular/common/http';
import { inject, Injectable } from '@angular/core';
import { environment } from '../../../environments/environment';
import { Ejercicio } from '../../interfaces/ejercicio';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class Ejerciciosservice {
  
  private peticionesHttp = inject(HttpClient);
  private apiUrl = environment.apiUrl;

  getTodosEjercicios(): Observable<Ejercicio[]> {
    return this.peticionesHttp.get<Ejercicio[]>(`${this.apiUrl}/ejercicios`);
  }
}
