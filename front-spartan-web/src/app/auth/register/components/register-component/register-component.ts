import { Component, inject } from '@angular/core';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators, AbstractControl, ValidationErrors } from '@angular/forms';
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
    name:                   [null, [
                              Validators.required, 
                              Validators.maxLength(100), 
                              Validators.pattern(/^[0-9a-zA-ZÀ-ÿ\s]+$/) 
                            ]],
    email:                  [null, [
                              Validators.required, 
                              Validators.email, 
                              Validators.maxLength(255)
                            ]],
    password:               [null, [
                              Validators.required, 
                              Validators.minLength(8)
                            ]],
    password_confirmation:  [null, [
                              Validators.required, 
                              Validators.minLength(8)
                            ]],
  }, {
    validators: passwordsCoinciden
  });

  validadorMensajesError(campoFormulario: string): string {
    const controlErrores = this.formulario.get(campoFormulario);

    if (!controlErrores?.invalid || !controlErrores?.touched) {
      
      if (campoFormulario === 'password_confirmation'
          && this.formulario.errors?.['noCoinciden']
          && controlErrores?.touched) {
            return 'Las contraseñas no coinciden';
          }
    
        return '';
    }

    if (controlErrores.errors?.['required'])    return 'Campo olbligatorio';
    if (controlErrores.errors?.['email'])       return 'Email no valido';
    if (controlErrores.errors?.['minlength'])   return 'Mínimo 8 caracteres';
    if (controlErrores.errors?.['pattern'])     return 'Solo letras, numeros y espacios';

    return 'Campo invalido';

  }

  onSubmit(): void {
    
    if (this.formulario.invalid) {
      this.formulario.markAllAsTouched();
      return;
    }

    this.authService.registrarse(this.formulario.value).subscribe({

      next: (respuesta) => {
        // El token que generamos desde laravel y devolvemos como respuesta en el metodo
        // de register, pues se guarda con el metodo guardarToken ahora
        this.authService.guardarCredencialesUser(respuesta.token, respuesta.user); 
        this.router.navigate(['/entrenamientos']);
      },

      error: (errorDetalles) => {
        this.mensajeError = 'Error con el registro';
        console.error(errorDetalles);
      }
    });

    
  }
}

function passwordsCoinciden(control: AbstractControl): ValidationErrors | null {
  
  const password = control.get('password')?.value;
  const password_confirmation = control.get('password_confirmation')?.value;

  return password === password_confirmation ? null : { noCoinciden: true};
}

