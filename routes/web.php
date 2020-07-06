<?php

use App\studentreg;
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

use App\courses_ev;
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});
route::POST('/StudentsLogin',function(){
    return view('/views2.index');
});
route::get('/projects', function () {
    return view('/projects.index');
});
route::get('/Account',function(){
    return view('/Account.index');
});
route::get('/Setting',function(){
    return view('/Account.setting');
});
route::get('/c_courses', function () {

    return view('/projects.index');
});
route::get('/A_S', function () {
    return view('/projects.site_as');
});
route::get('/Classroom', function () {
    $requests=request('requests');
    return view('/display.courses',compact('requests'));
});
route::get('/cr_tut',function(){
return view('/projects.cr_tut');
});
route::get('/ytasks',function(){
return view('/projects.tasks');
});
route::get('/-courses', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/courses.index',compact('request'));
});
//Route::get('{request}/course-content', function () {

//    return view('/courses.content');
//});
route::post('/backgroundimage', 'taskes@create');
Route::get('/course', function () {

    return view('/courses.index');
});
Route::get('/Students', function () {

    return view('/courses.Students');
});
route::get('/calendar', function () {

    return view('/calen.index');
});
route::get('/calendar', function () {

    return view('/calen.index');
});
route::get('/forum', function () {

    return view('/calen.forum');
});
route::get('/view', function () {

    return view('/display.dp');
});
route::get('/coursess', function () {

    $request = auth()->id();
    $request = studentreg::where("uid", $request)->get();

    return view('/display.index', compact('request'));
});
Route::get('/grades', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.grades', compact('request'));
});
Route::get('/progress', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.progress', compact('request'));
});
Route::get('/progress', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.progress', compact('request'));
});



Route::get('/messages', function () {

    return view('/messages.index');
});





Route::get('/SUBM', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::get('/SUBMt', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::get('/SUBMa', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::resource('/tutorials', 'TutorialController');
Route::get('ttdelete/{request}/tutorial', 'TutorialController@destroy');
Route::get('/tutort', 'TutorialController@show');
Route::Post('/vtt', 'TutorialController@edit');
//route::get('/tasks', function () {
//$task=DB::tabk
//   return view('/projects.task');
//});
route::get('/autht', 'ForumController@autht');



Route::get('/lecturers', 'StudentregController@show');
Route::get('/messagecontent/{contentid}', 'StudentregController@messages');
Route::post('/message', 'StudentregController@cmessages');
Route::get('/classmates', 'StudentregController@classmates');
Route::get('/s/{contenttid}', 'StudentregController@getmates');
Route::get('/c/{contenttid}', 'StudentregController@gmessa');
Route::get('/messagesearch/{td}', 'StudentregController@messagesearch');
Route::get('/messagegroup/{td}', 'StudentregController@messagegroup');
Route::post('/creategroup', 'StudentregController@messgroup');
Route::get('/mgroup', 'StudentregController@mgroup');
Route::post('/creategroupmessage', 'taskes@creategroupmessage');
Route::get('/mssgp/{td}', 'taskes@createmessage');

route::get('/altss', 'CoursesEvController@edit');
route::get('/mtgs', 'CoursesEvController@show');

Route::get('/tasks', 'disp_task@show');
Route::post('/edittask', 'input@update');
//route::get('/courses', function () {
//   return view('/courses');
//});


route::post('/updateuser', 't@store');
route::post('/file', 't@avatar');
route::get('/deleted/{nmg}', 't@get');


route::resource('/cont', 'ContentController');
route::resource('/content','ContentcreateController');
route::resource('taskc', 'TasksController');
route::post('/testquestions', 'submissionController@create');
route::post('/testq', 'submissionController@store');
route::post('/assignments', 'submissionController@index');
route::post('/assignment', 'submissionController@show');
route::post('/delete/{requests}/test', 'submissionController@destroy');
route::get('/d', 'submissionController@update');
route::get('/l', 'submissionController@utt');
route::get('/fdelete/{requests}/test', 'submissionController@ult');
route::get('/a', 'submissionController@ulta');
route::get('/f', 'submissionController@ddth');
route::get('/atdelete/{requests}/test', 'submissionController@delet');
route::get('/afdelete/{requests}/test', 'submissionController@deletee');
route::resource('/taskcc', 'Taskse');
route::post('/grades', 'Taskse@store');
route::post('/gshow', 'Taskse@get');
route::post('/gshoy', 'Taskse@gett');


route::post('/create', 'ForumController@create');
route::get('/td/{vart}', 'ForumController@show');
route::get('/it', 'ForumController@show2');
route::get('/it2', 'ForumController@show3');
route::get('/it3', 'ForumController@show4');
route::get('/t/{vart}', 'ForumController@show5');
route::post('/comments', 'ForumController@store');
route::get('/search/{t}', 'ForumController@show6');
route::get('/search1/{td}', 'ForumController@show7');
route::get('/assignment/{requests}/course-content', 'submissionController@VaW');


route::get('/search3/{td}', 'StudentregController@search');
route::post('/reg', 'StudentregController@store');

route::get('/test/{requests}/course-content', 'submissionController@VeW');

route::post('/edele/{item}', 'Taskse@destroy');
route::post('/ddele/{item}', 'Taskse@deled');
route::get('/editd/{item}', 'Taskse@edd');
route::get('/tvd', 'Taskse@view');
route::get('/tsv', 'Taskse@file');
route::post('/upd', 'Taskse@upgrade');
route::post('/filesub', 'Taskse@enter');
route::resource('/{tasks}/Delete', 't');
route::post('/edit/{requests}/content', 'contentedit@index');
route::post('/submit', 'contentedit@update');
//route::get('/view', 'contentedit@view');
route::resource('/addcont', 'AdditonalController');
//route::resource('/{tasks}/Editl', 't@update');
Route::resource('/ht/{requests}/content', 'TcontrollerController');
Route::get('/edelete/{requests}', 'AdditonalController@destroy');
Route::get('/exdelete/{requests}', 'AdditonalController@delete');
Route::get('/deletec/{requests}', 'TcontrollerController@destroy');
Route::get('/resources', 'disp_task@view');
Route::get('/add/{requests}', 'AdditonalController@view');
route::resource('/{tasks}/Editl', 'taskes');
//route::resource('/{t}/edittask', 'input');
route::resource('/courses', 'CoursesEvController');
route::post('/update', 'disp_task@update');
route::resource('/{request}/course-content', 'contentcreatecontroller');
route::resource('/gt/{request}/course-content', 'contentcreatecontroller');
Route::get('/I', 'ProgressController@index');
Route::get('/fdc', 'ProgressController@show');
Route::get('/x', 'ProgressController@images');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Index', 'student@index')->name('Index');
