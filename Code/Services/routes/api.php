<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//===============================OTHERS CONTROLLERS==================================
use App\Http\Controllers\Others\Master\CityMasterController;
use App\Http\Controllers\Others\Master\RoomMasterController;
use App\Http\Controllers\Others\Master\HotelMasterController;
use App\Http\Controllers\Others\Master\StateMasterController;
use App\Http\Controllers\Others\Master\MarketMasterController;
use App\Http\Controllers\Others\Master\SeasonMasterController;
use App\Http\Controllers\Others\Master\CountryMasterController;
use App\Http\Controllers\Others\Master\WeekendMasterController;
use App\Http\Controllers\Others\Master\ContactDetailsController;
use App\Http\Controllers\Others\Master\CurrencyMasterController;
use App\Http\Controllers\Others\Master\DivisionMasterController;
use App\Http\Controllers\Others\Master\LanguageMasterController;
use App\Http\Controllers\Others\Master\MealPlanMasterController;
use App\Http\Controllers\Others\Master\TourTypeMasterController;
use App\Http\Controllers\Others\Master\AmenitiesMasterController;
use App\Http\Controllers\Others\Master\HotelTypeMasterController;
use App\Http\Controllers\Others\Master\HotelChainMasterController;
use App\Http\Controllers\Others\Master\LeadSourceMasterController;
use App\Http\Controllers\Others\Master\RestaurantMasterController;
use App\Http\Controllers\Others\Master\DestinationMasterController;
use App\Http\Controllers\Others\Master\BusinessTypeMasterController;
use App\Http\Controllers\Others\Master\HotelCategoryMasterController;
use App\Http\Controllers\Others\Master\HotelAdditionalMasterController;
use App\Http\Controllers\Others\Master\RestaurantMealPlanMasterController;
//===============================HOTEL CONTROLLERS==================================
use App\Http\Controllers\Hotel\Master\HotelRateMasterController;
use App\Http\Controllers\Hotel\Master\SearchHotelRateController;
//===============================TRANSPORT CONTROLLERS==================================
use App\Http\Controllers\Transport\Master\VehicleTypeMasterController;
use App\Http\Controllers\Transport\Master\VehicleBrandMasterController;
use App\Http\Controllers\Transport\Master\TransferTypeMasterController;
use App\Http\Controllers\Transport\Master\VehicleMasterController;




//====================================OTHERS COMMON API ROUTE======================================
Route::post('/amenitieslist',[AmenitiesMasterController::class,'index']);
Route::post('/addupdateamenities',[AmenitiesMasterController::class,'store']);

Route::post('/businesstypelist',[BusinessTypeMasterController::class,'index']);
Route::post('/addupdatebusinesstype',[BusinessTypeMasterController::class,'store']);

Route::post('/countrylist',[CountryMasterController::class,'index']);
Route::post('/addupdatecountry',[CountryMasterController::class,'store']);

Route::post('statelist',[StateMasterController::class,'index']);
Route::post('addupdatestate',[StateMasterController::class,'store']);
Route::post('deletestate',[StateMasterController::class,'destroy']);

Route::post('/citylist',[CityMasterController::class,'index']);
Route::post('/addupdatecity',[CityMasterController::class,'store']);

Route::post('/destinationlist',[DestinationMasterController::class,'index']);
Route::post('/addupdatedestination',[DestinationMasterController::class,'store']);

Route::post('/divisionlist',[DivisionMasterController::class,'index']);
Route::post('/addupdatedivision',[DivisionMasterController::class,'store']);

Route::post('/hoteladditionlist',[HotelAdditionalMasterController::class,'index']);
Route::post('/addupdatehoteladdition',[HotelAdditionalMasterController::class,'store']);

Route::post('/hotelcategorylist',[HotelCategoryMasterController::class,'index']);
Route::post('/addupdatehotelcategory',[HotelCategoryMasterController::class,'store']);

Route::post('/hoteltypelist',[HotelTypeMasterController::class,'index']);
Route::post('/addupdatehoteltype',[HotelTypeMasterController::class,'store']);

Route::post('/hotelchainlist',[HotelChainMasterController::class,'index']);
Route::post('/addupdatehotelchain',[HotelChainMasterController::class,'store']);

Route::post('/languagelist',[LanguageMasterController::class,'index']);
Route::post('/addupdatelanguage',[LanguageMasterController::class,'store']);

Route::post('/leadlist',[LeadSourceMasterController::class,'index']);
Route::post('/addupdatelead',[LeadSourceMasterController::class,'store']);

Route::post('/hotelmealplanlist',[MealPlanMasterController::class,'index']);
Route::post('/addupdatehotelmealplan',[MealPlanMasterController::class,'store']);

Route::post('/restaurantmasterlist',[RestaurantMasterController::class,'index']);
Route::post('/addupdaterestaurantmaster',[RestaurantMasterController::class,'store']);

Route::post('/restaurantmeallist',[RestaurantMealPlanMasterController::class,'index']);
Route::post('/addupdaterestaurantmeal',[RestaurantMealPlanMasterController::class,'store']);

Route::post('/roomlist',[RoomMasterController::class,'index']);
Route::post('/addupdateroom',[RoomMasterController::class,'store']);

Route::post('/seasonlist',[SeasonMasterController::class,'index']);
Route::post('/addupdateseason',[SeasonMasterController::class,'store']);

Route::post('/tourlist',[TourTypeMasterController::class,'index']);
Route::post('/addupdatetour',[TourTypeMasterController::class,'store']);

Route::post('/weekendlist',[WeekendMasterController::class,'index']);
Route::post('/addupdateweekend',[WeekendMasterController::class,'store']);

Route::post('/currencymasterlist',[CurrencyMasterController::class,'index']);
Route::post('/addupdatecurrencymaster',[CurrencyMasterController::class,'store']);

Route::post('/hotellist',[HotelMasterController::class,'index']);
Route::post('/addupdatehotel',[HotelMasterController::class,'store']);

Route::post('/contactlist',[ContactDetailsController::class,'index']);
Route::post('/addupdatecontact',[ContactDetailsController::class,'store']);

Route::post('/marketlist',[MarketMasterController::class,'index']);
Route::post('/addupdatemarket',[MarketMasterController::class,'store']);
//===========================================END HERE========================================

// ========================================Hotel API ROUTE===================================
Route::post('/hotelratelist',[HotelRateMasterController::class,'index']);
Route::post('/addupdatehotelrate',[HotelRateMasterController::class,'store']);

Route::post('/searchhotelratelist',[SearchHotelRateController::class,'index']);
Route::post('/addupdatesearchhotelrate',[SearchHotelRateController::class,'store']);
// ===========================================END HERE=======================================

// ========================================Transport API ROUTE===============================
Route::post('/vehicletypemasterlist',[VehicleTypeMasterController::class,'index']);
Route::post('/addupdatevehicletypemaster',[VehicleTypeMasterController::class,'store']);

Route::post('/vehiclebrandmasterlist',[VehicleBrandMasterController::class,'index']);
Route::post('/addupdatevehiclebrandmaster',[VehicleBrandMasterController::class,'store']);

Route::post('/transfertypemasterlist',[TransferTypeMasterController::class,'index']);
Route::post('/addupdatetransfertypemaster',[TransferTypeMasterController::class,'store']);

Route::post('/vehiclemasterlist',[VehicleMasterController::class,'index']);
Route::post('/addupdatevehiclemaster',[VehicleMasterController::class,'store']);
// ===========================================END HERE=======================================
