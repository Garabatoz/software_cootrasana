# SOFTWARE COOTRASANA

<hr>

## Documentación externa

### Notificaciones

-   https://www.itsolutionstuff.com/post/laravel-livewire-toastr-notifications-exampleexample.html
-   instalar los mensajes de alerta. <br>
    https://realrashid.github.io/sweet-alert/

### Control de cambios (Commits)

### initial commit (x7vito7x)

-   Se carga la rama principal

### directorio publico para archivos (x7vito7x)

-   Directorio público para archivos

### realizado sistema roles y permisos spatie (x7vito7x)

-   Se configura spatie para roles y permisos

### Creación contratos en PDF (Jefferson-17)

-   Adaptación de los contratos PDF de cada servicio

### Se remueve el slug (x7vito7x)

-   Se remueve el SLUG de las tablas (poco práctico)

### Corrección permisos y remover slug (x7vito7x)

-   Se remueve el SLUG de las tablas (poco práctico)
-   Se corrigen algunos permisos de los módulos

### CRUD creación de personas funcional (x7vito7x)

-   Se remueve el SLUG de las tablas (poco práctico)
-   Se corrigen algunos permisos de los módulos

### optimizacioncodigo (x7vito7x)

-   Se repara el ingreso al sistema con email
-   Se repara imágen de cabecera en contratos
-   Se elimina el tipo de contrato Salud de los seeders
-   Se prueban y corrigen los permisos para ver contratos en PDF
-   se definen y configuran datos únicos en la tabla personas.
-   Se relacionan tabla usuario y tabla personas.
-   Se corrigen reglas de validacion en el formulario de creación
-   se establecen permisos para crear usuarios, conductores y clientes
-   Se optimiza el guardado de personas para evitar datos duplicados con trycatch
-   Se actualiza readme.MD

### editarpersonas (x7vito7x)

-   Se repara error package.json
-   Correcciones en validaciones de campos en personasCreate.
-   Se crea componente livewire para editar personas.
-   Se agrega campo status a migraciones de tabla personas, clientes, conduc, usuarios.
-   Se corrigen validaciones de password.
-   Se prescinde del CRUD de usuarios y se vincula al formulario de ingreso de personas.
-   Se personaliza el acceso, se impide para usuarios inactivos.
-   Se actualiza readme.MD
-   Terminado edición de personas, clientes, usuarios y conductores. Todos heredan de personas

### generarfuecpdf  (Jefferson-17)

-   Diseño plantilla FUEC en html y css

### crudvehiculos  (Maria0690)

-   Realización del CRUD de vehículos completo

### adecuacionescrudvehiculo  (x7vito7x)

- Se incluye en el menú lateral laopción de vehículo.
- Se elimina la opción del SLUG del CRUD vehículo
### estadousuario  (x7vito7x)

- Se corrige el estado de usuario inactivo
- Se optimiza la activación y desactivación de usuarios.

### Observaciones

Los pasos para clonar el proyecto son los siguientes:

1. Clonar el proyecto en el equipo
   git clone https://github.com/View-Foundation/software_cootrasana.git
2. Crear el archivo .env y configurar la base de datos: software_cootrasana
3. Ejecutar: composer install && npm install
4. Ejecutar php artisan k:g
5. Ejecutar php artisan storage:link
6. Ejecutar las migraciones: php artisan migrate:fresh
7. Ejecutar los seeders: php artisan db:seed
8. Ejecutar el xampp y el servidor: php artisan serve

### Credenciales de acceso

Las credenciales administrativas registradas en el seeder de usuario son:

    Username: admin
    Clave: 123

### Pasos para la modificación del proyecto

1. git checkout main
2. git pull (va bajar las ultimas actualizaciones del proyecto)
3. git branch [nombrerama]
(Para futuros Commits favor nombrar la rama y el commit de la misma manera.)
4. git checkout [nombrerama]

-- empezamos a trabajar en nuestro proyecto
al terminar ejecutamos

5. git push -u origin [nombrerama]

Cada que hagamos un pull deben ejecutar las migraciones:

6. Ejecutar las migraciones: php artisan migrate:fresh
7. Ejecutar los seeders: php artisan db:seed

## Colaboradores:

- X7VITO7X - Administrador repositorio
- Jefferson-17 - Colaborador desarrollo
- Maria0690 - Colaborador desarrollo
