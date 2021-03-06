<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');

$router->get('/movies',         'MoviesController@index');      // SELECT all : Tous les éléments
$router->get('/movies/add',     'MoviesController@add');        // CREATE one : Formulaire d'un élément
$router->post('/movies/save',   'MoviesController@save');       // CREATE one (action) : Action du formulaire d'un élément
$router->get('/movies/(\d+)',   'MoviesController@read');       // SELECT one : Affichage d'un élément

$router->get('/categories',         'CategoriesController@index');      // SELECT all : Tous les éléments
$router->get('/categories/add',     'CategoriesController@add');    // CREATE one : Formulaire d'un élément
$router->post('/categories/save',   'CategoriesController@save'); // CREATE one (action) : Action du formulaire d'un élément
$router->get('/categories/(\d+)',   'CategoriesController@read'); // SELECT one : Affichage d'un élément

$router->get('/actors',         'ActorsController@index');      // SELECT all : Tous les éléments
$router->get('/actors/add',     'ActorsController@add');    // CREATE one : Formulaire d'un élément
$router->post('/actors/save',   'ActorsController@save'); // CREATE one (action) : Action du formulaire d'un élément
$router->get('/actors/(\d+)',   'ActorsController@read'); // SELECT one : Affichage d'un élément

$router->get('/api/movies', 'ApiMoviesController@index');
$router->get('/api/movies/(\d+)', 'ApiMoviesController@read');
$router->get('/api/movies/category/(\d+)', 'ApiMoviesController@readByCategory');

$router->get('/api/categories', 'ApiCategoriesController@index');
$router->get('/api/categories/(\d+)', 'ApiCategoriesController@read');

$router->get('/api/actors', 'ApiActorsController@index');
$router->get('/api/actors/(\d+)', 'ApiActorsController@read');


// Run it!
$router->run();