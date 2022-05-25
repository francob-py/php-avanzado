# PHP MYSQL AVANZADO UTN

El sistema creado es una demostración de la integración de conocimientos en HTML, CSS, PHP, MARIADB, AJAX. Utilizando MVC ( Model View Controller - Modelo Vista Controlador)

Copyright 2022 (C) Franco Brochero [francobrochero@hotmail.com](mailto:francobrochero@hotmail.com) (creador). Todos los derechos reservados.

Licencia: MIT

## General Information:

- Repositorio: https://github.com/francob-py/php-avanzado/
- User: user | Password: user
- User: admin | Password: admin

## Estructura del Proyecto:

- [PANEL DE CONTROL][1] Un vistazo rapido a los datos cargados en el sistema en tiempo real.
- [MODULO]:[ACCION] En cada modulo desplegable se encuentra una acción determinada en un submenu.
  - [EMPLEADOS]:[LISTADO] Un formulario que sirve para listar todos los registros.
  - [EMPLEADOS]:[EDITAR] Un formulario que sirve para editar los datos del empleado.
  - [EMPLEADOS]:[BORRAR] Borra un registro determinado.

## Características Implementadas:

- AJAX en la actualización de Tablas en Dashboard o Panel de Control, permitiendo ver los cambios efectuados por otros usuarios sin tener que recargar la página.
- CRUD ( ABMC - Alta, Baja, Modificación y Consulta) con PHP - Mysqli.
- Boostrap -v 4, permite adaptar el contenido a las distintas resoluciones del cliente.
- Usuarios: Se establecieron dos niveles de permiso, admin y user.

## Requerimientos:

- PHP -v 7.2
- MariaDB -v 10.4.24

## Inicio Rapido

- Instale XAMPP -v 3.3.0, o Servidor LAMP.
- Coloque el contenido del repositorio en: XAMPP/htdocs o en LAMP /var/www/html/
