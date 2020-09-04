<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css')}}" media="screen" />
    <link href="{{ asset('css/table/demo_page.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{ asset('js/jquery-1.6.4.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui/jquery.ui.core.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.ui.widget.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.ui.accordion.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.effects.core.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.effects.slide.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.ui.mouse.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui/jquery.ui.sortable.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/table/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{asset('/js/tiny-mce/jquery.tinymce.js')}}" type="text/javascript"></script>  

    <!-- END: load jquery -->
    <!--<script type="text/javascript" src="{{ asset('js/table/table.js') }}"></script> -->
    <script src="{{ asset('/js/setup.js') }}" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

    <!-- Load TinyMCE -->
 
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <!-- Load TinyMCE -->

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/25088/store_1584590640_524.png" alt="Logo" />
				</div>
				<div class="floatleft middle">

					<h1>
                        
                                <b style="font-size: 70px"></b>ADMIN
                      
                    </h1>
					
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="{{asset('img/img-profile.jpg')}}" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>
                                Hello
                                @if(Auth::check())
                                <b style="color: red">
                                    {{Auth::user()->name}}
                                </b>
                                @endif
                            </li>
                            <li><a href="{{url('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="{{route('dashboard')}}"><span>Dashboard</span></a> </li>
              <!--   <li class="ic-form-style"><a href=""><span>User Profile</span></a></li> -->
				<li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
				<!-- <li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li> -->
                <li class="ic-charts"><a href="{{route('index')}}"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>

