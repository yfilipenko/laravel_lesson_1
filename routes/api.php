<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('person', function(){
    return response()->json([
        'name' => 'Jonh Norton',
        'age' => '55',
        'city' => 'Kharkiv'
    ]);
});

Route::get('person/{name}', function($name){
    
    $json = ['people' => [
        [
            'name' => 'John',
            'age' => '45',
            'city' => 'Kharkiv'
        ],
        [
            'name' => 'Test',
            'age' => '55',
            'city' => 'Kiev'
        ],
        [
            'name' => 'Lorem',
            'age' => '35',
            'city' => 'Poltava'
        ]
    ]];
    
    $found_person = false;
    foreach( $json['people'] as $person ):
        if($person['name'] == $name):
            $found_person = true;
            return response()->json($person);
        endif;
    endforeach;
    
    if(!$found_person):
        return response('<h1>Sorry, person with name '.$name.' in database.</h1>');
    endif;
});