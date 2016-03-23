<?php
Route::group(['middleware' => 'web', 'prefix' => 'api/v1/quotes', 'namespace' => 'Modules\Quotes\Http\Controllers'], function() {
    Route::get('templates/get', 'TemplatesController@get');
    Route::get('templates/getById/{id}', 'TemplatesController@getById');
    Route::get('templates/getActive', 'TemplatesController@getActive');
    Route::get('templates/getActiveById/{id}', 'TemplatesController@getActiveById');
    Route::post('templates/getAllByIds', 'TemplatesController@getAllByIds');
    Route::post('templates/add', 'TemplatesController@add');
    Route::get('QuoteStatuses/get', 'QuoteStatusController@get');
    Route::get('QuoteStatuses/getById/{id}', 'QuoteStatusController@getById');
    Route::get('GlobalSettings/get', 'QuoteGlobalSettingsController@get');
    Route::get('GlobalSettings/getById/{id}', 'QuoteGlobalSettingsController@getById');
});
