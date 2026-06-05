# ⚔️ SpartanApp

> Aplicación fitness enfocada en dispositivos móviles para crear rutinas personalizadas, seguir entrenamientos guiados y registrar el progreso sesión a sesión.

SpartanApp es una aplicación web full-stack con arquitectura desacoplada, desarrollada como Trabajo de Fin de Grado del Grado Superior en Desarrollo de Aplicaciones Web (DAW). Permite al usuario gestionar sus propias rutinas, elegir entre rutinas oficiales ("espartanas") y registrar cada serie, repetición y peso durante el entrenamiento.

---

## 📋 Tabla de contenidos

- [Características](#-características)
- [Stack tecnológico](#-stack-tecnológico)
- [Arquitectura](#-arquitectura)
- [Modelo de datos](#-modelo-de-datos)
- [Instalación](#-instalación)
- [Endpoints de la API](#-endpoints-de-la-api)
- [Despliegue](#-despliegue)
- [Estructura del proyecto](#-estructura-del-proyecto)
- [Autor](#-autor)

---

## ✨ Características

- **Autenticación por tokens** — registro, inicio y cierre de sesión con Laravel Sanctum.
- **Rutinas personalizadas** — el usuario crea sus propias rutinas, añade y quita ejercicios y las elimina.
- **Rutinas espartanas** — catálogo de rutinas oficiales de solo lectura, listas para empezar.
- **Buscador de ejercicios** — filtrado en tiempo real por nombre, tipo (fuerza, calistenia, resistencia) y grupo muscular.
- **Entrenamiento guiado** — registro de series, repeticiones y peso con un sistema de acordeón por ejercicio.
- **Historial de sesiones** — consulta de todos los entrenamientos completados desde el perfil.
- **Diseño mobile-first** — interfaz oscura optimizada para uso desde el móvil.

---

## 🛠 Stack tecnológico

### Frontend
- **Angular 21** — framework principal, con uso de APIs modernas (`signals`, `resource()`, control de flujo `@if`/`@for`).
- **TypeScript** — tipado estático en toda la capa cliente.
- **Tailwind CSS** — estilos mediante utilidades.
- **Lucide Angular** — iconografía SVG dinámica.
- **RxJS** — manejo de flujos asíncronos.

### Backend
- **Laravel 13** — API REST sobre arquitectura MVC.
- **Laravel Sanctum** — autenticación basada en tokens.
- **Eloquent ORM** — acceso a datos y gestión de relaciones.
- **PHP**

### Base de datos
- **MariaDB** (compatible con MySQL), administrada con **phpMyAdmin**.

### Infraestructura
- **VPS de IONOS** con panel **Virtualmin**.
- **Apache** como servidor web.

---

## 🏗 Arquitectura

SpartanApp sigue una arquitectura **desacoplada (cliente-servidor)**, en la que el frontend y el backend son aplicaciones independientes que se comunican mediante una API REST que intercambia datos en formato JSON.

```
┌─────────────────┐         HTTPS          ┌──────────────────────────────┐
│  Navegador web  │ ─────────────────────► │         VPS (IONOS)          │
│  (Angular SPA)  │                        │                              │
└─────────────────┘                        │   ┌──────────────────────┐   │
                                           │   │       Apache         │   │
                                           │   └──────────┬───────────┘   │
                                           │      ┌───────┴───────┐       │
                                           │      ▼               ▼       │
                                           │  Angular        Laravel API  │
                                           │  (estáticos)    (/api/*)      │
                                           │                     │        │
                                           │                     ▼        │
                                           │                  MariaDB      │
                                           └──────────────────────────────┘
```

Esta separación permite que ambas capas evolucionen de forma independiente y que la misma API pueda ser consumida en el futuro por otros clientes (por ejemplo, una app nativa).

---

## 🗄 Modelo de datos

Las entidades principales y sus relaciones:

| Entidad | Descripción |
|---------|-------------|
| `usuarios` | Datos del usuario y autenticación |
| `rutinas` | Rutinas de entrenamiento (personalizadas o espartanas) |
| `ejercicios` | Catálogo global de ejercicios |
| `musculos` | Grupos musculares |
| `sesiones` | Cada ejecución de una rutina |
| `rutinas_ejercicios` | Tabla pivote: ejercicios de una rutina con sus objetivos |
| `sesiones_ejercicios` | Series realizadas en cada sesión |
| `musculos_ejercicios` | Tabla pivote: músculos trabajados por cada ejercicio |

**Relaciones clave:**
- Un usuario tiene muchas rutinas y muchas sesiones (1:N).
- Una rutina puede ejecutarse en muchas sesiones (1:N) — la rutina es la *plantilla*, la sesión es la *ejecución real*.
- Rutinas y ejercicios mantienen una relación N:M con datos adicionales (series, repeticiones objetivo, orden).
- Ejercicios y músculos mantienen una relación N:M.

---

## 🚀 Instalación

### Requisitos previos
- Node.js + npm (se recomienda gestionarlo con NVM)
- PHP (versión requerida por Laravel 13)
- Composer
- MariaDB / MySQL

### Backend (Laravel)

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/spartanApp.git
cd spartanApp/backend

# Instalar dependencias
composer install

# Configurar el entorno
cp .env.example .env
php artisan key:generate

# Configurar la conexión a la base de datos en .env y ejecutar migraciones
php artisan migrate

# Levantar el servidor de desarrollo
php artisan serve
```

### Frontend (Angular)

```bash
cd spartanApp/frontend

# Instalar dependencias
npm install

# Levantar el servidor de desarrollo
ng serve
```

La aplicación quedará disponible en `http://localhost:4200`.

> **Nota:** Configura la URL de la API en `src/environments/environment.ts` para que apunte a tu backend.

---

## 🔌 Endpoints de la API

### Autenticación
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| `POST` | `/register` | Registro de usuario |
| `POST` | `/login` | Inicio de sesión (devuelve token) |
| `POST` | `/logout` | Cierre de sesión |

### Rutinas
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| `GET` | `/rutinas` | Rutinas del usuario |
| `GET` | `/rutinas/{id}` | Rutina por ID |
| `POST` | `/rutinas` | Crear rutina |
| `DELETE` | `/rutinas/{id}` | Borrar rutina |
| `POST` | `/rutinas/{id}/ejercicios` | Añadir ejercicio a una rutina |
| `DELETE` | `/rutinas/{id}/ejercicios/{ejercicio}` | Quitar ejercicio de una rutina |
| `GET` | `/rutinas/espartanas` | Rutinas oficiales |

### Ejercicios
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| `GET` | `/ejercicios` | Catálogo completo de ejercicios |

### Sesiones
| Método | Endpoint | Descripción |
|--------|----------|-------------|
| `POST` | `/sesiones` | Crear una sesión de entrenamiento |
| `GET` | `/sesiones` | Historial de sesiones |
| `GET` | `/sesiones/{id}` | Sesión con sus relaciones |
| `POST` | `/sesiones/{id}/guardar` | Guardar series completadas |

> Todos los endpoints (salvo registro y login) requieren autenticación mediante token Bearer.

---

## 🌐 Despliegue

El proyecto se despliega sobre un VPS de IONOS con Apache:

1. **Frontend:** compilar con `ng build` y servir los archivos estáticos de `dist/` desde Apache. Se configura un `.htaccess` que redirige las rutas no físicas al `index.html` para el correcto funcionamiento del enrutado de la SPA.
2. **Backend:** subir el proyecto, ejecutar `composer install`, configurar el `.env` y ejecutar `php artisan migrate`. Apache redirige las peticiones `/api/*` al `index.php` de Laravel.

**Requisitos del servidor:** Apache con `mod_rewrite`, PHP (versión de Laravel 13), Composer y MariaDB.

---

## 📁 Estructura del proyecto

```
spartanApp/
├── frontend/                    # Aplicación Angular
│   └── src/
│       ├── environments/        # Configuración de entornos
│       └── app/
│           ├── interfaces/      # Tipados compartidos
│           ├── services/        # Comunicación con la API
│           ├── shared/          # Componentes reutilizables
│           └── pages/           # Componentes de página
│
└── backend/                     # API Laravel
    └── app/
        ├── Http/Controllers/    # Controladores
        └── Models/              # Modelos Eloquent
```

---

## 👤 Autor

Hecho por José Miguel Púa López
Proyecto desarrollado como Trabajo de Fin de Grado del **Grado Superior en Desarrollo de Aplicaciones Web (DAW)**.

---

## 📄 Licencia

Este proyecto se distribuye con fines educativos.
