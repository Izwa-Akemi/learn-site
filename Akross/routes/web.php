<?php
use App\Models\Inquiry;
use App\Models\Counseling;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\CounselingController;
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

//問合せ画面表示
Route::get('/', [InquiryController::class, 'index']);

//問合せ内容登録処理
Route::post('/inquirys', [InquiryController::class, 'store']);

//カウンセリング画面表示
Route::get('/counselings', [CounselingController::class, 'index']);
