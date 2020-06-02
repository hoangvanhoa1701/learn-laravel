<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/name/{yourName}', function ($yourName) {
    echo 'YOUR NAME:' .$yourName;
});

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});

Route::get('/game/{yourName}', function ($yourName) {
    return response()->json([
        'name' => $yourName,
        'state' => 'CA'
    ]);
});

Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

Route::get('user/profile', 'UserController@showProfile')->name('profile');

Route::get('role',[
   'middleware' => 'Role: editor',
   'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);

Route::get('/usercontroller/path',[
   'middleware' => 'Second',
   'uses' => 'UserController@showPath'
]);

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');


Route::get('/foo/bar','UriController@index');


Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/sign-up',function() {
   return view('sign-up');
});
Route::post('/user/sign-up',array('uses'=>'UserSignUp@postRegister'));

Route::get('json',function() {
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});


Route::get('/test', ['as'=>'testing',function() {
   return view('welcome');
}]);
Route::get('redirect',function() {
   return redirect()->route('testing');
});

Route::get('database', function() {
    Schema::create('tests', function($table) {
        $table->increments('id');
        $table->string('name', 200);
        $table->string('password');
    });
    echo "Da xong";
});

Route::get('getAPI', function () {
    $data = DB::table('tests')->get();
    foreach ($data as $row){
        foreach ($row as $key=>$value) {
            echo $key.": ".$value;
        }
        echo "<hr>";
    }
});

Route::get('deleteAPI', function () {
    $data = DB::table('tests')->delete();
});

Route::get('model/product/save', function () {
    $product = new App\Product();
    $product->name = "iphone";
    $product->number = 112;
    $product->id_product_type = 0;
    $product->save();

    echo "save model";
});

Route::get('model/product/all', function () {
    $product = App\Product::all()->toJson();
    echo $product;
});

Route::get('model/product/phone', function () {
    $product = App\Product::where('name', 'iphone')->get()->first();
    return response()->json($product);
});

Route::get('createColTypeProduct', function () {
   Schema::table('product', function ($table) {
      $table->integer('id_product_type')->unsigned;
   });
});

Route::get('model/product_type/save', function () {
    $product = new App\ProductType();
    $product->name = "phone";
    $product->save();

    echo "save model";
});

Route::get('model/product/find/{id}', function ($id) {
    $product = App\Product::find($id)->productType;
    return response()->json($product);
});
