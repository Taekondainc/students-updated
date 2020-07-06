<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
@extends('layouts.profile')

@section('content')<style>#conta{
padding-top: 80px;
}</style>
<div id="conta"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <?php

    use App\courses_ev;
    use App\content;
    use App\User;
    use Illuminate\Http\Request;

    $requests = User::where('id', auth()->id())->get();
    foreach ($requests as $request) {


    ?>
        <div class="tex" style="background:green;font-size:20px;color:white;">

        </div><?php } ?>
</div>

<div class="container_form">
    <div id="display_content">
        <h3>Create Your Course Data and you can Add Videos,
            pdf ,ppts and word Documentspdf ,ppts pdf ,ppts</h3>
        <img id="image_cont" src="{{asset('css/images/illust_image.jpg')}}">
    </div>

    <form id="createform" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Create Course
        </h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="label_container">
            <input type="text" name="course" id="input_sub" placeholder="Course Name" required>
        </div>
        <div class="label_container"> <input type="text" name="lecturer" placeholder="Course Lecturer" id="input_sub" required>
        </div>
        <div class="label_container2">Content Code</div>
        <div class="label_container2">Finishing Date</div>
        <input type="text" name="code" class="code" id="input_sub4" placeholder="Enter Code Here" required>

        <input type="date" name="date" id="input_sub4" required>


        <div class="label_container">Course Logo</div>
        <input type="file" name="logo" id="input_sub2" required>
        <div class="label_container">
            <input type="submit" value="Create Course" id="input_sub3"></div>
    </form>


</div>

<script src="{{ asset('tss/ts/entry.js')}}">

</script>
@endsection
@extends('layouts.sidebar')