<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('logCheck', 'LoginDataController@loginCheck');
Route::post('RegEnt', 'RegistrationDataController@RegEntry');*/

//Route::get('ProfileForView12', 'Api\Login\LoginDataController@ProfileForListAll');

/* User Profile For Master Information */
/* Start */
Route::post('ProfileForInsert', 'MstProfileForController@ProfileForInsert');
Route::get('ProfileForView', 'MstProfileForController@ProfileForListAll');
Route::post('ProfileForUpdate', 'MstProfileForController@ProfileForUpdate');
Route::post('ProfileForDelete', 'MstProfileForController@ProfileForDelete');
Route::post('ProfileForIndividualView', 'MstProfileForController@ProfileForIndividualView');
/* User Profile For End */

/* Height For Master Information */
/* Start */
Route::post('HeightInsert', 'MstHeightController@HeightInsert');
Route::get('HeightView', 'MstHeightController@HeightListAll');
Route::post('HeightUpdate', 'MstHeightController@HeightUpdate');
Route::post('HeightDelete', 'MstHeightController@HeightDelete');
Route::post('HeightIndividualView', 'MstHeightController@HeightIndividualView');
/* Height For End */

/* Marital Status For Master Information */
/* Start */
Route::post('MaritalStatusInsert', 'MstMaritalStatusController@MaritalStatusInsert');
Route::get('MaritalStatusView', 'MstMaritalStatusController@MaritalStatusListAll');
Route::post('MaritalStatusUpdate', 'MstMaritalStatusController@MaritalStatusUpdate');
Route::post('MaritalStatusDelete', 'MstMaritalStatusController@MaritalStatusDelete');
Route::post('MaritalStatusIndividualView', 'MstMaritalStatusController@MaritalStatusIndividualView');
/* Marital Status For End */


/* Religion For Master Information */
/* Start */
Route::post('ReligionInsert', 'MstReligionController@ReligionInsert');
Route::get('ReligionView', 'MstReligionController@ReligionListAll');
Route::post('ReligionUpdate', 'MstReligionController@ReligionUpdate');
Route::post('ReligionDelete', 'MstReligionController@ReligionDelete');
Route::post('ReligionIndividualView', 'MstReligionController@ReligionIndividualView');
/* Religion For End */

/* Mother Tongue For Master Information */
/* Start */
Route::post('MotherTongueInsert', 'MstMotherTongueController@MotherTongueInsert');
Route::get('MotherTongueView', 'MstMotherTongueController@MotherTongueListAll');
Route::post('MotherTongueUpdate', 'MstMotherTongueController@MotherTongueUpdate');
Route::post('MotherTongueDelete', 'MstMotherTongueController@MotherTongueDelete');
Route::post('MotherTongueIndividualView', 'MstMotherTongueController@MotherTongueIndividualView');
/* Mother Tongue For End */



/* Country For Master Information */
/* Start */
Route::post('CountryInsert', 'MstCountryController@CountryInsert');
Route::get('CountryView', 'MstCountryController@CountryListAll');
Route::post('CountryUpdate', 'MstCountryController@CountryUpdate');
Route::post('CountryDelete', 'MstCountryController@CountryDelete');
Route::post('CountryIndividualView', 'MstCountryController@CountryIndividualView');
/* Country For End */


/* State For Master Information */
/* Start */
Route::post('StateInsert', 'MstStateController@StateInsert');
Route::post('StateView', 'MstStateController@StateListAll');
Route::post('StateUpdate', 'MstStateController@StateUpdate');
Route::post('StateDelete', 'MstStateController@StateDelete');
Route::post('StateIndividualView', 'MstStateController@StateIndividualView');
/* State For End */


/* City For Master Information */
/* Start */
Route::post('CityInsert', 'MstCityController@CityInsert');
Route::Post('CityView', 'MstCityController@CityListAll');
Route::post('CityUpdate', 'MstCityController@CityUpdate');
Route::post('CityDelete', 'MstCityController@CityDelete');
Route::post('CityIndividualView', 'MstCityController@CityIndividualView');
/* City For End */

/* Annual Income For Master Information */
/* Start */
Route::post('AnnualIncomeInsert', 'MstAnnualIncome@AnnualIncomeInsert');
Route::get('AnnualIncomeView', 'MstAnnualIncome@AnnualIncomeListAll');
Route::post('AnnualIncomeUpdate', 'MstAnnualIncome@AnnualIncomeUpdate');
Route::post('AnnualIncomeDelete', 'MstAnnualIncome@AnnualIncomeDelete');
Route::post('AnnualIncomeIndividualView', 'MstAnnualIncome@AnnualIncomeIndividualView');
/* Annual Income For End */


