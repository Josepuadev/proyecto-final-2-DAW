import { CanActivateFn } from '@angular/router';
import { inject } from '@angular/core';
import { Router } from '@angular/router';
import { Authservice } from '../../services/auth/authservice';

export const guardiaNoReautenticado: CanActivateFn = (route, state) => {
  const authService = inject(Authservice);
  const router = inject(Router);

  if (!authService.estaLogeado()) {
    return true;
  } else {
    router.navigate(['/entrenamientos']);
    return false;
  }

};
