import { Component } from '@angular/core';
import { RouterLink } from "@angular/router";

@Component({
  selector: 'app-tus-entrenamientos',
  imports: [RouterLink],
  templateUrl: './tus-entrenamientos.html',
  styleUrl: './tus-entrenamientos.css',
})
export class TusEntrenamientos {

  rathalos: string = 'assets/images/rathalos.jpg';
  rathian: string = 'assets/images/rathian.png';
  cinder: string = 'assets/images/darksouls.png';

 
}

