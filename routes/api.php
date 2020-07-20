<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/content/all-pages', 'content\AllPagesController@index')->name('all-pages');
Route::resources([
    'content/home/page' => 'content\home\PageController',
    'content/home/insurance' => 'content\home\insuranceController',
    'content/home/our-servises-title' => 'content\home\ourServisesTitleController',
    'content/home/our-servises' => 'content\home\ourServisesController',
    'content/home/autowish-about' => 'content\home\autowishAboutController',
    'content/home/autowish-benefits' => 'content\home\autowishBenefitsController',
    'content/home/autowish-servises-title' => 'content\home\autowishServisesTitleController',
    'content/home/autowish-servises' => 'content\home\autowishServisesController',
    'content/home/smart-search' => 'content\home\smartSearchController',
    'content/home/soc-media' => 'content\home\socMediaController',
]);
Route::resources([
    'content/kbm-check/page' => 'content\kbmCheck\PageController',
    'content/kbm-check/kbm-bonus-malus' => 'content\kbmCheck\kbmBonusMalusController',
    'content/kbm-check/whattodo-title' => 'content\kbmCheck\whattodoTitleController',
    'content/kbm-check/whattodo-item-1' => 'content\kbmCheck\whattodoItem1Controller',
    'content/kbm-check/whattodo-item-2' => 'content\kbmCheck\whattodoItem2Controller',
    'content/kbm-check/whattodo-item-3' => 'content\kbmCheck\whattodoItem3Controller',
]);
Route::resources([
    'content/kbm-restore/page' => 'content\kbmRestore\PageController',
    'content/kbm-restore/how-to-restore' => 'content\kbmRestore\howToRestoreController',
    'content/kbm-restore/restore-by-sb' => 'content\kbmRestore\restoreBySbController',
    'content/kbm-restore/restore-by-insurance' => 'content\kbmRestore\restoreByInsuranceController',
    'content/kbm-restore/restore-by-broker' => 'content\kbmRestore\restoreByBrokerController',
    'content/kbm-restore/restore-by-rsa' => 'content\kbmRestore\restoreByRsaController',
    'content/kbm-restore/restore-by-quick' => 'content\kbmRestore\restoreByQuickController',
]);