import { Ejercicio } from "./ejercicio";

export interface SesionEjercicio {
    id:         number;
    sesion_id:  number;
    ejercicio_id:   number;
    numero_serie:   number;
    repeticiones:   number | null;
    segundos:       number | null;
    metros:         number | null;
    peso:           number | null;
    ejercicio?:     Ejercicio;
}
