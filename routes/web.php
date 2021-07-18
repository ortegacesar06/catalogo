<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogController;
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

// RUTAS DEL CATÁLOGO
Route::get('/', function () {
    return view('fragments.shop.index');
});
Route::get('/producto', function () {
    return view('fragments.shop.product');
});
Route::get('/catalogo', function () {
    return view('fragments.shop.catalogue');
});
Route::get('/catalogo/productos', function () {
    return view('fragments.shop.productos');
});
Route::get('/carrito', function () {
    return view('fragments.shop.cart');
});
Route::get('/contacto', function () {
    return view('fragments.shop.contact');
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



/*Route::prefix('/category')->group(function() {
    // RUTAS DE VISTAS
    Route::get('/', [CategoryController::class, 'index'])->name('home');
    Route::get('/crear', function(){
        return view('fragments.category.create');
    });

    // RUTAS DE FUNCIONES
    Route::post('/save', [CategoryController::class, 'store'])->name('save_category');
}); */


// RUTAS DE Catalogo
Route::resource('catalog', CatalogController::class);
Route::prefix('/catalogs')->group(function() {

    Route::get('/user', [CatalogController::class, 'show'])->name('user_catalog');
});