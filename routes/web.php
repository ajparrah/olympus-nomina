<?php

//GESTION DE DATOS BASICOS

Route::get('/', 'PagesController@principal')->name('principal');

//Route::get('registro', 'PagesController@registro')->name('registro');

Route::get('docentes-hijos', 'PagesController@hijos')->name('hijos');

Route::get('docentes-hijos-detalles', 'PagesController@hijosdetalles')->name('hijosdetalles');

Route::get('registro-laborales', 'PagesController@registrof2')->name('registrof2');

Route::get('registro-bancario', 'PagesController@registrof3')->name('registrof3');

//SEDE
Route::resource('sede', 'SedeController');

//DECANATO

Route::resource('decanato', 'DecanatoController');

//DOCENTE
Route::resource('docente', 'DocenteController');



//Route::get('/sedes', 'PagesController@sedes')->name('sede');
//Route::get('/sedes/agregar', 'PagesController@sedes_add')->name('sede-add');
//Route::get('/sedes/editar', 'PagesController@sedes_edit')->name('sede-edit');



//Route::get('decanatos', 'PagesController@decanatos')->name('decanato');

Route::get('escuelas', 'PagesController@escuelas')->name('escuela');

Route::get('bancos', 'PagesController@bancos')->name('banco');

Route::get('conceptos', 'PagesController@conceptos')->name('conceptos');

// nomina DOCENTES


Route::get('nomina-docentes-prenomina', 'PagesController@prenomina')->name('prenomina');

Route::get('prenomina-check', 'PagesController@cargaprenomina')->name('cargaprenomina');

Route::get('prenomina-modificar', 'PagesController@modificarpre')->name('modificarpre');

Route::get('nomina-docentes-revision', 'PagesController@revisiondocentes')->name('revisiondocentes');

Route::get('nomina-docentes-cierre', 'PagesController@cierredocentes')->name('cierredocentes');

// nomina ESPECIAL
Route::get('nomina-especial-prenomina', 'PagesController@prenominaespecial')->name('prenominaespecial');

Route::get('prenomina-especial-check', 'PagesController@cargaprenominaespecial')->name('cargaprenominaespecial');

Route::get('prenomina-especial-modificar', 'PagesController@modificarpreespecial')->name('modificarpreespecial');

Route::get('nomina-especial-revision', 'PagesController@revisionespecial')->name('revisionespecial');

Route::get('nomina-especial-cierre', 'PagesController@cierreespecial')->name('cierreespecial');

//REPORTES DOCENTES

Route::get('reporte-docente', 'PagesController@reportedocente')->name('reportedocente');

//REPORTES ESPECIALES

Route::get('reporte-especial', 'PagesController@reporteespecial')->name('reporteespecial');




