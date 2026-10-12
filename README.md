# PP-Producci-n-Web-An-lisis-de-Sistemas
# City Farmac

Trabajo práctico de **Producción Web – Escuela Da Vinci**.

**Instancia 1: Template y vistas**

## Descripción

City Farmac es un proyecto de sitio web para una cadena ficticia de farmacias y perfumerías.

El sistema está dividido en dos áreas:

- **Sitio público:** catálogo de productos, productos destacados, detalle de productos, reseñas y formulario de contacto.
- **Panel de administración:** gestión de productos, categorías, subcategorías, marcas, comentarios, usuarios y perfiles.

En esta primera instancia se desarrolla la estructura visual y la navegación del sitio utilizando datos de ejemplo almacenados en arrays PHP.

## Tecnologías utilizadas

- PHP 8+
- HTML5
- CSS3
- Bootstrap 5
- Git y GitHub

## Instalación y ejecución

1. Descargar o clonar el repositorio.
2. Copiar la carpeta del proyecto al directorio público del servidor local, por ejemplo `htdocs` en XAMPP o `www` en Laragon.
3. Iniciar el servidor Apache.
4. Abrir el proyecto desde el navegador.

Ejemplo, en mi caso como la carpeta que contiene el proyecto se llama `pp-prodwebtp`:

`http://localhost/pp-prodwebtp/`

En esta instancia aún no hay una base de datos, todos los datos estan cargados en un archivo que se incluye en el proyecto

## Configuración de rutas

El proyecto utiliza un router centralizado en `index.php`.

Las vistas se seleccionan mediante el parámetro `page` de la URL.

Ejemplo:

`index.php?page=products`

Los enlaces y recursos utilizan rutas relativas al proyecto.

Si se modifica la ubicación de la carpeta, se debe comprobar que las rutas continúen apuntando correctamente a los archivos correspondientes.

## Estructura del proyecto

```text
pp-prodwebtp/
├── index.php
├── conn/
│   └── db.php
├── views/
├── includes/
│   ├── components/
│   └── process/
├── classes/
├── assets/
│   ├── css/
│   ├── js/
│   └── imgs/
└── README.md
```

- `index.php`: punto de entrada y router.
- `conn/db.php`: datos simulados almacenados en arrays.
- `views/`: páginas del sitio público y administración.
- `includes/components/`: componentes y formularios reutilizables.
- `includes/process/`: procesamiento de formularios y redirecciones.
- `classes/`: clases PHP del proyecto.
- `assets/`: estilos, scripts e imágenes.

## Vistas del sitio público

| Vista               | URL                                                  |
| ------------------- | ---------------------------------------------------- |
| Inicio              | `index.php?page=home`                                |
| Catálogo            | `index.php?page=products`                            |
| Detalle de producto | `index.php?page=productdetail&id=1`                  |
| Contacto            | `index.php?page=contact`                             |
| Inicio de sesión    | `index.php?page=login`                               |
| Registro            | `index.php?page=register`                            |
| Perfil de usuario   | `index.php?page=profile`                             |
| Página 404          | Se muestra cuando se solicita una página inexistente |

## Vistas de administración

| Vista                    | URL                                  |
| ------------------------ | ------------------------------------ |
| Panel principal          | `index.php?page=adminpanel`          |
| Productos                | `index.php?page=adminproducts`       |
| Categorías               | `index.php?page=admincat`            |
| Subcategorías            | `index.php?page=admincat&parent=1`   |
| Marcas                   | `index.php?page=adminbrands`         |
| Comentarios por producto | `index.php?page=reviewsproduct&id=1` |
| Usuarios                 | `index.php?page=adminusers`          |
| Perfiles                 | `index.php?page=adminprofiles`       |

El panel dispone de navegación administrativa y formularios de alta y modificación mediante modales de Bootstrap.

## Alcance de la Instancia 1

Esta instancia está enfocada en el maquetado, la navegación, la reutilización de componentes y la presentación de datos simulados.

Los productos, categorías, marcas, usuarios y comentarios se obtienen de arrays PHP.

Los formularios administrativos pueden presentar mensajes simulados, no persisten sus modificaciones.

La implementación de MySQL, los ABM persistentes y el sistema definitivo de autenticación y permisos se desarrollará en las siguientes instancias.

##
