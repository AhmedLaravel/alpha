<?php
//////////////////////// Admin Route File ////////////////////
Route::get('test',function(){
    return view('Admin.category.adminCategoriesTable',['title'=>" ", 'titleSummary'=>' ']);
});
/////////////////////// Admin prefix and Namespace ////////////
Route::group(['prefix'=>'adminPanel','namespace'=>'Admin'],function(){
    Route::get('/','AdminController@login')->name('adminPanel');
    Route::post('checkLogin','AdminController@checkLogin');
    Route::get('/forgot/password','AdminController@forgot_password' );
    Route::post('/forgot/password','AdminController@reset_password' );
    Route::get('/reset/password/{token}','AdminController@new_password' );
    Route::post('/reset/password/{token}','AdminController@change_password' );
    /////////////////////// Admin Middleware ///////////////////
    Route::group(['middleware'=>'admin:admin'],function(){
        Route::get('dashboard', function(){
            return view('Admin.home');
        });

        //////////////// Logout ///////////////////////
        Route::get('logout','AdminController@logout');
        //////////////// Logout ///////////////////////

        //////////////// Edit Admin ///////////////////////
        Route::get('adminEdit','AdminController@editAdmin');
        Route::post('editAdmin','AdminController@updateAdmin');
        //////////////// Edit Admin ///////////////////////

        //////////////// Edit Admin Settings ///////////////////////
        Route::get('settings','AdminSettings@viewSettings');
        Route::post('settings','AdminSettings@updateSettings');
        //////////////// Edit Admin Settings ///////////////////////

        //////////////// Edit Admin Contacts ///////////////////////
        Route::get('contacts','AdminContactUs@viewContacts');
        Route::Delete('contacts','AdminContactUs@deleteContacts');
        Route::get('contacts/deleteAll','AdminContactUs@DeleteAll');
        Route::get('viewMail/{id}','AdminContactUs@viewContent');
        //////////////// Edit Admin Contacts ///////////////////////

        //////////////// Edit Admin Categories ///////////////////////
        Route::get('categories','AdminCategories@viewCategories');
//        Route::Delete('contacts','AdminContactUs@deleteContacts');
        Route::get('categories/create','AdminCategories@viewCreateCategory');
        Route::post('categories/create','AdminCategories@storeCategory');
        Route::Delete('categoriesDelete','AdminCategories@DeleteCategory');
//        Route::get('viewMail/{id}','AdminContactUs@viewContent');
        //////////////// Edit Admin Categories ///////////////////////



    });
    /////////////////////// Admin Middleware ///////////////////


});
/////////////////////// Admin prefix and Namespace ////////////


//////////////////////// Admin Route File ////////////////////
