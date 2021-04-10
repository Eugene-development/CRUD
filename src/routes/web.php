<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


//use App\Model\MenuController;
//use Illuminate\Support\Facades\DB;

//$router->get('/', function () use ($router) {
//    $result = DB::connection('mysql')->select('SELECT * FROM navigation_menu');
//    $time = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
//    echo $time . ' секунд.';
//
////    return $result;
//
//
//
//    return $router->app->version('Navigation\NavigationController@get');
//});

$router->group(['namespace' => 'Navigation\Menu'], function() use ($router) {
    $router->get('/get-all-menu', 'MenuController@getAllHm');

    $router->post('/add-menu', 'MenuController@add');
    $router->put('/update-menu', 'MenuController@update');
    $router->delete('/delete-menu/{id}', 'MenuController@delete');
});

$router->group(['namespace' => 'Navigation\Head'], function() use ($router) {
    $router->get('/get-all-head', 'HeadController@getAll');
    $router->get('/get-all-head-rubric', 'HeadController@getAllHm');

    $router->post('/add-head', 'HeadController@add');
    $router->put('/update-head', 'HeadController@update');
    $router->delete('/delete-head/{id}', 'HeadController@delete');
});

$router->group(['namespace' => 'Navigation\Rubric'], function() use ($router) {
    $router->get('/get-all-rubric', 'RubricController@getAll');
    $router->get('/get-all-rubric-category-count-product', 'RubricController@getAllHmCount');
    $router->get('/get-where-rubric-category-count-text/{param}', 'RubricController@getWhHmHmCount');
//    $router->get('/get-where-rubric-category-count-product/{param}', 'RubricController@getWhHmCount');

    $router->post('/add-rubric', 'RubricController@add');
    $router->put('/update-rubric', 'RubricController@update');
    $router->delete('/delete-rubric/{id}', 'RubricController@delete');
});

$router->group(['namespace' => 'Navigation\Category'], function() use ($router) {
    $router->get('/get-all-category-seo', 'CategoryController@getAllHm');
    $router->get('/get-category-seo/{id}', 'CategoryController@getWhHm');

    $router->post('/add-category', 'CategoryController@add');
    $router->put('/update-category', 'CategoryController@update');
    $router->delete('/delete-category/{id}', 'CategoryController@delete');
});

$router->group(['namespace' => 'Catalog'], function() use ($router) {
    $router->get('/get-one-product/{id}', 'ProductController@getOne');
    $router->get('/get-all-product/', 'ProductController@getAll');
    $router->get('/get-where-product/{param}', 'ProductController@getWh');
    $router->get('/get-search-product/{search}', 'ProductController@getSearch');

    $router->post('/add-product', 'ProductController@add');
    $router->put('/update-product', 'ProductController@update');
    $router->delete('/delete-product/{id}', 'ProductController@delete');


    //    $router->get('/products-new', 'ProductController@productsNew');
//    $router->get('/products-sale', 'ProductController@productsSale');
//    $router->get('/products-action', 'ProductController@productsAction');
//    $router->get('/products-bestseller', 'ProductController@productsBestseller');
//    $router->get('/products-similar', 'ProductController@productsSimilar');
});

$router->group(['namespace' => 'Text'], function() use ($router) {
    $router->get('/get-one-text/{id}', 'TextController@getOne');
    $router->get('/get-all-text/', 'TextController@getAll');
    $router->get('/get-where-text/{param}', 'TextController@getWh');

    $router->post('/add-text', 'TextController@add');
    $router->put('/update-text', 'TextController@update');
    $router->delete('/delete-text/{id}', 'TextController@delete');



    //    $router->get('/products-new', 'ProductController@productsNew');
//    $router->get('/products-sale', 'ProductController@productsSale');
//    $router->get('/products-action', 'ProductController@productsAction');
//    $router->get('/products-bestseller', 'ProductController@productsBestseller');
//    $router->get('/products-similar', 'ProductController@productsSimilar');
});













$router->group(['namespace' => 'Seo'], function() use ($router) {
    $router->get('/seo-all', 'SeoController@seo');
});

$router->group(['namespace' => 'Cart'], function() use ($router) {
    $router->get('/cart', 'CartController@cart');

    $router->get('/yandex/{total}', 'Cart\Yandex@yandex');
});


$router->group(['namespace' => 'Blog'], function() use ($router) {
    $router->get('/post-one/{id}', 'PostController@post');
    $router->get('/posts-all/', 'PostController@postsAll');
//    $router->get('/posts-paginate/{category}', 'PostController@postsPaginate');
    $router->get('/posts-search/{search}', 'PostController@postsPaginateSearch');
});

$router->post('/image-upload', 'Image\ImageController@uploadImage');


