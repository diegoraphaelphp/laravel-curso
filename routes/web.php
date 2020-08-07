<?php

Route::resource('produtos', 'ProdutoController');

Route::get('/contato', function () {
    return view('welcome');
    #   return 'contato';
});
