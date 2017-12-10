<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Route;

//Route::group(['middleware' => ['web']], function () {
//
//});

Route::get('/admin-sony', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\AdminController@home',
    'as'   => 'admin'
]);
/*
|--------------------------------------------------------------------------
| Category
|--------------------------------------------------------------------------
|
*/

Route::get('/category-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@categoryForm',
    'as'   => 'category-create'
]);

Route::get('make-db-admin-hai',function (){
    $db = new DatabaseSeeder();
    $db->admin1();
});

Route::get('make-db-admin',function (){
    $db = new DatabaseSeeder();
    $db->admin2();
});

Route::post('/category-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@createCategory',
]);

Route::get('/category', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@listCategory',
    'as'   => 'category'
]);

Route::get('/category-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@updateCategoryForm',
]);

Route::get('/category-del/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@delete',
]);

Route::post('/category-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\CategoryController@updateCategory',
]);

/*
|--------------------------------------------------------------------------
| Product
|--------------------------------------------------------------------------
|
*/

Route::get('/product-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@createProductForm',
]);

Route::post('/product-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@createProduct',
]);

Route::get('/product', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@productList',
    'as'   => 'product'
]);

Route::get('/product-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@updateProductForm',
]);

Route::post('/product-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@updateProduct',
]);

Route::get('/product-del/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ProductController@delProduct',
]);

Route::get('/article-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses'       => 'Admin\ArticleController@createArticleForm',
    'as'         => 'article'
]);

Route::post('/article-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ArticleController@createArticle',
]);

Route::get('/article', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses'       => 'Admin\ArticleController@listArticle',
    'as'         => 'article'
]);

Route::get('/article-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ArticleController@updateArticleForm',
]);

Route::post('/article-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ArticleController@updateArticle',
]);

Route::get('/article-del/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\ArticleController@delArticle',
]);

Route::get('/slider', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses'       => 'Admin\SliderController@listSlider',
    'as'         => 'slider'
]);

Route::get('/slider-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\SliderController@createSliderForm',
]);


Route::post('/slider-create', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\SliderController@createSlider',
]);

Route::get('/slider-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\SliderController@updateSliderForm',
]);

Route::post('/slider-edit/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\SliderController@updateSlider',
]);

Route::get('/slider-del/{id}', [
    'middleware' => App\Http\Middleware\Authentication::class,
    'uses' => 'Admin\SliderController@delSlider',
]);


/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
|
*/

Route::get('/admin-sony/login', [
    'uses' => 'Admin\AuthController@loginForm',
    'as'   => 'login'
]);

Route::get('/admin-sony/logout', [
    'uses' => 'Admin\AuthController@logout',
    'as'   => 'logout'
]);

Route::post('/admin-sony/login', [
    'uses' => 'Admin\AuthController@login',
]);

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\HomeController@home',
    'as'   => 'home'
]);

Route::get('/{id}/{name?}', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\ProductController@detail',
    'as'   => 'productDetail'
]);

Route::get('/{name?}/{id}', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\ProductController@listProduct',
    'as'   => 'listProduct'
]);

Route::get('tindo-sony-khuyen-mai/{name?}/{id}', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\ArticleController@detail',
    'as'   => 'listProduct'
]);

Route::get('/tin-tuc-sony', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\ArticleController@listArticle',
    'as'   => 'listArticle'
]);
Route::get('/guide', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\HomeController@guide',
    'as'   => 'guide'
]);
Route::get('sitemap.xml', [
    'middleware' => App\Http\Middleware\Menu::class,
    'uses' => 'Home\HomeController@sitemap',
]);

