import { Routes } from "@angular/router";
import { LoginComponent } from "./login/components/login-component/login-component";
import { RegisterComponent } from "./register/components/register-component/register-component";
import { AuthComponent } from "./components/auth-component/auth-component";

export const AUTH_ROUTES: Routes = [
    {path: '', component: AuthComponent},
    {path: 'login', component: LoginComponent},
    {path: 'register', component: RegisterComponent},
]