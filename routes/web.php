<?php

//CONTACT -
Route::get('/contacto', 'ContactController@index');
Route::post('/contacto', 'ContactController@sendMessage')->name('send.contact');

// PRODUCTO INDEX - 
Route::get('/', 'IndexController@index')->name('index'); 

// PRODUCTO VIEW - 
Route::get('/producto/{id}', 'ShowProductController@showProduct')->name('show.product');

//FAQ -
Route::get('/faq', 'FaqController@faqShow')->name('faq.show');

// TIENDA - 
Route::get('/tienda', 'ShopController@shop')->name('shop');
Route::post('/tienda/buscar', 'ShopController@searchProduct')->name('shop.search');

// CARRITO DE COMPRAS -
Route::get('/carrito/producto', 'CartController@cartProductAdd')->name('cart.show')->middleware('auth');
Route::post('/carrito/producto/{id?}', 'CartController@cartProductAdd')->name('cart.add.product')->middleware('auth');
Route::delete('/carrito/producto/delete/{product}', 'CartController@cartProductDelete')->name('cart.product.delete');

// CRUD - ADMIN -
Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin/inventario', 'InventoryController@indexInventario')->name('inventario.show');
    Route::get('/admin/inventario/producto/show', 'InventoryController@ProductShowAdd')->name('producto.inventario.show');
    Route::post('/admin/inventario/producto/show/agregar', 'InventoryController@ProductAddInvantario')->name('producto.inventario.add');
    Route::get('/admin/inventario/Editar/producto/{id}', 'InventoryController@ProductEditInventario')->name('producto.editar.inventario');
    Route::put('/admin/inventario/update/producto/{id}', 'InventoryController@productUpdateInventario')->name('producto.update.inventario');
    Route::delete('/admin/inventario/producto/eliminar/{id}', 'InventoryController@inventariotProductDelete')->name('producto.delete.inventario');

});

// CHECKOUT -
Route::get('/carrito/checkout/', 'CheckoutController@indexCheckout')->name('checkout.show');

// MYACCOUNT -
Route::get('/usuario/micuenta', 'MyAccountController@myAccountShow')->name('myaccount.user.show');
Route::put('/usuario/edit/cuenta', 'MyAccountController@editAccount')->name('account.edit');

//CHECKOUT -
Route::post('/carrito/usuario/checkout/procesar', 'ProcesarPagoController@procesarDatosDePago')->name('procesar.pago');

//CONTACT -

//FACTURA PDF -
Route::get('/carrito/usuario/descargar/factura', 'ExportpdfController@facturaExportPDF')->name('factura.pdf');

//CONFIRMATION -
Route::get('/thankyou', 'ConfirmationController@confirmation')->name('confirmation');
Route::get('/error', 'ConfirmationController@error')->name('error');
Route::get('/prending', 'ConfirmationController@prending')->name('prending');

// USUARIOS -
Auth::routes();


