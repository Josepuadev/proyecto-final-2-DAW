export interface Ejercicio {
    id:             number;
    nombre:         string;
    descripcion:    string;
    musculo:        string[];
    tipo:           string;
    orbes: {
        fuerza:         number;
        calistenia:     number;
        resistencia:    number;
    };
}
