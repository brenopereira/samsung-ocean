<?php
/**
 *
 * Estágio - Samsung Ocean - web.php
 *
 * Todos os direitos reservados: brenopereira <breno.pereira@alumiar.me>
 * Arquivo alterado em: 8/25/18 4:43 AM
 *
 */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/administrador/noticias', 'Admin\Noticias\NoticiaController@index')->name('admin.noticias.index');
Route::get('/administrador/noticias/adicionar', 'Admin\Noticias\NoticiaController@create')->name('admin.noticias.adicionar');
Route::post('/administrador/noticias/adicionar', 'Admin\Noticias\NoticiaController@store')->name('admin.noticias.criar');
Route::get('/administrador/noticias/apagar/{slug}', 'Admin\Noticias\NoticiaController@destroy')->name('admin.noticia.apagar');



