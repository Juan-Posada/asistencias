<?php
return [
    "/" => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'initLogin'
    ],
    "/usuario/home" => [
        "controller" => 'App\Controllers\UsuarioController',
        "action" => 'home'
    ],
    
    // Regional
    "/regional/view" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "view"
    ],
    "/regional/new" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "newRegional"
    ],
    "/regional/create" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "createRegional"
    ],
    "/regional/view/(\d+)" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "viewRegional"
    ],
    "/regional/edit/(\d+)" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "editRegional"
    ],
    "/regional/update" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "updateRegional"
    ],
    "/regional/delete/(\d+)" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "deleteRegional"
    ],
    "/regional/remove" => [
        "controller" => "App\Controllers\RegionalController",
        "action" => "remove"
    ],

    // Programa
    "/programa/view" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "view"
    ],
    "/programa/new" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "newPrograma"
    ],
    "/programa/create" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "createPrograma"
    ],
    "/programa/view/(\d+)" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "viewPrograma"
    ],
    "/programa/edit/(\d+)" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "editPrograma"
    ],
    "/programa/update" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "updatePrograma"
    ],
    "/programa/delete/(\d+)" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "deletePrograma"
    ],
    "/programa/remove" => [
        "controller" => "App\Controllers\ProgramaController",
        "action" => "remove"
    ],
    // rol
    "/rol/view" => [
        "controller" => "App\Controllers\RolController",
        "action" => "view"
    ],
    "/rol/new" => [
        "controller" => "App\Controllers\RolController",
        "action" => "newRol"
    ],
    "/rol/create" => [
        "controller" => "App\Controllers\RolController",
        "action" => "createRol"
    ],
    "/rol/view/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "viewRol"
    ],
    "/rol/edit/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "editRol"
    ],
    "/rol/update" => [
        "controller" => "App\Controllers\RolController",
        "action" => "updateRol"
    ],
    "/rol/delete/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "deleteRol"
    ],
    "/rol/remove" => [
        "controller" => "App\Controllers\RolController",
        "action" => "remove"
    ],
    "/rol/view" => [
        "controller" => "App\Controllers\RolController",
        "action" => "view"
    ],
    "/rol/new" => [
        "controller" => "App\Controllers\RolController",
        "action" => "newRol"
    ],
    "/rol/create" => [
        "controller" => "App\Controllers\RolController",
        "action" => "createRol"
    ],
    "/rol/view/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "viewRol"
    ],
    "/rol/edit/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "editRol"
    ],
    "/rol/update" => [
        "controller" => "App\Controllers\RolController",
        "action" => "updateRol"
    ],
    "/rol/delete/(\d+)" => [
        "controller" => "App\Controllers\RolController",
        "action" => "deleteRol"
    ],
    "/rol/remove" => [
        "controller" => "App\Controllers\RolController",
        "action" => "remove"
    ],
    // Rutas para Usuario
    "/usuario/view" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "view"
    ],
    "/usuario/new" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "new"
    ],
    "/usuario/create" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "create"
    ],
    "/usuario/view/(\d+)" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "viewOne"
    ],
    "/usuario/edit/(\d+)" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "edit"
    ],
    "/usuario/update" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "update"
    ],
    "/usuario/delete/(\d+)" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "delete"
    ],
    "/usuario/remove" => [
        "controller" => "App\Controllers\UsuarioController",
        "action" => "remove"
    ],
    // Rutas para Administrador
    "/administrador/view" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "view"
    ],
    "/administrador/new" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "new"
    ],
    "/administrador/create" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "create"
    ],
    "/administrador/view/(\d+)" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "viewOne"
    ],
    "/administrador/edit/(\d+)" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "edit"
    ],
    "/administrador/update" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "update"
    ],
    "/administrador/delete/(\d+)" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "delete"
    ],
    "/administrador/remove" => [
        "controller" => "App\Controllers\AdministradorController",
        "action" => "remove"
    ],
    // Rutas para Centro
    "/centro/view" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "view"
    ],
    "/centro/new" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "new"
    ],
    "/centro/create" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "create"
    ],
    "/centro/view/(\d+)" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "viewOne"
    ],
    "/centro/edit/(\d+)" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "edit"
    ],
    "/centro/update" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "update"
    ],
    "/centro/delete/(\d+)" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "delete"
    ],
    "/centro/remove" => [
        "controller" => "App\Controllers\CentroController",
        "action" => "remove"
    ],
    //asistencia
    "/asistencia/view" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "view"
    ],
    "/login/login" => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'initLogin'
    ],
    '/login/logout' => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'LogoutLogin'
    ],
];