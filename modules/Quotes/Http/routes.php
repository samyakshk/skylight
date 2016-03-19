<?php

Route::group(['middleware' => 'web', 'prefix' => 'api/v1/quotes', 'namespace' => 'Modules\Quotes\Http\Controllers'], function()
{
	Route::get('templates/get', 'TemplatesController@get');
        Route::get('templates/getById/{id}', 'TemplatesController@getById');
});