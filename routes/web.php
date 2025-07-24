<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.crm.index');
});

Route::get('/analytics', function () {
    return view('dashboard.Analytics.index');
});
Route::get('/proposal', function () {



    return view('proposal.proposal.index');


});


Route::get('/proposal/proposalView', function () {


    return view('proposal.proposalView.index');


});


Route::get('/proposal/proposalEdit', function () {


    return view('proposal.proposalEdit.index');


});


Route::get('/proposal/proposalCreate', function () {


    return view('proposal.proposalCreate.index');


});