/* Occupation For Master Information */
/* Start */
Route::post('OccupationInsert', 'MstOccupationController@OccupationInsert');
Route::get('OccupationView', 'MstOccupationController@OccupationListAll');
Route::post('OccupationUpdate', 'MstOccupationController@OccupationUpdate');
Route::post('OccupationDelete', 'MstOccupationController@OccupationDelete');
Route::post('OccupationIndividualView', 'MstOccupationController@OccupationIndividualView');
/* Occupation For End */



/* Family Type For Master Information */
/* Start */
Route::post('FamilyTypeInsert', 'MstFamilyTypeController@FamilyTypeInsert');
Route::get('FamilyTypeView', 'MstFamilyTypeController@FamilyTypeListAll');
Route::post('FamilyTypeUpdate', 'MstFamilyTypeController@FamilyTypeUpdate');
Route::post('FamilyTypeDelete', 'MstFamilyTypeController@FamilyTypeDelete');
Route::post('FamilyTypeIndividualView', 'MstFamilyTypeController@FamilyTypeIndividualView');
/* Family Type For End */


/* Manglik For Master Information */
/* Start */
Route::post('ManglikInsert', 'MstManglikController@ManglikInsert');
Route::get('ManglikView', 'MstManglikController@ManglikListAll');
Route::post('ManglikUpdate', 'MstManglikController@ManglikUpdate');
Route::post('ManglikDelete', 'MstManglikController@ManglikDelete');
Route::post('ManglikIndividualView', 'MstManglikController@ManglikIndividualView');
/* Manglik For End */


/* Horoscope For Master Information */
/* Start */
Route::post('HoroscopeInsert', 'MstHoroscopeController@HoroscopeInsert');
Route::get('HoroscopeView', 'MstHoroscopeController@HoroscopeListAll');
Route::post('HoroscopeUpdate', 'MstHoroscopeController@HoroscopeUpdate');
Route::post('HoroscopeDelete', 'MstHoroscopeController@HoroscopeDelete');
Route::post('HoroscopeIndividualView', 'MstHoroscopeController@HoroscopeIndividualView');
/* Horoscope For End */


/* Family Livint In For Master Information */
/* Start */
Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('FamilyLivintView', 'MstFamilyLivintController@FamilyLivintListAll');
Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Family Livint In For End */

/* Degree In For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('DegreeView', 'MstDegreeController@DegreeListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Family Livint In For End */


/* Ug Degree In For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('UgDegreeView', 'MstUgDegreeController@UgDegreeListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Family Livint In For End */


/* Father's Occupation  For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('fatherOccupation', 'MstFatherOccupationController@FatherOccupationListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Father's Occupation For End */

/* Mother's Occupation  For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('motherOccupation', 'MstMotherOccupationController@MotherOccupationListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Mother's Occupation For End */


/* Brother For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('brotherView', 'MstBrotherController@BrotherListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Mother's Occupation For End */

/* Sister For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('sisterView', 'MstSisterController@SisterListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Mother's Occupation For End */


/* Number Of Married For Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::get('numberMarriedView', 'MstNumberMarriedController@NumberMarriedListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Mother's Occupation For End */

/* Sect For Religion Based Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::Post('sectView', 'MstSectController@SectListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Sect For Religion Based End */

/* Jamaat For Sect Based Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::Post('JamaatView', 'MstJamaatController@JamaaListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Jamaat For Sect Based End */

/* Cast Master Information */
/* Start */
//Route::post('FamilyLivintInsert', 'MstFamilyLivintController@FamilyLivintInsert');
Route::Post('castView', 'MstCastController@CastListAll');
//Route::post('FamilyLivintUpdate', 'MstFamilyLivintController@FamilyLivintUpdate');
//Route::post('FamilyLivintDelete', 'MstFamilyLivintController@FamilyLivintDelete');
//Route::post('FamilyLivintIndividualView', 'MstFamilyLivintController@FamilyLivintIndividualView');
/* Jamaat For Sect Based End */


/* User Reg Email Check */
/* Start */
Route::post('CheckEmail', 'MstUserController@CheckUserEmail');
Route::post('UserReg', 'MstUserController@UserRegInsert');
Route::post('logCheck', 'LoginDataController@loginCheck');
Route::post('ProfileInfoInsert', 'MstUserController@ProfileInfo');
Route::post('EducationInfoInsert', 'MstUserController@EducationInfoInsert');
Route::post('FamilyInfoInsert', 'MstUserController@FamilyInfoInsert');

/* Email Check For End */





