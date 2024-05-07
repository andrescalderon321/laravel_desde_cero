<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     // return view('welcome');
//     return "hola mundo";
// });

Route::get('/',HomeController::class);

// en las carpetas routes/web.php se llaman los controladores,los cuales se encargan de la logica de las rutas
//  con la use App\Http\Controllers\CursoController; llamamos a nuestra clase curso controller
// para llamar a todas las funciones de nuestro clase curso controlador escribimos la siguiente linea :  
// Route :: get('cursos',[CursoController::class, 'index']); el uso de [] significa un array que recorre todas
// las funciones de la clase curso.

Route :: get('cursos',[CursoController::class, 'index']);
Route :: get('cursos/create',[CursoController::class, 'create']);
Route :: get('cursos/{curso}',[CursoController::class, 'show']);



// Route ::get('cursos',function(){

//     return "bienvenido a la pagina principal";
// });

// para pasar a la siguiente ruta de cursos 

// Route ::get('cursos/create',function()
// {
//     return "en esta pagina podras crear un curso";
// }
// );

/*

para guardar una variable desde la url

*/

// Route::get('cursos/{curso}',function($curso)
// {

//     return "bienevenido al curso :  $curso";

// }
// );
// Para que me guarde dos valores de las variables tanto en curso como en categorias,tambien la siguiente linea 
// $categorias=null : es cuando no se coloca ningun valor en la variable categoria aparezca el valor de null
// este es el enrutamiento desde la web http://localhost/laravel_desde_cero/public/cursos/programacion/java

// Route ::get('cursos/{curso}/{categorias}',function($curso,$categorias = NULL)
// {

//     if($categorias){

//         return "bienvenidos al curso $curso de la categoria $categorias";
//     }else{
//         return "bienvenido al curso : $curso";
//     }
// }
// );

