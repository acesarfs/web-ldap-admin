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

Route::get('/', 'indexController@index');

Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');
Route::post('logout', 'Auth\LoginController@logout');

# ldapusers
Route::get('ldapusers', 'LdapUserController@index');
Route::post('ldapusers', 'LdapUserController@store');
Route::get('ldapusers/my', 'LdapUserController@my');
Route::get('ldapusers/create', 'LdapUserController@create');
Route::patch('ldapusers/{username}', 'LdapUserController@update');
Route::get('ldapusers/{username}', 'LdapUserController@show');
Route::delete('ldapusers/{username}', 'LdapUserController@destroy');



