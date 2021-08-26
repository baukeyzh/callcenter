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
    $session = \Illuminate\Support\Facades\Session::get('info');
    return view('callcenter.index')->with('session',$session);
});
Route::get('/course/show/{id}',
    [
        'uses' => 'CoursesShowController@show',
        'as' => 'course.show'
    ]
);
Route::get('/lessons',
    [
        'uses' => 'LessonsController@lessons',
        'as' => 'lessons'
    ]
);
Route::get('/lesson/show/{id}',
    [
        'uses' => 'LessonsShowController@show',
        'as' => 'lessons.show'
    ]
);
Auth::routes();
Route::group(['prefix'=>'admin','middleware' =>'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    Route::get('/user/edit/{id}',
        [
            'uses' => 'UsersController@edit',
            'as' => 'user.edit'
        ]
    );
    Route::post('/user/update/{id}',
        [
            'uses' => 'UsersController@update',
            'as' => 'user.update'
        ]
    );
    Route::get('/user/delete/{id}',
        [
            'uses' => 'UsersController@destroy',
            'as' => 'user.delete'
        ]
    );
    Route::get('/user/create', [
       'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('/user/store',
        [
            'uses' => 'UsersController@store',
            'as' => 'user.store'
        ]
    );
});
Route::group(['prefix'=>'admin','middleware' =>'auth'], function (){

});

