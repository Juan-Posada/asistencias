<?php
return [
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
    '/coordinador/index' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'index'
    ],
    '/coordinador/view' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'view'
    ],
    '/coordinador/new' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'newCoordinador'     // Nombre de la funcion 
    ],
    '/coordinador/create' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'createCoordinador'
    ],
    '/coordinador/view/(\d+)' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'viewCoordinador'
    ],
    '/coordinador/edit/(\d+)' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'editCoordinador'
    ],
    '/coordinador/update' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'updateCoordinador'
    ],
    '/coordinador/delete/(\d+)' => [
        'controller' => 'App\Controllers\CoordinadorController',
        'action' => 'deleteCoordinador'
    ],
    "/coordinador/remove" => [
        "controller" => "App\Controllers\CoordinadorController",
        "action" => "removeCoordinador"
    ],
    // Rutas para tabla Horario
    '/horario/view' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'view'
    ],
    '/horario/new' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'new'     // Nombre de la funcion 
    ],
    '/horario/create' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'create'
    ],
    '/horario/view/(\d+)' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'viewOne'
    ],
    '/horario/edit/(\d+)' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'edit'
    ],
    '/horario/update' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'update'
    ],
    '/horario/delete/(\d+)' => [
        'controller' => 'App\Controllers\HorarioController',
        'action' => 'delete'
    ],
    "/horario/remove" => [
        "controller" => "App\Controllers\HorarioController",
        "action" => "remove"
    ],
    // Rutas para tabla Competencia
    '/competencia/view' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'view'
    ],
    '/competencia/new' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'new'     // Nombre de la funcion 
    ],
    '/competencia/create' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'create'
    ],
    '/competencia/view/(\d+)' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'viewOne'
    ],
    '/competencia/edit/(\d+)' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'edit'
    ],
    '/competencia/update' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'update'
    ],
    '/competencia/delete/(\d+)' => [
        'controller' => 'App\Controllers\CompetenciaController',
        'action' => 'delete'
    ],
    "/competencia/remove" => [
        "controller" => "App\Controllers\CompetenciaController",
        "action" => "remove"
    ],
    // Rutas para tabla administrador
    '/administrador/index' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'index'
    ],
    '/administrador/view' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'view'
    ],
    '/administrador/new' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'newAdministrador'     // Nombre de la funcion 
    ],
    '/administrador/create' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'createAdministrador'
    ],
    '/administrador/view/(\d+)' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'viewAdministrador'
    ],
    '/administrador/edit/(\d+)' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'editAdministrador'
    ],
    '/administrador/update' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'updateAdministrador'
    ],
    '/administrador/delete/(\d+)' => [
        'controller' => 'App\Controllers\administradorController',
        'action' => 'deleteAdministrador'
    ],
    "/administrador/remove" => [
        "controller" => "App\Controllers\administradorController",
        "action" => "removeAdministrador"
    ],
    // Rutas para tabla aprendiz
    '/aprendiz/view' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'view'
    ],
    '/aprendiz/new' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'new'     // Nombre de la funcion 
    ],
    '/aprendiz/create' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'create'
    ],
    '/aprendiz/view/(\d+)' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'viewOne'
    ],
    '/aprendiz/edit/(\d+)' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'edit'
    ],
    '/aprendiz/update' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'update'
    ],
    '/aprendiz/delete/(\d+)' => [
        'controller' => 'App\Controllers\AprendizController',
        'action' => 'delete'
    ],
    "/aprendiz/remove" => [
        "controller" => "App\Controllers\AprendizController",
        "action" => "remove"
    ],

    // Rutas para Instructor
    "/instructor/view" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "view"
    ],
    "/instructor/new" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "newInstructor"
    ],
    "/instructor/create" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "createInstructor"
    ],
    "/instructor/view/(\d+)" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "viewInstructor"
    ],
    "/instructor/edit/(\d+)" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "editInstructor"
    ],
    "/instructor/update" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "updateInstructor"
    ],
    "/instructor/delete/(\d+)" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "deleteInstructor"
    ],
    "/instructor/remove" => [
        "controller" => "App\Controllers\InstructorController",
        "action" => "remove"
    ],
    
    '/login/init' => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'initLogin'
    ],
    '/login/logout' => [
        "controller" => 'App\Controllers\LoginController',
        "action" => 'LogoutLogin'
    ],
];
