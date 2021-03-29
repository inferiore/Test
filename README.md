# Pasos para instalar el sistema

1. Clonar el repositorio:

`git clone https://github.com/inferiore/test.git `

2. Instalar dependencias:

`composer install`

3. Actualizar la información del cargador automático de clases:

`composer dump-autoload`

4. Ejecutar el archivo `Scripts/Inicio.sql` para crear la base de datos y la tabla `usuarios`

5. Ir a la raiz del proyecto y crear el `.env` alli deberan ser agregadas las siguientes variables de entorno

* `DB_CONNECTION=mysql`
* `DB_HOST=`
* `DB_PORT=3306`
* `DB_DATABASE=`
* `DB_USERNAME=`
* `DB_PASSWORD=`
* `SESSION_LIFE_TIME=3600`
* `URL_COUNTRIES = https://api.first.org/data/v1/`

6.  ejecutar ` php -S localhost:8000 index.php` para levantar el servidor web


# Rutas disponibles
* usuarios/almacenar-> formularios para registrar usuarios

* autenticacion/formulariologin -> formulario para login

* usuarios/listar -> listado de usuarios


