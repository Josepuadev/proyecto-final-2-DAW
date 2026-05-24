import { inject, Injectable } from '@angular/core';
import { Rutina } from '../../interfaces/rutina';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../../environments/environment.development';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class Rutinasespartanasservice {
  
  private peticionesHttp = inject(HttpClient);
  private apiUrl = environment.apiUrl;


  obtenerTodasRutinasEspartanas(): Observable<Rutina[]>  {
    return this.peticionesHttp.get<Rutina[]>(`${this.apiUrl}/rutinas-espartanas`);
  }

}
