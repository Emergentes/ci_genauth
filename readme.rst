###################
ci_genauth
###################

Contiene el framework CodeIgniter 3.1.5 con soporte de autentifciacion Ion_auth.

*******************
Instalación
*******************

Para su instalación debe clonar el repositorio y realizar cambios en:

1) Actualizar en el archivo config.php la url donde se encuentra la aplicacion

$config['base_url'] = 'http://localhost/ci_genauth';

2) Escribir los datos de conexion a la base de datos en database.php

3) Para generar las tablas requeridas para la autenticación de usuarios escribir http://localhost/ci_genauth/migrate

Para verificar que todo está correcto ingresar a http://localhost/ci_genauth y la aplicación debe solicitar usuario y contraseña.

Usuario: admin@admin.com
Password: password
