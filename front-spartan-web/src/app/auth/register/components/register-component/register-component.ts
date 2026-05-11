import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { Authservice } from '../../../../services/auth/authservice';


@Component({
  selector: 'app-register-component',
  imports: [ReactiveFormsModule],
  templateUrl: './register-component.html',
  styleUrl: './register-component.css',
})
export class RegisterComponent {
  
  private formBuilder = inject(FormBuilder);
  private authService = inject(Authservice);
  private router      = inject(Router);

  mensajeError : string | null = null;

  formulario: FormGroup = this.formBuilder.group({
    name:                   [null],
    email:                  [null],
    password:               [null],
    password_confirmation:  [null],
  })

  onSubmit(): void {
    
    this.authService.registrarse(this.formulario.value).subscribe({

      next: (respuesta) => {
        // El token que generamos desde laravel y devolvemos como respuesta en el metodo
        // de register, pues se guarda con el metodo guardarToken ahora
        this.authService.guardarToken(respuesta.token); 
        this.router.navigate(['/entrenamientos']);
      },

      error: (errorDetalles) => {
        this.mensajeError = 'Error con el registro';
        console.error(errorDetalles);
      }
    });

    
  }
}
