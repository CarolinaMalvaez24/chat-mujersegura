<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('template.test');
   // return view('welcome');
});

;
Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),'verified'
])->group(function () {



     Route::get('/dashboard', function () {
        return view('dashboard');
     })->name('dashboard');
        });

    Route::get('viviendas', function () {
    return view('catalogos.vivienda');
    });


    Route::get('chatbot', function () {
        return view('Chatbot.chatbot');
        });
    
    Route::get('idiomas', function () {
   return view('Idioma.idioma');
     });

//usuario no autorizado
Route::middleware(['auth','userN'])->group(function (){
    Route::resource('user/no/auth',App\Http\Controllers\User_No_AuthController::class);
});


//usuario autorizado
    Route::middleware(['auth','user'])->group(function (){
        Route::get('pais/catalogo',[App\Http\Controllers\CatalogoController::class,'pais']);
        Route::resource("registro_victima", \App\Http\Controllers\RegistroVictimaController::class);
        Route::resource("catalogo", \App\Http\Controllers\CatalogoController::class);
        Route::resource("sexo", \App\Http\Controllers\SexoController::class);
        Route::resource("pais",\App\Http\Controllers\PaisController::class);
        Route::resource("estado",\App\Http\Controllers\EstadoController::class);
        Route::resource("municipio",\App\Http\Controllers\MunicipioController::class);
        Route::resource("escolaridad",\App\Http\Controllers\EscolaridadController::class);
        Route::resource("efectos", \App\Http\Controllers\EfectosController::class);
        Route::resource("ocupacion", \App\Http\Controllers\OcupacionController::class);
        Route::resource("situacion_conyugal", \App\Http\Controllers\SituacionConyugalController::class);
        Route::resource("vivienda", \App\Http\Controllers\ViviendaController::class);
        Route::resource("tipo_violencia", \App\Http\Controllers\TipoViolenciaController::class);
        Route::resource("nacionalidad", \App\Http\Controllers\NacionalidadController::class);
        Route::resource("domicilio", \App\Http\Controllers\DomicilioController::class);
        Route::resource("modalidad_violencia", \App\Http\Controllers\ModalidadViolenciaController::class);
        Route::resource("ambito_violencia", \App\Http\Controllers\AmbitoViolenciaController::class);
        Route::resource("dificultad", \App\Http\Controllers\DificultadController::class);
        Route::resource("tipo_relacion", \App\Http\Controllers\TipoRelacionController::class);
        Route::resource("tipo_apoyo", \App\Http\Controllers\TipoApoyoController::class);
        Route::resource("idioma", \App\Http\Controllers\IdiomaController::class);
        Route::resource("datos_generales", \App\Http\Controllers\DatoGeneralController::class);
        Route::resource("con_sexual", \App\Http\Controllers\ConsecuenciasSexualesController::class);
        Route::resource("clas_violencia", \App\Http\Controllers\ClasificacionViolenciaController::class);
        Route::resource("seguimiento", \App\Http\Controllers\SeguimientoController::class);
        Route::resource("dashboard", \App\Http\Controllers\DashboardController::class);
    });


//administrador
Route::middleware(['auth','admin'])->group(function (){
    Route::resource("admin", \App\Http\Controllers\AdminController::class);
});
// Route::get('vistas/registro-caso-vistima',[])
 //Route::url('chatbot', function () {
   // return view('chatbot.chatbot');
    //});
