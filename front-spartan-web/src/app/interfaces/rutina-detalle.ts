import { Ejercicio } from "./ejercicio";

export interface RutinaDetalle {
    id:          number;
    nombre:      string;
    descripcion: string;
    ejercicios:  Ejercicio[];
}
