import { Musculos } from "./musculos";

export interface Ejercicio {
    id:             number;
    tipo_id:        number;
    medida_id:      number;
    nombre:         string;
    descripcion:    string;
    orbes_fuerza:         number;
    orbes_calistenia:     number;
    orbes_resistencia:    number;
    musculos?: Musculos[];
}
