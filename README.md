### Recursos web
https://www.itsolutionstuff.com/post/laravel-livewire-toastr-notifications-exampleexample.html
instalar los mensajes de alerta.
https://realrashid.github.io/sweet-alert/

### COMMITS

## initial commit (X7VITO7X)
- Se carga la rama principal
## directorio publico para archivos (X7VITO7X)
- Directorio público para archivos
## realizado sistema roles y permisos spatie (X7VITO7X)
- Se configura spatie para roles y permisos
## Creación contratos en PDF (Jefferson-17)
- Adaptación de los contratos PDF de cada servicio
## Se remueve el slug (X7VITO7X)
- Se remueve el SLUG de las tablas (poco práctico)

## Corrección permisos y remover slug (X7VITO7X)
- Se remueve el SLUG de las tablas (poco práctico)
- Se corrigen algunos permisos de los módulos
## CRUD creación de personas funcional (X7VITO7X)
- Se remueve el SLUG de las tablas (poco práctico)
- Se corrigen algunos permisos de los módulos

## optimizacioncodigo (X7VITO7X)
- Se repara el ingreso al sistema con email
- Se repara imágen de cabecera en contratos
- Se elimina el tipo de contrato Salud de los seeders
- Se prueban y corrigen los permisos para ver contratos en PDF
- se definen y configuran datos únicos en la tabla personas.
- Se relacionan tabla usuario y tabla personas.
- Se corrigen reglas de validacion en el formulario de creación
- se establecen permisos para crear usuarios, conductores y clientes
- Se optimiza el guardado de personas para evitar datos duplicados con trycatch
- Se actualiza readme.MD

## Observaciones

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

- Las credenciales administrativas registradas en el seeder de usuario son:
    Username: admin
    Clave: 123

- Para futuros COMMITS / favor nombrar la rama y el commit de la misma manera.

## Colaboradores:
X7VITO7X - Administrador repositorio
Jefferson-17 - Colaborador desarrollo





