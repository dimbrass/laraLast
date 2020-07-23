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
    'content/kbm-check/whattodo-item' => 'content\kbmCheck\whattodoItemController',
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
Route::resources([
    'content/mulct-check/page' => 'content\mulctCheck\PageController',
    'content/mulct-check/check-by-license' => 'content\mulctCheck\checkByLicenseController',
    'content/mulct-check/deny-mulct' => 'content\mulctCheck\denyMulctController',
    'content/mulct-check/mulct-gbdd' => 'content\mulctCheck\mulctGbddController',
    'content/mulct-check/mulct-item' => 'content\mulctCheck\mulctItemController',
    'content/mulct-check/mulcts-to-pay' => 'content\mulctCheck\mulctsToPayController',
    'content/mulct-check/paid-mulct' => 'content\mulctCheck\paidMulctController',
    'content/mulct-check/useful' => 'content\mulctCheck\usefulController',
]);
Route::resources([
    'content/user-agreement/page' => 'content\userAgreement\PageController',
    'content/user-agreement/page-title' => 'content\userAgreement\pageTitleController',
    'content/user-agreement/text-block' => 'content\userAgreement\textBlockController',
]);
Route::resources([
    'content/calculator/page' => 'content\calculator\PageController',
    'content/calculator/useful-info-top' => 'content\calculator\usefulInfoTopController',
    'content/calculator/useful-info-item' => 'content\calculator\usefulInfoItemController',
]);
Route::resources([
    'content/tech-inspection/page' => 'content\techInspection\PageController',
    'content/tech-inspection/top' => 'content\techInspection\topController',
    'content/tech-inspection/order' => 'content\techInspection\orderController',
    'content/tech-inspection/order-item' => 'content\techInspection\orderItemController',
]);
Route::resources([
    'content/polis-check-auth/page' => 'content\polisCheckAuth\PageController',
    'content/polis-check-auth/top' => 'content\polisCheckAuth\TopController',
    'content/polis-check-auth/item' => 'content\polisCheckAuth\ItemController',
]);