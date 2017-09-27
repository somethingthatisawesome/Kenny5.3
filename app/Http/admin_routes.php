<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');

	/* ================== Products ================== */
	Route::resource(config('laraadmin.adminRoute') . '/products', 'LA\ProductsController');
	Route::get(config('laraadmin.adminRoute') . '/product_dt_ajax', 'LA\ProductsController@dtajax');


	/* ================== Colors ================== */
	Route::resource(config('laraadmin.adminRoute') . '/colors', 'LA\ColorsController');
	Route::get(config('laraadmin.adminRoute') . '/color_dt_ajax', 'LA\ColorsController@dtajax');

	/* ================== Product_Categories ================== */
	Route::resource(config('laraadmin.adminRoute') . '/product_categories', 'LA\Product_CategoriesController');
	Route::get(config('laraadmin.adminRoute') . '/product_category_dt_ajax', 'LA\Product_CategoriesController@dtajax');

	/* ================== Color_Themes ================== */
	Route::resource(config('laraadmin.adminRoute') . '/color_themes', 'LA\Color_ThemesController');
	Route::get(config('laraadmin.adminRoute') . '/color_theme_dt_ajax', 'LA\Color_ThemesController@dtajax');

	/* ================== Company_Infos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/company_infos', 'LA\Company_InfosController');
	Route::get(config('laraadmin.adminRoute') . '/company_info_dt_ajax', 'LA\Company_InfosController@dtajax');

	/* ================== Project_categories ================== */
	Route::resource(config('laraadmin.adminRoute') . '/project_categories', 'LA\Project_categoriesController');
	Route::get(config('laraadmin.adminRoute') . '/project_category_dt_ajax', 'LA\Project_categoriesController@dtajax');

	/* ================== Projects ================== */
	Route::resource(config('laraadmin.adminRoute') . '/projects', 'LA\ProjectsController');
	Route::get(config('laraadmin.adminRoute') . '/project_dt_ajax', 'LA\ProjectsController@dtajax');

	/* ================== News ================== */
	Route::resource(config('laraadmin.adminRoute') . '/news', 'LA\NewsController');
	Route::get(config('laraadmin.adminRoute') . '/news_dt_ajax', 'LA\NewsController@dtajax');

	/* ================== Cities ================== */
	Route::resource(config('laraadmin.adminRoute') . '/cities', 'LA\CitiesController');
	Route::get(config('laraadmin.adminRoute') . '/city_dt_ajax', 'LA\CitiesController@dtajax');

	/* ================== Wards ================== */
	Route::resource(config('laraadmin.adminRoute') . '/wards', 'LA\WardsController');
	Route::get(config('laraadmin.adminRoute') . '/ward_dt_ajax', 'LA\WardsController@dtajax');

	/* ================== Agen_Profiles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/agen_profiles', 'LA\Agen_ProfilesController');
	Route::get(config('laraadmin.adminRoute') . '/agen_profile_dt_ajax', 'LA\Agen_ProfilesController@dtajax');

	/* ================== Agents ================== */
	Route::resource(config('laraadmin.adminRoute') . '/agents', 'LA\AgentsController');
	Route::get(config('laraadmin.adminRoute') . '/agent_dt_ajax', 'LA\AgentsController@dtajax');

	/* ================== Sub_categories ================== */
	Route::resource(config('laraadmin.adminRoute') . '/sub_categories', 'LA\Sub_categoriesController');
	Route::get(config('laraadmin.adminRoute') . '/sub_category_dt_ajax', 'LA\Sub_categoriesController@dtajax');
});
