

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="include/style7.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="include/cssindex.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 70%;
    height: 40%;
    margin-left: 210px;
  }
  .resetpw a{
  	color: black;
  }
  .resetpw a:hover{
  	text-decoration: none;
  	color: #DF0101;
  }
  </style>


	<div class="container loginbody" style="background: none; height: auto; flex-wrap: wrap;">
		
	
	<div class="container" style="background: white; height: auto; flex-wrap: wrap;margin-top: 10% ">
		<p style=";border-radius: 100px; margin-left: 43% ; font-size: 30px; flex-wrap: wrap;">
		   	<i class="fa fa-user-circle fa-5x" aria-hidden="true" ></i>
		</p>

		<div class="container" style="background: none; margin-bottom: 2%; height: auto">
			<p style="width: 51%; border-left: 5px solid red; margin-left: 24.5%; background: #E6E6E6; padding-left: 10px" >
					Please enter your username or email address. You will receive an email message with instructions on how to reset your password.
			</p>
		</div>
  		<!-- <img src="https://i.pinimg.com/originals/e9/e2/ce/e9e2cedf6acc696dacab01ede51046f0.jpg" style="max-width: 100%; max-height: 100%">
  		<br /> -->
		  <form action="/action_page.php" style="margin-left: 25%; width: 50%; margin-bottom: 30px; border: 1px solid #848484;background-color: white;-webkit-box-shadow: 0 8px 6px -6px black;-moz-box-shadow: 0 8px 6px -6px black;box-shadow: 0 8px 6px -6px black; ">
		    <div class="form-group" style="color: black; ">
		    	
		      <label for="email" style="margin-left: 10%; margin-top: 10px">Email:</label>
		      <input type="email" class="form-control" id="email"name="email" style="background: none; width: 80%;margin-left: 10%">

		    </div>
		    
		    
		    <div >
		    <button type="submit" class="btn btn-primary" style="margin-left: 36%; margin-bottom: 50px;width: 30% ">Lấy lại mật khẩu</button>
		    </div>
		    <div class="resetpw">
		    	<p style="color: black;margin-left: 10%">
		    	<a href="{{route('login')}}">Đăng nhập</a> 
			    </p>
			    <p style="color: black;margin-left: 10%">
			    	<a href="{{route('trangchu')}}">Quay lại xem tin tức</a>
			    </p>
		    </div>
		    
		  </form>
	</div>
</div>






