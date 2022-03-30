<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PagesController::class, 'view'])->name('view');
Route::post('/meaning', [PagesController::class, 'search'])->name('search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



/*Route::get('/test', function () {
    $words = json_decode(file_get_contents(public_path() . "/data.json"), true);
    foreach ($words as $key => $item) {

        $new_record = [
            'word' => $key,
            'meaning' => $item[0]
        ];

        return $new_record;

    }
});*/
