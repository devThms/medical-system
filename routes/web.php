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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/patients', 'PatientController');

Route::get('admin/patients/{patient}/record', 'PatientController@record')->name('patients.record');
Route::get('admin/patients/{record}/record-details', 'PatientController@record_details')->name('patients.record_details');
Route::post('admin/patients/saverecord', 'PatientController@saverecord')->name('patients.saverecord');
Route::get('admin/patients/{id}/medicines', 'PatientController@get_medicine_records')->name('patients.medicinerecords');

/**
 * Rutas POST-AJAX-PatientController
 */
Route::post('admin/patients/addmedicine', 'PatientController@add_medicine');
Route::post('admin/patients/addmedicine-record', 'PatientController@add_medicine_record');
Route::post('admin/patients/add-disease', 'PatientController@add_disease');
Route::post('admin/patients/add-disease-record', 'PatientController@add_disease_record');
Route::post('admin/patients/add-allergy', 'PatientController@add_allergy');
Route::post('admin/patients/add-allergy-record', 'PatientController@add_allergy_record');
