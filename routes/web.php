<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Site;

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

//Gets all listings
Route::get('/', function () {
    return view('sites', [
        'heading' => 'Recently uploaded sites',
        'sites' => Site::all()
    ]);
});

Route::get('/sites/{site}', function (Site $site) {
    return view('site', [
        'site' => $site
    ]);
});




Route::get('/about', function () {
    return response('<h1> This is an about page <h1>', 200)
    ->header('My Header', 'its value'); //how to send headers back in response.
});

// use wild cards {} to pass in parameters through http request "/posts/<id>
Route::get('/posts/{id}', function($id){
    ddd($id); // helper for debug dd() also works
    return response('Post' . $id);
}) ->where('id', '[0-9]+'); // Can use ->where to limit what values id can take using regex

Route::get('/search', function(Request $request){ //use Illuminate\Http\Request to access request objects. use dd to see what is inside of the request object.
    return$request->name . ' ' . $request->town;
});

