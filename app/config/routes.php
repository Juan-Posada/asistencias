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
        "action" => "createUsuario"
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
    // Rutas para Ficha
    "/ficha/view" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "view"
    ],
    "/ficha/new" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "new"
    ],
    "/ficha/create" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "create"
    ],
    "/ficha/view/(\d+)" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "viewOne"
    ],
    "/ficha/edit/(\d+)" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "edit"
    ],
    "/ficha/update" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "update"
    ],
    "/ficha/delete/(\d+)" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "delete"
    ],
    "/ficha/remove" => [
        "controller" => "App\Controllers\FichaController",
        "action" => "remove"
    ],
    //asistencia
    "/asistencia/view" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "view"
    ],
    "/asistencia/new" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "new"
    ],
    "/asistencia/create" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "create"
    ],
    "/asistencia/view/(\d+)" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "viewOne"
    ],
    "/asistencia/edit/(\d+)" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "edit"
    ],
    "/asistencia/update" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "update"
    ],
    "/asistencia/delete/(\d+)" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "delete"
    ],
    "/asistencia/remove" => [
        "controller" => "App\Controllers\AsistenciaController",
        "action" => "remove"
    ],
    "/login/init" => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'initLogin'
    ],
    // Rutas para tabla Coordinador
        '/coordinador/index'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'index'
        ],
        '/coordinador/view'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'view'
        ],
        '/coordinador/new' => [
            'controller' => 'App\Controllers\CoordinadorController',
            'action' => 'newCoordinador'     // Nombre de la funcion 
        ], 
        '/coordinador/create'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'createCoordinador'
        ],
        '/coordinador/view/(\d+)'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'viewCoordinador'
        ],
        '/coordinador/edit/(\d+)'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'editCoordinador'
        ],
        '/coordinador/update'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'updateCoordinador'
        ],
        '/coordinador/delete/(\d+)'=> [
            'controller' =>'App\Controllers\CoordinadorController',
            'action' => 'deleteCoordinador' 
        ],
    '/login/logout' => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'LogoutLogin'
    ],
];