<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

.feelback {
    padding-bottom: 25px;
    margin-bottom: 20px;
    border-bottom: solid 1px rgba(0,0,0,0.1);
}

.feelback .row{
    margin-right: -15px;
    margin-left: -15px;
}

.feelback .row:before {
    display: table;
    content: " ";
}

.feelback .img {
    width: 170px;
    height: 170px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
   
}


.feelback .img img {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
}

.feelback .content {
    padding-top: 25px;
    position: relative;
    text-align: justify;
    padding-bottom: 15px;
    margin-bottom: 10px;
}

.feelback .content:before {
 
    position: absolute;

    font-weight: 900;
    top: 0;
    left: 0;
    font-size: 20px;
    line-height: 28px;
    color: #387b2b;
}

.feelback .content:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 70px;

}

.feelback .name {
    font-size: 16px;
    line-height: 24px;
    font-weight: bold;
    color: #555555;
}

.feelback .time {

    font-style: italic;
    color: #A4A4A4;
}


.product{

    padding: 15px;
    padding-bottom: 30px;
    position: relative;
    overflow: hidden;
}


.product .img a{
        display: block;
    padding-top: 80%;
    position: relative;
    overflow: hidden;
}
.product .img a img{
        position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
}
.product .img:hover img{
     transform: scale(1.1);
  transition: 1s;
}
.product .tend{
        margin-bottom: 10px;
}
.product .tend h3{
       font-size: 100%;
    font-weight: bold;
}
.product .tend a{
        display: block;
    font-size: 18px;
    line-height: 26px;
    font-weight: bold;
    text-transform: uppercase;
/*    white-space: nowrap;
    -ms-text-overflow: ellipsis;
    text-overflow: ellipsis;*/
    overflow: hidden;
    text-align: left;
    text-decoration: none;
    color: #555555;
    margin-top: -8%;
}
.col-lg-12{
  border-bottom: 2px solid #BDBDBD;

}










.col-lg-6 .logo{
        width: 50px;
    margin-right: 10px;
    margin-top: -5px;
    float: left;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
<img src="https://storage.googleapis.com/cdn.nhanh.vn/store/25088/store_1584590640_524.png" style="max-height: 100%; max-width: 100%">
</div>

<nav class="navbar navbar-inverse sticky-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      	
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('trangchu')}}">HOME</a></li>
        <li><a href="{{route('refineyourstyle')}}">REFINE YOUR STYLE</a></li>
        <li><a href="{{route('insideaman')}}">INSIDE A MAN</a></li>
        <li><a href="{{route('relationship')}}">
        	RELATIONSHIPS
        </a></li>
        <li><a href="{{route('selfimprovement')}}">
        	SELF IMPROVEMENT
    	</a></li>
        <li><a href="{{route('moneymanagement')}}">
        	MONEY MANAGEMENT
    	</a></li>
        <li><a href="{{route('workcareer')}}">
        	WORKS & CAREER
    	</a></li>
      </ul>
    </div>
  </div>
</nav>




