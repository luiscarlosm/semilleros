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

Route::get('/', 'SectionalsController@listSectionals');

//Route::get('/sectionals/{sectional}', 'SectionalsController@show');

Route::post('/sectionals/create', 'SectionalsController@create');
Route::get('/sectionals', 'SectionalsController@listSectionals');
Route::get('/research_centers', 'ResearchCentersController@listResearchCenters');
