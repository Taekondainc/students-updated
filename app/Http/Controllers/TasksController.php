<?php

namespace App\Http\Controllers;

use App\content;
use App\tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request=request('id');
             $task = content::where('id',$request)->get();
         return view('courses.app', compact('task'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return redirect('projects.task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$task = tasks::where('userid', auth()->id())->get();
if (count($task)<10) {
           
            $added = "Task Created";
            echo $added;
        $request = new tasks();
        $request->Title = request('title');
        $request->Task = request('task');
        
        $request->date = request('date');
        $request->userid = auth()->id();
        $request->save();
        $task = tasks::where('userid', auth()->id())->get();
     //  return view('projects.task', compact('task','error','added'));
    }else{
        
echo "passed limit";
echo '
<style>
#titled{
    background:red;
}
</style>
';

    //        return view('projects.task', compact('error','task'));
    }}

    /**
     * Display the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(tasks $tasks)
    {
  
     echo "here";  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tasks $tasks)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(tasks $tasks)
    {
        //
    }
}
