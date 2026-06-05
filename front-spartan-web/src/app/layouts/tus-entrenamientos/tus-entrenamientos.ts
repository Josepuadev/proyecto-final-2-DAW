import { Component, inject, resource, signal } from '@angular/core';
import { RouterLink, Router } from "@angular/router";
import { Rutinaspersonalizadasservice } from '../../services/rutinaspersonalizadas/rutinaspersonalizadasservice';
import { Sesionesservice } from '../../services/sesiones/sesionesservice';
import { firstValueFrom } from 'rxjs';
import { Rutina } from '../../interfaces/rutina';

@Component({
  selector: 'app-tus-entrenamientos',
  imports: [RouterLink],
  templateUrl: './tus-entrenamientos.html',
  styleUrl: './tus-entrenamientos.css',
})
export class TusEntrenamientos {

  private rutinaPersonalizadasService = inject(Rutinaspersonalizadasservice);
  private sesionesService = inject(Sesionesservice);
  private router          = inject(Router);

 rutinasUsuario = resource({
  loader: () => firstValueFrom(this.rutinaPersonalizadasService.getRutinasUsuario())
 });

 rutinaABorrar = signal<Rutina | null>(null);

  empezarRutina(rutinaId: number, rutinaNombre: string): void {

    this.sesionesService.crearSesion({
      titulo: rutinaNombre,
      rutina_id: rutinaId,
    }).subscribe({
      next: (respuesta) => {
        this.router.navigate(['/rutina', respuesta.sesion.id]);
      },
      error: (err) => {
        console.error(err);
      }
    });

  }

 // Abre el modal de confirmación
  confirmarBorrar(rutina: Rutina): void {
    this.rutinaABorrar.set(rutina);
  }

  // Cancela el borrado
  cancelarBorrar(): void {
    this.rutinaABorrar.set(null);
  }

  borrarRutina(): void {
    const rutina =  this.rutinaABorrar();
    if (!rutina) return;

    this.rutinaPersonalizadasService.borrarRutina(rutina.id).subscribe({
      next: () => {
        this.rutinaABorrar.set(null);
        this.rutinasUsuario.reload();
      },
      error: () => console.error('Error al borrar la rutina'),
    });
  }
}

