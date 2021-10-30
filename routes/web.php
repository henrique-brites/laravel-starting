<?php

use \Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function (){
    //csrf-token
    $csrfToken = csrf_token();
    $html = <<< HTML
<html>
<body>
    <h1>Cliente</h1>
    <form action="/cliente/cadastrar" method="post">
        <input type="hidden" name="_token" value="$csrfToken">
        <input type="text" name="name" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
HTML;
    return $html;
});

Route::post('/cliente/cadastrar', function(Request $request){
    echo $request->get('name');
});

//Route::get('/admin/cliente', function (){
//    return "Admin - Hello World!";
//});
//
//Route::get('/cliente-echo', function (){
//    echo "Texto com echo";
//});
//
//Route::get('/produto/{name}/{id}', function ($name, $id){
//    return "Produto $name - $id";
//});
//
//Route::get('/fornecedor/{name}/{id?}', function ($name, $id = null){
//    return "Fornecedor $name - $id";
//});

//CoC Convention over Configuration