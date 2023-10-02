
## Sobre Laravel

Laravel es un Framework de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia agradable y creativa para que sea verdaderamente satisfactorio. Laravel elimina las complicaciones del desarrollo al facilitar las tareas comunes utilizadas en muchos proyectos web, como por ejemplo:

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Proyecto Screen

Este proyecto tipo Prueba sobre el Framework de Laravel, tiene como propósito experimentar la libreria **spatie/browsershot** para la captura de imagenes dada una url, trabajando con navegadores web basadao en Chromium.

La librería **spatie/browsershot** cuenta con un repositorio en github  [spatie/browsershot](https://github.com/spatie/browsershot), en el cual la comunidad hace aportes sobre corrección de errores, documentación y amplicación de capacidades de la herramienta. 

Respecto al proyecto **Screen** este cuenta con una aplicación básica en donde el aspecto visual es relegado para dar paso a la prueba de las funcionalidades tales como:
- Captura de pantalla de una pagina web a través de su url
- Generación de nombres de imagenes basadas en su dominio.
- Listado de capturas de pantalla almacenadas en el servidor
- Pevisualización de capturas realizadas a través del navegador web configurado por defecto.

## Instalacion
El proyecto se instala vía composer.
````
composer install
````

### Cargar Archivos

La página inicial presenta un formulario en el cual se permite el ingreso de la url.

### Capturas realizadas
Aqui se relacionan tados las capturas de pantalla almacenadas en el servidor, presentado de cada uno de ellos un enlace, en el cual se puede hacer click.

### Visualización de imagenes

Al hacer click en el vinculo de cada imagen, se permite visualizar la imalgen generada, dicha visualización se realiza gracias al navegador web instalada y configurado por defecto

````
http://localhost:8000/
````
## License
