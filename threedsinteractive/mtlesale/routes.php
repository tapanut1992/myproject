<?php
	Route::group(['prefix' => 'apis'], function () {

		//Route::post('Register/index', '\Threedsinteractive\Mtlesale\Apis\Register@index');
		Route::post('register/nationality', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getNationality');
		Route::post('register/salutation', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getSalutation');
		Route::post('register/job', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getJob');
		Route::post('register/province', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getProvince');
		Route::post('register/district', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getDistrict');
		Route::post('register/status', '\Threedsinteractive\Mtlesale\Apis\MasterDataApiController@getStatus');
	});