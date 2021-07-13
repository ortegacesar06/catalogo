<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// RUTAS DE VISTAS
Route::get('/', function () {
    return view('welcome');
});

// RUTAS DE LAS VISTAS DE AUTENTICACION
Route::get('/login', [LoginController::class, 'showLogin']);
Route::get('/registro', [LoginController::class, 'showRegister']);

// RUTAS DE AUTENTICACION
Route::prefix('/auth')->group(function(){
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/register', [LoginController::class, 'register'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    // RUTAS DEL ADMINISTRADOR
    Route::prefix('/admin')->group(function() {
        Route::get('/', function () {
            return view('fragments.admin.index');
        });
        //CRUD Usuarios
        Route::get('/users', [UserController::class, 'allUsers']);
        Route::get('/create-user', [UserController::class,'showAddUser']);
        Route::get('/edit-user/{id_user}', [UserController::class,'showEditUser']);
        Route::put('/update-user/{id_user}', [UserController::class, 'updateUser']);
        Route::put('/update-password/{id_user}',[UserController::class, 'updatePassword']);
        Route::delete('delete/{id_user}', [UserController::class, 'destroyUser']);
    });
});

Route::get('/perfil',function() {
    return view('fragments.profile.profile');
});

// RUTAS DE PRUEBA
Route::prefix('/roles')->group(function() {
    // RUTAS DE VISTAS
    Route::get('/crear', function(){
        return view('fragments.roles');
    });

    // RUTAS DE FUNCIONES
    Route::post('/save', [RoleController::class, 'store'])->name('save_roles');
});

// RUTAS DE PRODUCTOS
Route::prefix('/productos')->group(function() {
    // RUTAS DE VISTAS
    Route::get('/crear', function(){
        return view('fragments.product.create');
    });

    // RUTAS DE FUNCIONES
    Route::post('/save', [ProductController::class, 'store'])->name('save_products');
});

// RUTAS DE Cartegoria
Route::resource('category', CategoryController::class);

Route::prefix('/categories')->group(function() {

    Route::get('/user', [CategoryController::class, 'show'])->name('user_category');
});

/*Route::prefix('/category')->group(function() {
    // RUTAS DE VISTAS
    Route::get('/', [CategoryController::class, 'index'])->name('home');
    Route::get('/crear', function(){
        return view('fragments.category.create');
    });

    // RUTAS DE FUNCIONES
    Route::post('/save', [CategoryController::class, 'store'])->name('save_category');
}); */
