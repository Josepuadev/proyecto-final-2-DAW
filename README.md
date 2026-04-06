# proyecto-final-2-DAW
Proyecto final de 2º de DAW donde pongo a prueba mis conocimientos sobre lo aprendido en el instituto, Angular, Laravel, JS, HTML, CSS, PHP, Tailwind, SQL, 

# 05/04/2026

Hoy he estado estudiando como quiero que sea la estructura de mi proyecto, el arbol de carpeta, los requerimientos fronted de un desarrollo mobile first en Angular, por ejemplo en una pantalla de login no puedo ponerle un navbar y footer como al resto de layouts porque queda mal, eso no suele ser así, también el SSR se desaconseja usarlo en desarrollo móvil, por lo que también tuve que investigar por qué, 

Por ahora no he avanzado mucho dada la complejidad del proyecto en cuanto a un cambio de paradigma a la hora de desarrollar ya que no es para una desktop sino para un móvil.

Uso de IA solamente estricto de manera informativa o inspiratoria.

![auth-mockup](./excalidraw/png/auth-component.png)

# 06/04/2026

Empezamos a diseñar la primera inferfaz de la APP "Palestra", que va a ser el área de entrenamientos, dado que la idea del desarrollo es mobile first estoy definiendo una estructura con un pequeño header y footer, header está aún por ver si saldrá en todas las páginas y el footer para seleccionar las diferentes opciones.

He utilizado display flex, column y flex1 para poder tener un layout consistente y que no cambie para el resto de páginas.

```css
.layout {
    display: flex;
    flex-direction: column;
    height: 100dvh;
}

.main {
    background-color: rgb(135, 206, 60);
    flex:1;
}

``` 