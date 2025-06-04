<?php

/**
 * FILE TITLE GOES HERE
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        TITLE.php
 * Location:
 * Project:         vanilla-mvc
 * Date Created:    01/05/2025
 *
 * Author:          ben sefton <20127535@tafe.wa.edu.au>
 *
 */

$router->get('/', 'HomeController@index');
$router->get('/auth/register', 'UserController@create', ['guest']);
$router->get('/auth/login', 'UserController@login', ['guest']);
$router->post('/auth/register', 'UserController@store', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
$router->get('/products', 'ProductController@index');
$router->get('/products/create', 'ProductController@create', ['auth']);
$router->get('/products/edit/{id}', 'ProductController@edit', ['auth']);
$router->get('/products/search', 'ProductController@search');
$router->get('/products/{id}', 'ProductController@show');

$router->post('/products', 'ProductController@store', ['auth']);
$router->put('/products/{id}', 'ProductController@update', ['auth']);

$router->delete('/products/{id}', 'ProductController@destroy', ['auth']);