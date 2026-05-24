import { RutinaEjercicio } from "./rutina-ejercicio";

export interface Rutina {
    id:          number;
    usuario_id:  number;
    nombre:      string;
    descripcion: string;
    ejercicios?: RutinaEjercicio[];
}
// solo las IDs — el backend tiene el resto