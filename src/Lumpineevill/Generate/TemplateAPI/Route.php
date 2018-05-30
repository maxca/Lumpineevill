<?php
/**
 * @author samark chaisanguan
 * @email samarkchsngn@gmail.com
 */
# {replace}
Route::group(['prefix' => '{replace_sm}', 'as' => '{replace_sm}.', 'namespace' => '{replace}'], function () {
    Route::post('create', 'create{replace}({replace}CreateRequest')->name('create');
    Route::put('update', 'update{replace}({replace}UpdateRequest')->name('update');
    Route::delete('delete', 'delete{replace}({replace}DeleteRequest')->name('delete');
    Route::get('list', 'get{replace}List({replace}GetRequest')->name('list');
});
