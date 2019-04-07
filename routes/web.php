<?php
//use Illuminate\Filesystem\filesystem;
use App\Services\Twiter;

//Route::get('/','pagescontroller@home');
Route::get('/contact','pagescontroller@contact');
Route::get('/about','pagescontroller@about');
Route::resource('projects','ProjectsController');
Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');
/*Route::get('/projects','ProjectsController@index');
Route::get('/projects/{project}','ProjectsController@show');
Route::get('/create','ProjectsController@create');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/{project}/edit','ProjectsController@edit');
Route::patch('/projects/{project}','ProjectsController@update');
Route::delete('/projects/{project}','ProjectsController@destroy');*/
Route::get('/', function (Twiter $twiter) {
  //dd(app($twiter));
  //dd($twiter);
	$tasks = array('1st task','2nd task','3rd task');
	//return view('welcome')->withtasks($tasks)->withfoo('foo');
	return view('welcome')->with([
      'foo'=>'foo',
      'tasks'=>$tasks
	]);
    /*return view('welcome',[
     'tasks'=>$tasks
    ]);*/
});

/*Route::get('/contact', function () {
    return view('contact');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
