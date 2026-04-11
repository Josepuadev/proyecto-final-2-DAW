import { Routes } from '@angular/router';
import { Rutinas } from './layouts/rutinas/rutinas';

export const routes: Routes = [
    {
        path: 'auth' ,
        loadChildren: () => import('./auth/auth.routes').then(m => m.AUTH_ROUTES)
    },
    {
        path: '' ,
        loadChildren: () => import('./layouts/layouts.routes').then(m => m.LAYOUTS_ROUTES)
    },
    {
        path: 'rutinas', component: Rutinas,
    }
];
