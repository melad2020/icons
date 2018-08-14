<?php
Auth::routes();
Route::get('/', 'ProposalController@listAll')->name('list')->middleware('auth');
Route::get('/new_form', 'ProposalController@newForm')->name('new_form')->middleware('auth');
Route::post('/new_add', 'ProposalController@newAdd')->name('new_add')->middleware('auth');