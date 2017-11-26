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

Route::get('/',[
   'uses'=>'WelcomeController@index',
    'as'=>'/'
]);

Route::post('login',[
    'uses'=>'AuthController@login',
    'as'=>'login'
]);

Route::get('register',[
    'uses'=>'WelcomeController@register',
    'as'=>'register'
]);

Route::post('register',[
    'uses'=>'AuthController@signUp',
    'as'=>'register'
]);

Route::group(['middleware'=>'auth'],function () {

    Route::get('logout', [
        'uses' =>'HomeController@logout',
        'as'=>'logout'
    ]);

    Route::get('home', [
        'uses' =>'HomeController@index',
        'as'=>'home'
    ]);

    Route::get('new_category',[
        'uses'=>'CategoryController@getNewCategory',
        'as'=>'new_category'
    ]);

    Route::post('new_category',[
        'uses'=>'CategoryController@postNewCategory',
        'as'=>'new_category'
    ]);

    Route::get('view_category',[
        'uses'=>'CategoryController@viewAll',
        'as'=>'view_category'
    ]);

    Route::get('delete_category/{id}',[
        'uses'=>'CategoryController@deleteCategory',
        'as'=>'delete_category'
    ]);

    Route::post('edit_category',[
        'uses'=>'CategoryController@editCategory',
        'as'=>'edit_category'
    ]);

    Route::get('new_brand',[
        'uses'=>'BrandController@getNewBrand',
        'as'=>'new_brand'
    ]);

    Route::post('new_brand',[
        'uses'=>'BrandController@postNewBrand',
        'as'=>'new_brand'
    ]);

    Route::get('view_brand',[
        'uses'=>'BrandController@viewAll',
        'as'=>'view_brand'
    ]);

    Route::get('delete_brand/{id}',[
        'uses'=>'BrandController@deleteBrand',
        'as'=>'delete_brand'
    ]);

    Route::post('edit_brand',[
        'uses'=>'BrandController@editBrand',
        'as'=>'edit_brand'
    ]);

    Route::get('new_measurement',[
        'uses'=>'UnitController@getNewUnit',
        'as'=>'new_measurement'
    ]);

    Route::post('new_measurement',[
        'uses'=>'UnitController@postNewUnit',
        'as'=>'new_measurement'
    ]);

    Route::get('view_measurement',[
        'uses'=>'UnitController@viewAll',
        'as'=>'view_measurement'
    ]);

    Route::get('delete_measurement/{id}',[
        'uses'=>'UnitController@deleteUnit',
        'as'=>'delete_measurement'
    ]);

    Route::post('edit_measurement',[
        'uses'=>'UnitController@editUnit',
        'as'=>'edit_measurement'
    ]);

    Route::get('new_supplier',[
        'uses'=>'SupplierController@getNewSupplier',
        'as'=>'new_supplier'
    ]);

    Route::post('new_supplier',[
        'uses'=>'SupplierController@postNewSupplier',
        'as'=>'new_supplier'
    ]);

    Route::get('view_supplier',[
        'uses'=>'SupplierController@viewAll',
        'as'=>'view_supplier'
    ]);

    Route::get('delete_supplier/{id}',[
        'uses'=>'SupplierController@deleteSupplier',
        'as'=>'delete_supplier'
    ]);

    Route::get('edit_supplier/{id}',[
        'uses'=>'SupplierController@getEditSupplier',
        'as'=>'edit_supplier'
    ]);

    Route::post('update_supplier',[
        'uses'=>'SupplierController@updateSupplier',
        'as'=>'update_supplier'
    ]);

    Route::get('new_product',[
        'uses'=>'ProductController@getNewProduct',
        'as'=>'new_product'
    ]);


    Route::get('view_product',[
        'uses'=>'ProductController@viewAll',
        'as'=>'view_product'
    ]);

    Route::get('new_purchase',[
        'uses'=>'PurchaseController@getNewPurchase',
        'as'=>'new_purchase'
    ]);


    Route::get('view_purchase',[
        'uses'=>'PurchaseController@viewAll',
        'as'=>'view_purchase'
    ]);

    Route::post('add_to_purchaseCart',[
       'uses'=>'PurchaseController@addToPurchaseCart',
        'as'=>'add_to_purchaseCart'
    ]);

});


