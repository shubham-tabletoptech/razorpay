<?php

Route::group([
    //  'prefix'     => 'razorpay',
       'middleware' => ['web']
   ], function () {

       Route::get('razorpay-redirect','Wontonee\Razorpay\Http\Controllers\RazorpayController@redirect')->name('razorpay.process');
       Route::post('razorpaycheck','Wontonee\Razorpay\Http\Controllers\RazorpayController@verify')->name('razorpay.callback'); 
});