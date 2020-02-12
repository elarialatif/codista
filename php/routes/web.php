<?php
Route::group(['middleware'=>'Lang'],function(){// this e only and i fix the long condition :)
    Route::get('lang/{lang}', function ($lang) 
    {
        if(session()->has('lang')){ session()->forget('lang');}
        if(isset($lang))
        {
            session()->put('lang',$lang);
        }
        else
        {
            session()->put('lang','en');
        }
        return redirect()->back();
    });


    Route::get('/', 'StaticPagesController@index')->name('home');

    Route::get('/about', 'StaticPagesController@about')->name('about');

    Route::get('/contact', 'StaticPagesController@contact')->name('contact');

    Route::get('/services', 'StaticPagesController@services')->name('services');

    Route::get('/portfolio', 'StaticPagesController@portfolio')->name('portfolio');

    Route::post('/contact', 'ContactController@store')->name('contact.post');
    
});