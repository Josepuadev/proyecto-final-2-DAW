import { Routes } from "@angular/router";
import { MainLayout } from "./main-layout/main-layout";
import { Entrenamientos } from "./entrenamientos/entrenamientos";

export const LAYOUTS_ROUTES: Routes = [
    
    {
        path: '', component: MainLayout,
        children: [
            {path: 'entrenamientos', component: Entrenamientos},
        ]
    },
    
    
]