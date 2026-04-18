import { Routes } from '@angular/router';
import { Rutinas } from './layouts/rutinas/rutinas';
import { RutinasSave } from './layouts/rutinas-save/rutinas-save';

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
    },
    {
        path: 'rutinas-save', component: RutinasSave,
    },
    /**
    {
        path: 'perfil',
        loadChildren: () => import('./layouts')
    }
         */

];
