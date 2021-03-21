# Slim - Framework

- Documentación
  - [English](#instructions-for-new-project)
  - [Spanish](#instrucciones-crear-nuevo-proyecto)


## Instructions For New Project
1.- Install Slim Framework
``` 
composer require slim/slim:4.* 
```

2.- Install Psr7 
```
composer require slim/psr7 
```

3.- Install php-di to manage containers 
``` 
composer require php-di/php-di 
```

4.- Create a public folder

Copy the configuration of the htaccess file for the server that is being used in this case apache.

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
```

6.- We create the file /public/index.php to verify that the configuration is correct

#

## B | The basic structure of the App

### Requirements: 
- Virtual Host pointing **"public/"** directory
- PHP 7.1 >
- Postman

### Configurations:

1-. Config your Database (src/App/Configs.php)

2-. Create a Route (src/App/Routes.php)

3-. Create a Controller in the directory (src/App/Controller/)

4-. Create a Service in the directory (src/App/Services/) and specify in (src/App/Services.php) 

5-. Create a Model in the directory (src/App/Models/) and specify in (src/App/Models.php) 

6-. Ready⚡

#

## C | Download
1.- Clone the repository
```
git clone + url repository
```
2.- Install the necessary dependencies to deploy the project.
```
composer install
```
3.- Run the server previously configured with xampp or other

#

## D | Installation
- 1.- Deploy the database with the name slimFramework
- 2.- Deploy Slim.json file in Postman for consumption of basic services (CRUD)

#

## Instrucciones Crear Nuevo Proyecto
1.- Instalar Slim Framework
``` 
composer require slim/slim:4.* 
```

2.- Instalar Psr7 
```
composer require slim/psr7 
```

3.- Instalar php-di para el manejo de los contenedores 
``` 
composer require php-di/php-di 
```

4.- Se crea una carpeta public

5.- Se copia la configuración del archivo htaccess para el servidor que se este utilizando para este caso apache

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
```

6.- Creamos el archivo /public/index.php para verificar que la configuracion quedo correctamente

#

## B | Estructura Basica del App

### Requisitos: 
- Host Virtual apuntando a la carpeta **"public/"**
- PHP 7.1 >
- Postman

### Configuraciones:

1-. Configura tu BD (src/App/Configs.php)

2-. Crea tus Rutas (src/App/Routes.php)

3-. Crea tus Controladores en la carpeta (src/App/Controller/)

4-. Crea tus Servicios en la carpeta (src/App/Services/) y  (src/App/Services.php) 

5-. Crea tus Modelos en la carpeta (src/App/Models/) y (src/App/Models.php) 

6-. Listo⚡

#

## C | Descarga
1.- Clonar el repositorio
```
git clone + url repositorio
```
2.- Instalar las dependencias necesarias para desplegar el proyecto
```
composer install
```
3.- Correr el servidor previamente configuración con xampp o cualquier otro

## C | Instalacion
- 1.- Desplegar la base de datos con el nombre slimFramework
- 2.- Desplegar el archivo Slim.json en Postman para el consumo de los servicios básicos (CRUD)