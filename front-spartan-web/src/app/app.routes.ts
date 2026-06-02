import { Routes } from '@angular/router';
import { Rutinas } from './layouts/rutinas/rutinas';
import { guardiaAutenticacion } from './auth/guards/auth-guard';
import { guardiaNoReautenticado } from './auth/guards/no-auth-guard';

// los guardias son importantes para no estar en cada componente revisando si estamos logeados o no, controlamos eso directamente
// en las rutas padre
export const routes: Routes = [
    {
        path: 'auth' ,
        canActivate: [guardiaNoReautenticado],
        loadChildren: () => import('./auth/auth.routes').then(m => m.AUTH_ROUTES)
    },
    {
        path: '' ,
        canActivate: [guardiaAutenticacion],
        loadChildren: () => import('./layouts/layouts.routes').then(m => m.LAYOUTS_ROUTES)
    },
    {
        path: 'rutinas', component: Rutinas,
        canActivate: [guardiaAutenticacion],
    },
    /**
    {
        path: 'perfil',
        loadChildren: () => import('./layouts')
    }
    */

];
