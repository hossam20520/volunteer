<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::get('/volunteer', 'volunteerController@choose')->name('choose');





Route::get('/contact/us/', 'volunteerController@contact');



Route::get('/volunteer/en', 'volunteerController@chooseEn')->name('choosen');

Route::get('/volunteer/register', 'volunteerController@registerForm')->name('registerForm');

Route::get('/volunteer/register/en', 'volunteerController@registerFormEn')->name('registerFormEn');



Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


Route::get('/volunteer/no/register', 'volunteerController@registerFormNot')->name('registerFormNotVol');

Route::get('/volunteer/no/register/en', 'volunteerController@registerFormEnNot')->name('registerFormNotVolEn');
Route::post('/volunteer/no/register', 'volunteerController@nonVolunteer')->name('registerPostNot');



Route::post('/volunteer/register', 'volunteerController@register')->name('registerPost');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Registered
    Route::delete('registereds/destroy', 'RegisteredController@massDestroy')->name('registereds.massDestroy');
    Route::post('registereds/parse-csv-import', 'RegisteredController@parseCsvImport')->name('registereds.parseCsvImport');
    Route::post('registereds/process-csv-import', 'RegisteredController@processCsvImport')->name('registereds.processCsvImport');
    Route::resource('registereds', 'RegisteredController');

      // Others
      Route::delete('others/destroy', 'OthersController@massDestroy')->name('others.massDestroy');
      Route::post('others/parse-csv-import', 'OthersController@parseCsvImport')->name('others.parseCsvImport');
      Route::post('others/process-csv-import', 'OthersController@processCsvImport')->name('others.processCsvImport');
      Route::resource('others', 'OthersController');

          // Analytics
    Route::delete('analytics/destroy', 'AnalyticsController@massDestroy')->name('analytics.massDestroy');
    Route::resource('analytics', 'AnalyticsController');

      // Courses
      Route::delete('courses/destroy', 'CoursesController@massDestroy')->name('courses.massDestroy');
      Route::post('courses/parse-csv-import', 'CoursesController@parseCsvImport')->name('courses.parseCsvImport');
      Route::post('courses/process-csv-import', 'CoursesController@processCsvImport')->name('courses.processCsvImport');
      Route::resource('courses', 'CoursesController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
