<?php

Route::group(['middleware' => 'web', 'prefix' => 'api/v1/quotes', 'namespace' => 'Modules\Quotes\Http\Controllers'], function()
{
	Route::get('/get', 'TemplatesController@get');
});


/*
<?php

Route::group(['middleware' => 'web', 'prefix' => 'api/v1/blogs', 'namespace' => 'Modules\Blog\Http\Controllers'], function()
{
	Route::get('/', 'BlogController@index');
	Route::get('/{id}', 'BlogController@find');
	Route::get('/hello', 'BlogController@hello');
});*/