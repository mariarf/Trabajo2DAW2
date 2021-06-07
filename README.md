# Trabajo 2 de DAW2

Indicaciones para desplegar la web en local.
Para desplegar la web en local es necesario que cuentes de una instalación básica de wordpress y que este conectada a la base de datos-
Dentro de la carpeta con ruta `C:\xampp\htdocs\wordpress\wp-content` reemplazar el contenido por el del git hub.
Luego dentro de `http://localhost/phpmyadmin/` en la base de datos que se tenga conectada con WordPress reemplazar las tablas con el contenido del archivo `C:\xampp\htdocs\wordpress\wp-content\base de datos`
Para esto hacer clic en la base de datos, seleccionar las tablas y eliminarlas y en el menu superior hacer clic en la opción importar, seleccionando el archivo correpondiente e importándolo.

También podrías crear una nueva base de datos donde importes las nuevas tablas, pero tendrías que ir al documento `C:\xampp\htdocs\wordpress\wp-config.php` y editar el nombre de la base de datos que esta conectada con WordPress

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nombre-de-tu-base-de-datos' );

