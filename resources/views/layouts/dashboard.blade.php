
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HLS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_app.css') }}" rel="stylesheet">
</head>
<style>
    
 @media only screen and (max-width: 986px) {
     .searchbar {
         display: none ;
     }
      #inp_search {
          display: none;
      }
      .navbar{
          padding-top: 2px;
      }
 }
.dropdown-item{
    width:300px;
    font-weight: bold;
    text-align: center;
}
</style>
<body>
    
 
  <div id="app">
        <nav class="navbar navbar-dark bg-dark fixed-top  navbar-expand-lg  shadow-sm" style="z-index:1;" id="navbar-black">
         
             <div class="container">
             <div class="hamburger_menu" id="side_menu">
        <img id="hm_bg" src="{{asset('css/images/hm_bg.png')}}" >
        </div>   
                
               
   

    </div>    <div class="searchbar">
 <input style="border:2px white;display:inline-block;" id="inp_search" form-control  type="text" name="search">
</div>            
 <div class="content_r">
           <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle bg-white text-dark rounded" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <t style="color:black;font-weight:bold;">   {{ Auth::user()->name }}</t>  <span id="gt" class="caret bg-success" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="cl-div"><a id="vg" class="dropdown-item" href="/home">Home</a> </div>
                                    <div class="cl-div"> <a id="vg" class="dropdown-item" href="/Account">Account </a> </div>
                                    <div class="cl-div"> <a id="vg" class="dropdown-item" href="/Setting">Preferences </a> </div>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a> 
                                  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
  

</div>
                        @endguest
                    </ul>
                </div>
               
        </nav>


       </div>
  
    
    <main class="py-4">
        @yield('content')


    </main><div class="footer" style="margin:0px;">
    <footer style="margin:0px;">
        <a href="">hello</a>
    </footer>
</div>
</div>
</body>
<script src="{{ asset('tss/ts/dashboard.js')}}"></script>

</html>
