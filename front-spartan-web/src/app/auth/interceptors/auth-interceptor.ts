import { HttpInterceptorFn } from '@angular/common/http';
import { inject } from '@angular/core';
import { Authservice } from '../../services/auth/authservice';

// Para que cada peticion http que hagamos a nuestra api con laravel metemos el token
export const interceptorAutenticaciones: HttpInterceptorFn = (peticion, next) => {

  const authService = inject(Authservice);
  const token = authService.obtenerToken();

  if (token) {
    const peticionConToken = peticion.clone({ headers: peticion.headers.set('Authorization', `Bearer ${token}`)});

    return next(peticionConToken);
  }

  return next(peticion);
};
