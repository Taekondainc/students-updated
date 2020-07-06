@extends('layouts.profile')<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('css/images/logo.png') }}">

<link rel="stylesheet" href="{{ asset('css/messages.css') }}">


<style>
    #conta{
        padding-top: 130px;
    }
</style>

<div id="conta">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width="100px"
            height="100px"alt="">
        <h5 style="font-size:13px;margin-bottom:0px;">Site Assistant</h5>
    </a>
    <h1 id="headermessage" style="text-align:center;">Message and Collaborate with lecturers and Students</h1>
  <div class="containerr" >
	<div class="contacts" id="contmess">

	<h3>	<div class="btn-group mw-100 text-white-50 align-content-center " style="font-family:'Oswald', sans-serif; width:100%;">
  <button type="button" class="btn btn-dark  bg-dark w-100 mw-100 m-md-3 dropdown-toggle text-center text-white"
  style="font-family:'Oswald', sans-serif ;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Messages
  </button>
  <div class="dropdown-menu" style="width:88%;">
    <a class="dropdown-item w-100 text-lg-center"  id="cht"  href="#cht">Chat</a>
    <a class="dropdown-item w-100 text-lg-center"  id="ltr"  href="#ltr">Lecturers</a>
    <a class="dropdown-item w-100 text-lg-center"  id="grp"  href="#grp">Group</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item w-100  text-lg-center"  id="clm" href="#clm">Classmates</a>
  </div>
</div></h3>
	<div class="contacts bg-dark h-100" >
<div class="Chat bg-dark h-100 text-white text-lg-center " style="display:none;">
	<h1>Chat</h1>
	<div class="cmessages" >
<div class="input-group mb-3">
  <input type="search" class="form-control" id="messagesearch" placeholder="Recipient's username"
   aria-label="Recipient's username" aria-describedby="basic-addon2">



</div>
<h1 style="font-size:15px;">Classmates or Lecturers</h1>
<div class="persons" style="font-size:19px;height:58%;overflow-y:scroll;">

</div>

	</div>
</div>
<div class="lecturers  bg-dark h-100 text-white text-lg-center" style="display:none;">
<h1>Lecturers</h1>
	<div class="ltc-c" >

	</div>
</div>
<div class="groups bg-dark h-100 text-white text-lg-center" style="display:none;">
<h4 style="padding:2px;">Groups</h4>
	<div class="cmessages" style="text-align:center;" >
<input type="search" class="form-control" id="create-group" placeholder="Recipient's username"
   aria-label="Recipient's username" aria-describedby="basic-addon2" style="width:80%;font-size:14px;display:inline-block;">
	<div id="collect" style="height:120px;overflow-y:scroll;text-align:center;display:flex;justify-content:center;">
	<div class="conmessage" style="width:100%;"></div></div>
	<div id="div" style="display:none;">
	   <div id="div2">
<form action="/creategroup" id="groupform" method="post" style="">
@csrf<h4>Group Name</h4>
<h5 id="alerg" style="background:green;color:white;display:none;"></h5>
<div style="display:block;text-align:center;padding:2px;">
<input type="text" name="grname" id="input_sub3" style="background:white;display:inline-block;color:black;text-align:center;"></div>
<div class="colcontainer">
</div>
<input type="submit" id="input_sub3" value="Add" style="font-size:20px;">
</form>
<div id="cancel" style="">Cancel</div>
 </div>
   </div>

	</div>
<div class="groupcontainer" >
	<h1>Your Groups</h1>

	<div id="groupscontainer">

	</div>
</div>
</div>
<div class="messagess bg-dark h-100 text-white text-lg-center" style="display:none;">
<h1>Classmates</h1>
	<div class="cmssg" >





	</div>	</div>
		</div>
	</div>
	<div class="messages">
		<h1><div id="hj" class="pop  text-lg-center " style="color:white;position:absolute;background:black;z-index:1;width:63%;"></div></h1>
		<div class="messcont" style="color:white;padding-top:40px;text-align:center;"></div>
	</div>

	<div class="form">
		<div class="form-inner">
		<form action="/messages" id="mess" method="post">
		@csrf
		 <input type="hidden" id="respondent" name="uid" value="">
		   <textarea type="text" name="message" id="">
            </textarea>
			<button><img src="{{ asset('css/images/send.png') }}" id="iamge-mes"  alt=""></button>
				</form>

		</div>
		<div class="form-inner2" style="display:none;width:100%;background:darkgray;height:80px;padding:10px">
		<form action="/creategroupmessage" id="mess1" method="post">
		@csrf
		<div style=""> <input type="hidden" id="respondent1" name="group" value="">
		   <textarea type="text" name="message" id="textareamess" >
            </textarea>
            <button style="display:inline-block;vertical-align:top;background:black;">
                <img src="{{ asset('css/images/send.png') }}" id="iamge-mes" alt=""></button></div>
				</form>

		</div>
	</div>
</div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('tss/ts/chat.js') }}">

</script>


@extends('layouts.sidebar')
