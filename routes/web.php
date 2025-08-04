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




/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
Route::get('/dashboard', function () {
    return view('Admin.dashboard.crm.index');
});


Route::get('/analytics', function () {
    return view('Admin.dashboard.Analytics.index');
});
/*-------------------------------------------------------
                    Proposal routes
-------------------------------------------------------*/
Route::get('/proposal', function () {



    return view('Admin.proposal.proposal.index');


});


Route::get('/proposal/proposalView', function () {


    return view('Admin.proposal.proposalView.index');


});


Route::get('/proposal/proposalEdit', function () {


    return view('Admin.proposal.proposalEdit.index');


});


Route::get('/proposal/proposalCreate', function () {


    return view('Admin.proposal.proposalCreate.index');


});

/*-------------------------------------------------------
                    reports routes
-------------------------------------------------------*/

Route::get('/Reports/reportsSales', function () {


    return view('Admin.reports.sales.index');


});
Route::get('/Reports/reportsLeads', function () {


    return view('Admin.reports.leads.index');


});
Route::get('/Reports/reportsProject', function () {


    return view('Admin.reports.project.index');


});
Route::get('/Reports/reportsTimesheets', function () {


    return view('Admin.reports.timesheets.index');


});

/*-------------------------------------------------------
                    aplications routes
-------------------------------------------------------*/

Route::get('/Applications/appsChat', function () {


    return view('Admin.applications.chat.index');


});
Route::get('/Applications/appsEmail', function () {


    return view('Admin.applications.email.index');


});
Route::get('/Applications/appsTasks', function () {


    return view('Admin.applications.tasks.index');


});
Route::get('/Applications/appsNotes', function () {


    return view('Admin.applications.notes.index');


});
Route::get('/Applications/appsStorage', function () {


    return view('Admin.applications.storage.index');


});
Route::get('/Applications/appsCalendar', function () {


    return view('Admin.applications.calendar.index');


});

/*-------------------------------------------------------
                    customers routes
-------------------------------------------------------*/

Route::get('/customers', function(){

    return view('Admin.customers.customers.index');

});
Route::get('/customers/customersView', function(){

    return view('Admin.customers.customersView.index');

});
Route::get('/customers/customersCreate', function(){

    return view('Admin.customers.customersCreate.index');

});

/*-------------------------------------------------------
                    payment routes
-------------------------------------------------------*/

Route::get('/payment', function(){

    return view('Admin.payment.payment.index');

});
Route::get('/payment/invoiceView', function(){

    return view('Admin.payment.invoiceView.index');

});
Route::get('/payment/invoiceCreate', function(){

    return view('Admin.payment.invoiceCreate.index');

});


/*-------------------------------------------------------
                    widgets routes
-------------------------------------------------------*/

Route::get('/widgets/lists', function () {
    return view('Admin.widgets.lists.index');
});

Route::get('/widgets/tables', function () {
    return view('Admin.widgets.tables.index');
});

Route::get('/widgets/charts', function () {
    return view('Admin.widgets.charts.index');
});

Route::get('/widgets/miscellaneous', function () {
    return view('Admin.widgets.miscellaneous.index');
});

Route::get('/widgets/statistics', function () {
    return view('Admin.widgets.statistics.index');
});

/*-------------------------------------------------------
                    authentication routes
-------------------------------------------------------*/

Route::get('/authentication/login/creative', function () {
    return view('Admin.authentication.login.creative.index');
});

Route::get('/authentication/error-404/creative', function () {
    return view('Admin.authentication.error-404.creative.index');
});

Route::get('/authentication/register/creative', function () {
    return view('Admin.authentication.register.creative.index');
});

Route::get('/authentication/maintenance/creative', function () {
    return view('Admin.authentication.maintenance.creative.index');
});

Route::get('/authentication/reset_pass/creative', function () {
    return view('Admin.authentication.reset_pass.creative.index');
});

Route::get('/authentication/verify_otp/creative', function () {
    return view('Admin.authentication.verify_otp.creative.index');
});

Route::get('/',function (){
    return view('Site.home.main');
});
