<?php

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

/*
 * Return the index page.
 */
Route::get('/', function () { return view('index'); });

//////////////////////////
//                      //
//     PRODUCT PART     //
//                      //
//////////////////////////
/**
 * Return the products layout.
 */
Route::get('/products',"ProductController@getProducts");
/*
 * Return an information about a specific Product by an id.
 */
Route::get('/product/{id}',"ProductController@getProduct");

//////////////////////////
//                      //
//       USER PART      //
//                      //
//////////////////////////
/**
 * It redirect to login page
 */
Route::get('/login',"UserController@getLogin");
/*
 * Use for send the form data
 */
Route::post('/login',"UserController@postLogin");
/**
 * It logout the user.
 */
Route::get('/logout',"UserController@getLogout");
/*
 * It redirect to Sign in page
 */
Route::get('/signup',"UserController@getSignup");
/*
 * Use for send the form data
 */
Route::post('/signup',"UserController@postSignup");

//////////////////////////
//                      //
//       CART PART      //
//                      //
//////////////////////////
/**
 * Return the cart layout, and all of products what user put the cart.
 */
Route::get('/cart',"UserController@getCart");
/**
 * Add product to the cart.
 */
Route::post('/addToCart',"UserController@addToCart");