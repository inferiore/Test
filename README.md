# Pasos para instalar el sistema

1. Clonar el repositorio:

`git clone https://github.com/inferiore/test.git `

2. Instalar dependencias:

`composer install`

3. Actualizar la información del cargador automático de clases:

`composer dump-autoload`

4. Ejecutar el archivo `Scripts/Inicio.sql` para crear la base de datos y la tabla `usuarios`


5. Ir a la raiz del proyecto y ejecutar ` php -S localhost:8000 index.php` para levantar el servidor web


* usuarios/almacenar-> formularios para registrar usuarios
* autenticacion/formulariologin -> formulario para login
* usuarios/listar -> listado de usuarios


