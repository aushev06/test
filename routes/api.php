    <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users',[UserController::class,'index']);
// Route::get('/users/{id}',[UserController::class,'show']);



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});
Route::group(['namespace'=>'users','prefix'=>'users'],function (){
    Route::post('/',[UserController::class,'store']);
    Route::get('/',[UserController::class,'index']);
    Route::get('/myProducts',[UserController::class,'myProducts']);
    Route::put('/',[UserController::class,'update']);
    Route::get('/{id}',[UserController::class,'show']);
});
Route::group(['namespace'=>'products','prefix'=>'products'],function (){
    Route::get('/',[ProductController::class,'index']);
    Route::get('/{id}',[ProductController::class,'filtered']);
    Route::get('/edit/{id}',[ProductController::class,'edit']);
    Route::put('/{id}',[ProductController::class,'update']);

    Route::post('/',[ProductController::class,'store']);




});
Route::group(['namespace'=>'categories','prefix'=>'categories'],function (){
    Route::get('/',[CategoryController::class,'index']);


});


