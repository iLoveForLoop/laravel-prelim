<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: function() {
    return view(view: 'home');
});

Route::get('/item', function(){
    return view(view: 'item');
});

Route::get('/picture', function(){
    return view(view: 'picture');
});
