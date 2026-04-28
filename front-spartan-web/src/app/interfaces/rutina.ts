export interface Rutina {
    id: number;
    nombre: string;
    descripcion: string;
    ejerciciosIds: number[];
}
// solo las IDs — el backend tiene el resto