<?php

namespace App\Http\Controllers;

use App\courses_ev;
use App\groups;
use App\groupsmessage;
use App\groupsmessages;
use App\messageslect;
use App\studentreg;
use App\User;
use Illuminate\Http\Request;

class StudentregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

   
        $request = request('Code');
        $qd = courses_ev::where("code", $request)->get();
        if (count($qd) == 1) {
            foreach ($qd as  $value) {
                $r = $value->cname;
             $request=auth()->id();
                $qd1 = studentreg::where("uid", $request)->where('cname',$r)->get();
                if (count($qd1)<1)
                {
                $request = new studentreg(); 
                $request->uid =auth()->id();
                $request->cname = $r;
                $request->save();
                echo "<div style='background:green;color:white;'>Registered</div>"; }else{
                    echo "<div style='background:red;color:white;'>Registered Already</div>";
                }
            }
        }else {
            echo "<div style='background:red;color:white;'>Code Incorrect</div>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function show(studentreg $studentreg)
    {
          $request=studentreg::where("uid",auth()->id())->get();
        return view("messages.lecturers", compact('request'));
    }
    public function messages(studentreg $studentreg)
    {
        $reuqestt=request('contentid');
       
        $aut = auth()->id();
        $ct = $reuqestt.$aut;
        $request = messageslect::where("messid",  $ct)->get();
        return view("messages.lecture", compact('request'));
    }
    public function cmessages(studentreg $studentreg)
    {
        $request = new messageslect();
       $request->uid=auth()->id();
       $request->recid=request("uid");
        $uid=auth()->id();
       $recid=request("uid");
       $request->message=request("message");
         $request->messid=$recid.$uid;
       $request->save();
        $requet = request("uid");
        $messid = $recid.$uid;
       $request=messageslect::where("messid", $messid)->get();
        return view("messages.lecture", compact('request'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function edit(studentreg $studentreg)
    {
      
    }

    public function classmates()
    {

        $request = studentreg::where("uid", auth()->id())->get();
        return view('messages.classmates', compact('request'));    
    }
    public function getmates()
    {
        $mates=request('contenttid');
        $request = studentreg::where("cname", $mates)->get();
        return view('messages.mates', compact('request'));
    }
    public function gmessa()
    {
        $mates = request('contenttid');
        $aut=auth()->id();
        $ct=$mates.$aut;
        $request = messageslect::where("messid", $ct)->get();
        return view('messages.getmessage', compact('request'));
    }
    public function messagesearch()
    {
        $request = request('td');
        echo $request;
        $query = User::where("name", 'like', '%' . $request . '%')->get();

        return view('messages.users', compact('query'));
    }
    public function messagegroup()
    {
        $request = request('td');
        echo $request;
        $query = User::where("name", 'like', '%' . $request . '%')->get();

        return view('messages.group', compact('query'));
    }
    public function messgroup()
    {
        $reqd=request('grname');
$query= groups::where("uid",auth()->id())->where( "groupname", $reqd )->get();
if(count($query)<1){
            $est = request('member');
            $checker= User::where("name",$est)->get();
            foreach($checker as $uid)
            {
                $getid=$uid->id;
            }
            $request = new groups();
            $request->uid = $getid;
            $request->groupname = request('grname');
            $request->save();
            $request = new groups();
            $request->uid = auth()->id();
            $request->groupname = request('grname');
            $request->save();
            echo "Group Created";
}else{
            $est = request('member');
            $checker = User::where("name", $est)->get();
            foreach ($checker as $uid) {
                $getid = $uid->id;
            }
            $reqd = request('grname');
            $estt =$getid; 
            $query = groups::where("uid", $estt)->where("groupname", $reqd)->get();
            if (count($query) < 1) {  
                 $est = request('member');
            $checker = User::where("name", $est)->get();
            foreach ($checker as $uid) {
                $getid = $uid->id;
            }
            $request = new groups();
            $request->uid = $getid;
            $request->groupname = request('grname');
            $request->save();

            echo  $est." Added To Group";  }
            else{
                Echo "Member Exist Already";
            }
}

       
    }
    public function mgroup(Request $request, studentreg $studentreg)
    {
        
        $query = groups::where("uid", auth()->id())->get();
        return view("messages.groupdisplay", compact('query'));
    }
  
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, studentreg $studentreg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentreg $studentreg)
    {
        //
    }
    public function search(studentreg $studentreg)
    {
    $request=request('td');
 
       // $query=courses_ev::where("cname", 'like', '%' . $request . '%')->get();
        $query = courses_ev::where("cname", 'like', '%' . $request . '%')->get();
       return view("display.coursec",compact('query'));
    }
}
