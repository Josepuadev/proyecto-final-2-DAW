import { Routes } from "@angular/router";
import { MainLayout } from "./main-layout/main-layout";
import { Entrenamientos } from "./entrenamientos/entrenamientos";
import { TusEntrenamientos } from "./tus-entrenamientos/tus-entrenamientos";
import { Rutinas } from "./rutinas/rutinas";
import { Perfil } from "./perfil/perfil";
import { SpartEntrenamientos } from "./spart-entrenamientos/spart-entrenamientos";

export const LAYOUTS_ROUTES: Routes = [
    
    {
        path: '', component: MainLayout,
        children: [
            {path: 'entrenamientos', component: Entrenamientos},
            {path: 'tus-entrenamientos', component: TusEntrenamientos},
            {path: 'spart-entrenamientos', component: SpartEntrenamientos},
            {path: 'perfil', component: Perfil},
            
        ]
    },


    
    

    
    
]