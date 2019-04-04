<?php
Route::get('/', 'SiteController@index');
Route::resource('/alunos','AlunoController');
Route::resource('/docentes','DocenteController');
Route::resource('/diretores','DirecaoController');
Route::resource('/disciplinas','DisciplinaController');
Route::get('/login','LoginController@user_login');
Route::get('homedirecao',function(){
	return view ('homedirecao');
});
Route::get('logindocente',function(){
	return view ('logindocente');
});
Route::get('loginaluno',function(){
	return view ('loginaluno');
});
Route::get('recuperarsenha',function(){
	return view ('recuperarsenha');
});
Route::get('recuperarsenhadocente',function(){
	return view ('recuperarsenhadocente');
});
Route::get('recuperarsenhaaluno',function(){
	return view ('recuperarsenhaaluno');
});
