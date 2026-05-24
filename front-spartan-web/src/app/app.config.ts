import { ApplicationConfig, importProvidersFrom, provideBrowserGlobalErrorListeners } from '@angular/core';
import { provideRouter } from '@angular/router';
import { provideHttpClient, withInterceptors } from '@angular/common/http';
import { interceptorAutenticaciones } from './auth/interceptors/auth-interceptor';
import { LucideAngularModule, Dumbbell, Flame, Zap, Anchor, Wind, Sword } from 'lucide-angular';

import { routes } from './app.routes';

export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideRouter(routes),

    // Activamos el HTTP cliente para toda la app
    provideHttpClient(
      withInterceptors([interceptorAutenticaciones])
    ),

    importProvidersFrom(
      LucideAngularModule.pick({Dumbbell,Flame,Zap,Anchor,Wind,Sword})
    )
  ]
};
