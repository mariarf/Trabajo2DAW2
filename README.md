# Trabajo 2 de DAW2


## Descripción del proyecto

El portal web realizado se trata de una página web sobre Gran Canaria. Es una página en la que se proporciona información sobre la isla. La página cuenta con distintas secciones en las que se muestran las playas de la isla divididas por playas (de arena o de piedra), deportes acuáticos a realizar, sitios para realizar escalada o senderismo, centros comerciales, atracciones y museos. También cuenta con una sección que es un blog en el que se subirán entradas con información acerca de temas relacionados con la isla. Finalmente, el portal web cuenta con una sección para que el usuario pueda reservar excursiones y actividades.

## Características técnicas del proyecto

- Desarrollado en WordPress
- Hace uso del tema "Astra" y "Elementor" como maquetador.
- Algunos de los plugins utilizados son WooCommerce, Blogmentor y GTranslate. 
## Indicaciones para desplegar la web en local.


- Instalación básica de WordPress en local y de algún programa para poder realizar la conexión con la base de datos (ej: Xampp). Para más información sobre cómo instalar y configurar WordPress, seguir [este enlace](https://miposicionamientoweb.es/como-instalar-wordpress-local/)
- Reemplazar la carpeta  `C:\xampp\htdocs\wordpress\wp-content` con el contenido de este repositorio
- Iniciar el servidor Apache y MySQL dentro de Xampp y acceder en el navegador a `http://localhost/phpmyadmin/`. Ahí se deberá reemplazar las tablas de la base de datos conectada al WordPress por el archivo que se ubica en `C:\xampp\htdocs\wordpress\wp-content\base de datos`. Para ello, se seleccionarán todas las tablas y se eliminarán. Para importar las nuevas tablas se hará click en importar del menú superior, se seleccionará el archivo correspondiente y se quitará la casilla de "Importación parcial".
- Como alternativa al paso anterior, se puede crear una base de datos nueva realizando la importación del archivo en `C:\xampp\htdocs\wordpress\wp-content\base de datos` y editando en el archivo `C:\xampp\htdocs\wordpress\wp-config.php` el nombre de la base de datos conectada al WordPress. La línea a editar es:  *define( 'DB_NAME', 'nombre-de-tu-base-de-datos' );*
