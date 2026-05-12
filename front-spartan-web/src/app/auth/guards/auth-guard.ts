import { CanActivateFn } from '@angular/router';
import { inject } from '@angular/core';
import { Authservice } from '../../services/auth/authservice';
import { Router } from '@angular/router';

export const guardiaAutenticacion: CanActivateFn = (route, state) => {

  const authService = inject(Authservice);
  const router = inject(Router);

  if (authService.estaLogeado()) {
    return true;
  } else {
    router.navigate(['/auth/login']);
    return false;
  }

};
