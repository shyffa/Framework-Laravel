<?php
use App\Blog;


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

// Route::get('/{nama}/{nim}', function ($nama, $nim) {
//     // return view('welcome Tel-C');
//     return 'Nama : '.$nama.'NIM : '.$nim;
// });

// Route::get('/', function () {
//     return view('pages/about');
// });

Route::get('/about', 'pagescontroller@about');
Route::get('/', 'pagescontroller@index');
Route::get('/services', 'pagescontroller@services');

Route::get('/create', function(){
	$blog = new Blog; // agar blog bisa mengakses atribut2 yang ada di Blog
	$blog->judul = "judul 1";
	$blog->deskripsi = "deskripsi 1";
	$blog->tahun = "2018";
	$blog->save(); //untuk menyimpan kedalam database
});

Route::get('/read', function(){
	$blog = Blog::all(); //mencari blog yang sudah ada
	echo "<ul>";
	foreach($blog as $blogs) {
		echo "<li>";
		echo "<br> Judul : ";
		echo $blogs->judul;
		echo "<br> Deskripsi : ";
		echo $blogs->deskripsi;
		echo "<br> Tahun : ";
		echo $blogs->tahun;
		echo "</li>";
	}
	echo "</ul>";
});

Route::get('/update', function(){
	$blog = Blog::find(1); //mencari dari tabel blog yang idnya 1
	$blog->judul = "judul 1 diupdate";
	$blog->deskripsi = "deskripsi 1 diupdate";
	$blog->tahun = "2018 diupdate";
	$blog->save(); //untuk menyimpan kedalam database
});

Route::get('/delete', function(){
	$blog = Blog::find(1); //mencari dari tabel blog yang idnya 1
	$blog->delete();
});
