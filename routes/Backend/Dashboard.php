<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('test', 'DashboardController@test')->name('test');

/**
 *  Categories Management
 */
Route::group(['namespace' => 'Categories'], function () {
    Route::resource('categories', 'CategoriesController', ['except' => 
        ['show']]);

    //For DataTables
    Route::post('categories/get', 'CategoriesTableController')
        ->name('categories.get');
});

/**
 *  SubCategories Management
 */
Route::group(['namespace' => 'SubCategories'], function () {
    Route::resource('subcategories', 'SubCategoriesController', ['except' => 
        ['show']]);

    //For DataTables
    Route::post('subcategories/get', 'SubCategoriesTableController')
        ->name('subcategories.get');
    Route::get('subcategories/{id}/get', 'SubCategoriesController@getByCategory')
        ->name('subcategories.get-by-category');
});
Route::group(['namespace' => 'HomeSlider'], function () {
    Route::resource('home-slider', 'HomeSliderController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('home-slider/get', 'HomeSliderTableController')
        ->name('home-slider.get');
});

/**
 *  Style Management
 */
Route::group(['namespace' => 'Style'], function () {
    Route::resource('styles', 'StyleController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('styles/get', 'StyleTableController')
        ->name('styles.get');
});

/**
 *  Material Management
 */
Route::group(['namespace' => 'Material'], function () {
    Route::resource('materials', 'MaterialController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('materials/get', 'MaterialTableController')
        ->name('materials.get');
});

/**
 *  Weave Management
 */
Route::group(['namespace' => 'Weave'], function () {
    Route::resource('weaves', 'WeaveController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('weaves/get', 'WeaveTableController')
        ->name('weaves.get');
});

/**
 *  Color Management
 */
Route::group(['namespace' => 'Color'], function () {
    Route::resource('colors', 'ColorController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('colors/get', 'ColorTableController')
        ->name('colors.get');
});

/**
 *  Page Management
 */
Route::group(['namespace' => 'Page'], function () {
    Route::resource('pages', 'PageController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('pages/get', 'PageTableController')
        ->name('pages.get');
});

/**
 *  Review Management
 */
Route::group(['namespace' => 'Review'], function () {
    Route::resource('reviews', 'ReviewController', ['except' => 
        ['show']]);

    //For DataTables
    Route::post('reviews/get', 'ReviewTableController')
        ->name('reviews.get');
});

/**
 * Settings
 */
Route::group(['namespace' => 'Setting'], function () {
    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::post('settings', 'SettingController@saveData')->name('settings.store');
});

/**
 *  Subscription Management
 */
Route::group(['namespace' => 'Subscription'], function () {
    Route::resource('subscriptions', 'SubscriptionController', ['except' => 
        ['show']]);

    //For DataTables
    Route::post('subscriptions/get', 'SubscriptionTableController')
        ->name('subscriptions.get');
});

/**
 *  Store Management
 */
Route::group(['namespace' => 'Store'], function () {
    Route::resource('stores', 'StoreController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('stores/get', 'StoreTableController')
        ->name('stores.get');
});

Route::group(['namespace' => 'Mailinglist'], function () {
    Route::resource('mailinglists', 'MailinglistController', ['except' =>
        ['show']]);

    //For DataTables
    Route::post('mailinglists/get', 'MailinglistTableController')
        ->name('mailinglists.get');
});