# API de Almacenamiento de Personajes y Películas/Series

Este proyecto consiste en el diseño y desarrollo de una aplicación API utilizando el framework Laravel. La API permite almacenar información sobre personajes de películas o series, junto con detalles sobre las propias películas o series.

## Características

La aplicación API proporciona las siguientes características:

- Almacenamiento de información sobre personajes de películas o series, incluyendo:
  - Nombre del personaje.
  - Película o serie donde aparece el personaje.
  - Imagen del personaje.
  - Descripción general del personaje.
- Almacenamiento de información sobre películas o series, incluyendo:
  - Nombre de la película o serie.
  - Categoría (p. ej., acción, drama, comedia, ciencia ficción, etc.).
  - Fecha de lanzamiento.
  - Revisión general de la película o serie.
  - Temporada (en caso de ser una serie).

## Instalación y Uso

1. Clona este repositorio en tu máquina local.
2. Configura tu entorno de desarrollo Laravel (por ejemplo, asegúrate de tener Composer y PHP instalados).
3. Copia el archivo `.env.example` a `.env` y configura tu base de datos.
4. Ejecuta las migraciones para crear las tablas en la base de datos: `php artisan migrate`.
5. Lanza el servidor de desarrollo: `php artisan serve`.
6. Utiliza herramientas como Postman para probar las rutas de la API.

## Ejemplos de Uso

A continuación se proporcionan ejemplos de cómo utilizar la API:

- Para agregar un nuevo personaje, envía una solicitud POST a `/characters` con los datos del personaje.
- Para obtener información sobre todas las películas, realiza una solicitud GET a `/movies`.
- Para obtener información sobre un personaje específico, realiza una solicitud GET a `/characters/{id}`.
