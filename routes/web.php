<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ShopController;

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

// RUTAS DEL CATÁLOGO
Route::get('/', [ShopController::class, 'index']);
Route::get('/catalogo', [ShopController::class, 'catalogue']);
Route::get('/catalogo/{catalog}/productos', [ShopController::class, 'products'])->name('shop.catalog');
Route::get('/catalogo/productos/{id}', [ShopController::class, 'single'])->name('shop.single');
Route::get('/carrito', [ShopController::class, 'cart']);
Route::get('/contacto', [ShopController::class, 'contact']);

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
    Route::get('/crear', [ProductController::class, 'create']);

    Route::get('/user', [ProductController::class, 'show']);

    Route::get('/', [ProductController::class, 'index']);

    Route::get('{id_product}/editP', [ProductController::class, 'edit']);
    Route::patch('/{id_product}', [ProductController::class, 'update']);
    //Route::post('/listUser', [ProductController::class, 'destroy']);
    Route::delete('/{id_product}', [ProductController::class, 'destroy']);
    // RUTAS DE FUNCIONES
    Route::post('/save', [ProductController::class, 'store'])->name('save_products');
});

// RUTAS DE Categoria
Route::resource('category', CategoryController::class);

// RUTAS DE Catalogo
Route::resource('catalog', CatalogController::class);
Route::prefix('/catalogs')->group(function() {

    Route::get('/user', [CatalogController::class, 'show'])->name('user_catalog');
});