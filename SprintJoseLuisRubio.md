# Sprint No. 2 Lunes 30 de Abril a 4 Viernes de Mayo. **SprintMaster:** José Luis Rubio Pérez.

1. - [ ] Por favor, cada quién diga en que área de desarrollo le gustaría estar. 
Esto NO garantiza que estarán en dicho puesto que hayan elegido pero me da una idea sobre que área quieren trabajar

2. - [ ] Quién haya hecho el diagrama de clases y el diagrama de casos de uso, remover la parte de la tabla "Libros" y "Subir Libro", respectivamente.

3. - [ ] Corrección en el repositorio para la carpeta "boostrap" y discutir sobre hacía dónde irá el archivo "index.html".

4. - [ ] Corrección en el repositorio para el archivo "logotec.png". Me parece que debe ir en la carpeta "imagenes".

5. - [ ] Quien eliga trabajar sobre la base de datos, favor de empezar a crear las tablas de la base de datos en MySQL en tu servidor Ubuntu. Basarse en el diagrama de clases.

Sólo como parte de un recordatorio, esta fue la organización del Sprint #1:

**SprintMaster:** Javier Ivan Venegas Carrillo.

# Programadores

1. Pepe (modelo y conexion a base de datos)

2. Tadeo (vista)

3. Andres (control)

4. Miguel (modelo y conexion a base de datos)

5. Aimee (vista)

6. Javier (control)

# Administrador(a) de base de datos

1. Paulina

# Auditor(a)

1. Wendy

# Analistas

1. Selene

2. Cesar

# Estructura

+ Biblioteca
	+ BD
		- coonfig.inc.pnp
		- claseconectar.inc.php
		- claseusuarios.inc.php
		- Conex.pnp
	+ css
	+ js
	+ Clases
	+ Librerias
		- boostrap
		- awesome
		- validation
	+ Menus
	+ SWAP
	
# ¿Cómo crear tabla en MySQL?

Esto con la finalidad de que, como mínimo, se tengan las tablas para la base de datos. El siguiente código es un ejemplo:

```sql
CREATE TABLE sesiones(
id INT NOT NULL, --CLAVE PRIMARIA PARA CADA USUARIO
usuario VARCHAR(16) NOT NULL, --USUARIO PARA INICIO DE SESIÓN
contrasenia VARCHAR(32) NOT NULL, --CONTRSEÑA PARA INICIO DE SESIÓN
PRIMARY KEY (id)) TYPE = INNODB;
```