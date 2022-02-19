<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Especiales']);

        ModelsPermission::create(['name' => 'home','description' => 'Ver el dashboard'])->syncRoles([$role1,$role2]);
        //!  PERMISOS PARA MODULO DE ADMINISTRACION
        ModelsPermission::create(['name' => 'administrador','description' => 'Ver menú administracion'])->syncRoles([$role1]);
        //TODOS PERMISOS PARA GESTIÓN DE USUARIOS
        ModelsPermission::create(['name' => 'administrador.usuarios.index','description' => 'Ver usuarios'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.usuarios.create','description' => 'Crear usuarios'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.usuarios.edit','description' => 'Editar usuarios'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.usuarios.destroy','description' => 'Eliminar usuarios'])->syncRoles([$role1]);
        //TODOS PERMISOS PARA GESTIÓN DE ROLES
        ModelsPermission::create(['name' => 'administrador.roles.index','description' => 'Ver roles'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.roles.create','description' => 'Crear roles'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.roles.edit','description' => 'Editar roles'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.roles.destroy','description' => 'Eliminar roles'])->syncRoles([$role1]);
        //TODOS PERMISOS PARA GESTIÓN DE PERSONAS
        ModelsPermission::create(['name' => 'administrador.personas.index','description' => 'Ver personas'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.personas.create','description' => 'Crear personas'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.personas.edit','description' => 'Editar personas'])->syncRoles([$role1]);
        ModelsPermission::create(['name' => 'administrador.personas.destroy','description' => 'Eliminar personas'])->syncRoles([$role1]);


        //!  PERMISOS PARA MODULO DE ESPECIALES
        ModelsPermission::create(['name' => 'especiales','description' => 'Ver menú especiales'])->syncRoles([$role1,$role2]);
        //TODOS PERMISOS PARA GESTIÓN DE CONTRATOS
        ModelsPermission::create(['name' => 'especiales.contratos.index','description' => 'Ver contratos'])->syncRoles([$role1,$role2]);
        ModelsPermission::create(['name' => 'especiales.contratos.create','description' => 'Crear contratos'])->syncRoles([$role1,$role2]);
        ModelsPermission::create(['name' => 'especiales.contratos.edit','description' => 'Editar contratos'])->syncRoles([$role1,$role2]);
        ModelsPermission::create(['name' => 'especiales.contratos.destroy','description' => 'Eliminar contratos'])->syncRoles([$role1,$role2]);
        ModelsPermission::create(['name' => 'especiales.contratos.generarContratoPdf','description' => 'Generar Contrato'])->syncRoles([$role1,$role2]);



    }
}
