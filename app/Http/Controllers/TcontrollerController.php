<?php

namespace App\Http\Controllers;

use App\additonal;
use App\assignment;
use App\assignments;
use App\content;
use App\courses_ev;
use App\submission;
use App\tcontroller;
use App\test;
use App\testfile;
use App\tutorial;
use Illuminate\Http\Request;

class TcontrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $request = request('requests');
     
   $request=request("requests");
        $task1 = courses_ev::where('id', $request)->get();
        foreach($task1 as $request){
          $t= $request->cname; 
          //echo $t; 
          $task = tcontroller::where('cname', $t)->get();
            if (count($task)>0) {
            $tt="";

    

        
              return view('courses.view', compact('task','tt'));  
            
            }else{
          //  foreach ($task as $request) {
            //    $t = $request->id; 
            //    echo $t;
            //    $t = $request->content;
            //    echo $t;
           // }
            $tt = "$t";
        $t = $request->date;

        $date = strtotime($t);
        $rt = date('d/M/Y H:i:s', $date);
                return view('courses.view', compact('task', 'tt'));
          }
        }
        
       
    
      // 
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function show(tcontroller $tcontroller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function edit(tcontroller $tcontroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tcontroller $tcontroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function destroy(tcontroller $tcontroller)
    {
        $request=request('requests');
    $request = courses_ev::where('cname', $request)->delete();

    $requests = request('requests');
    $request = content::where('cname', $requests)->delete();

    $requestd = request('requests');
    $request= submission::where('cname', $requestd)->delete();

    $requestt = request('requests');
    $request = testfile::where('cname', $requestt)->delete();

    $requestg = request('requests');
    $request = test::where('cname', $requestg)->delete();

    $requestf = request('requests');
    $request = tutorial::where('cname', $requestf)->delete();

    $requestc = request('requests');
    $request = assignment::where('cname', $requestc)->delete();

    $requestv = request('requests');
    $request = assignments::where('cname', $requestv)->delete();

    $requestx = request('requests');
    $request = additonal::where('cname', $requestx)->delete();
    }
}
