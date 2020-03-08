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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('login');
})->name('index');

Route::get('/register', function(){
  return view('register'); 
})->name('register');

Route::get('/experienceCreate', function(){
    return view('experience.experienceCreate');
})->name('experienceCreate');

Route::get('/createEducation', function(){
    return view('education.educationCreate');
})->name('educationCreate');

Route::get('/createJob', function(){
    return view('jobs.jobCreate');
})->name('jobCreate');

Route::get('/createGroup', function(){
    return view('groups.groupCreate');
})->name('groupCreate');
Route::get('/createSkill', function(){
    return view('skills.skillCreate');
})->name('skillCreate');

Route::get('/error', function(){
    return view('error');
})->name('error');

Route::get('/home',[ "uses" => 'AccountController@showHome', "as" => 'home']);
Route::get('/profile/{id}',[ "uses" => 'ProfileController@readProfile', "as" => 'profile']);
Route::get('/profileEdit/{id}',[ "uses" => 'ProfileController@readEdit', "as" => 'profileEdit']);

Route::get('/readEducation',[ "uses" => 'ProfileController@readEducation', "as" => 'readEducation']);
Route::get('/readExperience',[ "uses" => 'ProfileController@readExperience', "as" => 'readExperience']);
Route::get('/readSkill',[ "uses" => 'ProfileController@readSkill', "as" => 'readSkill']);


Route::get('/EducationEdit/{id}',[ "uses" => 'ProfileController@readEducationEdit', "as" => 'readEducationEdit']);
Route::get('/ExperienceEdit/{id}',[ "uses" => 'ProfileController@readExperienceEdit', "as" => 'readExperienceEdit']);
Route::get('/SkillEdit/{id}',[ "uses" => 'ProfileController@readSkillEdit', "as" => 'readSkillEdit']);

Route::post('/createEducation',[ "uses" => 'ProfileController@createEducation', "as" => 'createEducation']);
Route::post('/createExperience',[ "uses" => 'ProfileController@createExperience', "as" => 'createExperience']);
Route::post('/createSkill',[ "uses" => 'ProfileController@createSkill', "as" => 'createSkill']);

Route::post('/updateEducation',[ "uses" => 'ProfileController@updateEducation', "as" => 'updateEducation']);
Route::post('/updateExperience',[ "uses" => 'ProfileController@updateExperience', "as" => 'updateExperience']);
Route::post('/updateSkill',[ "uses" => 'ProfileController@updateSkill', "as" => 'updateSkill']);

Route::get('/deleteEducation/{id}',[ "uses" => 'ProfileController@deleteEducation']);
Route::get('/deleteExperience/{id}',[ "uses" => 'ProfileController@deleteExperience']);
Route::get('/deleteSkill/{id}',[ "uses" => 'ProfileController@deleteSkill' ]);

Route::get('/readJobs',[ "uses" => 'JobPostingController@retrieveAll', "as" => 'readJobs']);
Route::get('/jobEdit/{id}',[ "uses" => 'JobPostingController@retrieve', "as" => 'readJobEdit']);
Route::post('/createJob',[ "uses" => 'JobPostingController@insert', "as" => 'createJob']);
Route::post('/updateJob',[ "uses" => 'JobPostingController@reburish', "as" => 'updateJob']);
Route::get('/deleteJob/{id}',[ "uses" => 'JobPostingController@terminate']);

Route::get('/viewGroups',[ "uses" => 'AffinityGroupsController@retrieveAll', "as" => 'viewGroups']);
Route::get('/readGroup/{id}',[ "uses" => 'AffinityGroupsController@retrieve', "as" => 'readGroup']);
Route::get('/GroupEdit/{id}',[ "uses" => 'AffinityGroupsController@retrieveEdit', "as" => 'readGroupEdit']);
Route::post('/createGroup',[ "uses" => 'AffinityGroupsController@insert', "as" => 'createGroup']);
Route::post('/updateGroup',[ "uses" => 'AffinityGroupsController@refurbish', "as" => 'updateGroup']);
Route::get('/deleteGroup/{id}',[ "uses" => 'AffinityGroupsController@terminate']);
Route::get('/joinGroup/{id}',[ "uses" => 'AffinityGroupsController@joinGroup', "as" => 'joinGroup']);
Route::get('/leaveGroup/{id}',[ "uses" => 'AffinityGroupsController@leaveGroup', "as" => 'leaveGroup']);

Route::get('/terminate/{id}','AffinityGroupsController@removeUser');

Route::get('image/{filename}', 'ImageController@displayImage')->name('displayImage');

Route::get('logout', 'AccountController@logout')->name('logout');
Route::post('/login','AccountController@login');
Route::post('/register','AccountController@register');

Route::get('/userstable', 'AdminController@retrieveAll')->name('userstable');
Route::get('/admincontrol', 'AdminController@retrieveAll')->name('admincontrol');
Route::get('/toggleSuspend/{id}','AdminController@toggleSuspend');
Route::get('/terminate/{id}','AdminController@terminate');

Route::post('/update','ProfileController@updateProfile')->name('refurbish');



