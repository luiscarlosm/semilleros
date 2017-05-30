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

Route::get('/sectionals/new', 'SectionalsController@newSectional');
Route::get('/sectionals/{sectional}', 'SectionalsController@show');
Route::post('/sectionals/create', 'SectionalsController@create');
Route::get('/sectionals', 'SectionalsController@listSectionals');
Route::get('/faculties', 'FacultiesController@listFalcuties');
Route::get('/projects', 'ProjectsController@listProjects');
Route::get('/projects/new', 'ProjectsController@newProject');
Route::post('/projects/create', 'ProjectsController@create');
Route::get('/research_centers', 'ResearchCentersController@listResearchCenters');
Route::get('/events', 'EventsController@listEvents');
Route::get('/groups', 'GroupsController@listGroups');
Route::get('/members', 'MembersController@listMembers');
Route::get('/academic_programs', 'AcademicProgramsController@listAcademicPrograms');
Route::get('/research_centers', 'ResearchCentersController@newResearchCenters');
Route::post('/research_centers/create', 'ResearchCentersController@create');
