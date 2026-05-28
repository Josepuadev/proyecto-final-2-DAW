import { Routes } from "@angular/router";
import { MainLayout } from "./main-layout/main-layout";
import { Entrenamientos } from "./entrenamientos/entrenamientos";
import { TusEntrenamientos } from "./tus-entrenamientos/tus-entrenamientos";
import { Rutinas } from "./rutinas/rutinas";
import { Perfil } from "./perfil/perfil";
import { SpartEntrenamientos } from "./spart-entrenamientos/spart-entrenamientos";
import { Ajustes } from "./ajustes/ajustes";
import { NuevaRutina } from "./tus-entrenamientos/nueva-rutina/nueva-rutina";
import { BuscadorEjercicios } from "../shared/buscador-ejercicios/buscador-ejercicios";

export const LAYOUTS_ROUTES: Routes = [
    
    {
        path: '', component: MainLayout,
        children: [
            {path: '', component: Entrenamientos},
            {path: 'entrenamientos', component: Entrenamientos},
            {path: 'tus-entrenamientos', component: TusEntrenamientos},
            {path: 'tus-entrenamientos/nueva', component: NuevaRutina},
            {path: 'spart-entrenamientos', component: SpartEntrenamientos},
            {path: 'perfil', component: Perfil},
            {path: 'ajustes', component: Ajustes},
            
            
        ]
    },
    {path: 'rutina/:id', component: Rutinas},
    {path: 'buscador-ejercicios', component: BuscadorEjercicios},


]