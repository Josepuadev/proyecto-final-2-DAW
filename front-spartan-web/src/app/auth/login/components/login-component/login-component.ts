import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Authservice } from '../../../../services/auth/authservice';

@Component({
  selector: 'app-login-component',
  imports: [ReactiveFormsModule],
  templateUrl: './login-component.html',
  styleUrl: './login-component.css',
})
export class LoginComponent {
  private formBuilder = inject(FormBuilder);
  private authService = inject(Authservice);
  private router      = inject(Router);

  mensajeError : string | null = null;

  formulario: FormGroup = this.formBuilder.group({
    email:                  [null, [
                              Validators.required, 
                              Validators.email, 
                              Validators.maxLength(255)
                            ]],
    password:               [null, [
                              Validators.required, 
                              Validators.minLength(8)
                            ]],
  })

  validadorMensajesError(campoFormulario: string): string {
    const controlErrores = this.formulario.get(campoFormulario);

    if (!controlErrores?.invalid || !controlErrores?.touched) return '';

    if (controlErrores.errors?.['required'])    return 'Campo olbligatorio';
    if (controlErrores.errors?.['email'])       return 'Email no valido';
    if (controlErrores.errors?.['minlength'])   return 'Mínimo 8 caracteres';
    if (controlErrores.errors?.['pattern'])     return 'Solo letras, numeros y espacios';

    return 'Campo invalido';

  }

  onSubmit(): void {

    if(this.formulario.invalid) {
      this.formulario.markAllAsTouched();
      return;
    }
    
    this.authService.logearse(this.formulario.value).subscribe({

      next: (respuesta) => {
        // El token que generamos desde laravel y devolvemos como respuesta en el metodo
        // de register, pues se guarda con el metodo guardarToken ahora
        console.log(respuesta);
        console.log(JSON.stringify(respuesta));
        this.authService.guardarCredencialesUser(respuesta.token, respuesta.user); 
        this.router.navigate(['/entrenamientos']);
      },

      error: (errorDetalles) => {
        this.mensajeError = 'Error con el inicio de sesion';
        console.error(errorDetalles);
      }
    });

    
  }
}
