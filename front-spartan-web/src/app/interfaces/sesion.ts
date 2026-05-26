import { Rutina } from "./rutina";
import { SesionEjercicio } from "./sesion-ejercicio";

export interface Sesion {
    id:                         number;
    usuario_id:                 number;
    rutina_id:                  number | null;
    titulo:                     string;
    descripcion?:               string;
    fecha:                      string;
    completada:                 boolean;
    orbes_fuerza_ganados:       number;
    orbes_calistenia_ganados:   number;
    orbes_resistencia_ganados:  number;
    sesionEjercicios?:          SesionEjercicio[];
    rutina?:                    Rutina;
}
