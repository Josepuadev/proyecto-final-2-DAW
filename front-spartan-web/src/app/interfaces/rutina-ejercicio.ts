export interface RutinaEjercicio {
    id:          number;
    nombre:      string;
    pivot: {
        series:                  number;
        repeticiones_objetivo:   number;
        segundos_objetivo:       number;
        metros_objetivo:         number;
        peso_objetivo:           number;
        orden:                   number;
    }
}