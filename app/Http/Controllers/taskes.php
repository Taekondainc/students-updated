<?php

namespace App\Http\Controllers;

use App\background;
use App\groupsmess;
use App\groupsmessage;
use App\groupsmessages;
use App\tasks;
use Illuminate\Http\Request;

class taskes extends Controller
{
    public function index()
    {
      
        $request = request("tasks");

        $taskss = tasks::where('id', $request)->get();
        return view('projects.formtask', compact('taskss'));
    }
    public function creategroupmessage(Request $request)
    {

        $request = new groupsmess();
        $request->uid = auth()->id();
        $request->groupname = request('group');
        $request->message = request('message');
        $request->save();
        $request = request('group');
        $query = groupsmess::where("groupname", $request)->get();
        return view("messages.groupdisplaymessage", compact('query'));
    }
    public function createmessage(Request $request)
    {
        $request = request('td');
        $query = groupsmess::where("groupname", $request)->get();
        return view("messages.groupdisplaymessage", compact('query'));
    }
    public function create()
    {
        $request = background::where("uid", auth()->id())->get();
        if (count($request) < 1) {


            $ref4 = request('file');
            $mat = $ref4->getClientOriginalName();
            echo $mat;
            $image_name = $mat;

            $allowed = array(
                "jpg",
                "JPG", "PNG", "jpeg", "bmp", "gif", "png"

            );

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $ref4->move(public_path('course-contents/files/backgrounds/'),  $image_name);
                $request = new background();
                $request->uid = auth()->id();
                $request->image = $mat;
                $request->save();
                echo "Background Uploaded";
            } else {
                echo  "wrong file type.";
            }
        } else {

            $request = background::where('uid', auth()->id())->update(['uid' => auth()->id()]);


            $ref4 = request('file');
            $mat = $ref4->getClientOriginalName();

            $image_name = $mat;

            $allowed = array(
                "jpg",
                "JPG", "PNG", "jpeg", "bmp", "gif", "png"

            );

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $ref4->move(public_path('course-contents/files/backgrounds/'),  $image_name);

                $reque = request('name');
                $request = background::where('uid', auth()->id())->update(['image' => $image_name]);
                echo "Background Updated";
            } else {
                echo  "wrong file type.";
            }
        }
    }
}
   