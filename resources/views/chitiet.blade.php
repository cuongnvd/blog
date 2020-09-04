@extends('master')
@section('trangchu')


<style type="text/css">
	

.formcontact   {
    background-image: none;
    padding: 0;
    background-color: transparent;
    margin-bottom: 0;

}

.formcontact .text {
    color: #666666;
    font-style: italic;
    margin-top: 5%;
    margin-left: 26%;
}

.formcontact input, .formcontact textarea, .formcontact select {
    width: 100%;
    border: solid 1px rgba(0, 0, 0, 0.15);
    background: #FFFFFF;
    height: 40px;
    padding-left: 30px;
    outline: none;
}

  
.formcontact .fa-Form{
      margin-bottom: 15px;
   
}

.formcontact .forminput {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}
.formcontact button:hover{
   background: black;
}
.formcontact .button {
    margin: 0;
    display: flex;
    align-items: center;
      background: none;
}

.formcontact button {
    width: 100%;
    
}

.formcontact button {
    font-size: 14px;
    line-height: 22px;
    background: #848484;
    border: none;
    color: white;

    text-transform: uppercase;
    padding: 8px 15px;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.col-sm-8 {
	margin-left: 5%;

}
img{
	max-width: 100%;
	max-height: 100%;
}

</style>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h2>TIN MỚI</h2>
      <p style="border-bottom: 2px solid #BDBDBD">
      <div class="mid-content">
	        <div class="vnt-product">
	            <div class="row">
	            @foreach($newdata as $row)
	            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
	                <div class="product iframeBox">
	                    <div class="img">
	                        <a href="{{route('chitiet', ['id' => $row->id])}}">
	                            <img src="{{ asset('/upload/'.$row->images )}}">
	                        </a>
	                    </div>
	                    <div class="tend">
	                         <h3>
	                             <a href="{{route('chitiet', ['id' => $row->id])}}">
	                                 {{$row->title}}
	                             </a>
	                         </h3>
	                    </div>
	             
	                </div>
	            </div>
                @endforeach

	        </div>
	    </div>
	</div>


   
    </div>
    <div class="col-sm-9" style=" margin-bottom: 20%">
      <h2>{{$chitietnews->title}}</h2>
      <div class="time" style="color: #A4A4A4;" >
         <i class="fa fa-clock-o" aria-hidden="true"></i> {{$chitietnews->sent_date}}
      </div>
      <h4 style="margin-bottom: 5%">
      	{!! $chitietnews->summary !!}
      </h4>
     <p style="margin-top: 7%;">
       {!! $chitietnews->content !!}
     </p>

     <br />
     <br />
       <div class="formcontact" style="margin-bottom: 10%;">
      <form class="contact" style="display: block;">
        <div class="titleform" style="margin-bottom: 15px;">
          <div class="text">
            <p style="color: #387b2b;">
              VIẾT CẢM NHẬN CỦA BẠN
            </p>
          </div>
          <div class="row">
            <div class="col-lg-12" >
              <div class="titleform">
                <div class="fa-Form" style="position: relative;">
                    <b>
                    Họ và tên *
                    </b>
                  <input type="text" name="name" class="required" title="Vui lòng nhập họ tên liên lạc" required="true">
                </div>
               
                <div class="fa-Form" style="position: relative;">
                    <b>
                        Cảm nhận *
                    </b>
                  <textarea class="required" name="content"  title="Vui lòng nhập nội dung liên lạc" required="true" style="overflow: auto;text-indent: 0px;">
                  </textarea>
                </div>
                <button style="width: 30%; margin-left: 35%; margin-bottom: 5%">
                    <span>
                     <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Viết cảm nhận
                    </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
     <div class="feelback" >
              <div class="row">
                  <div class="col-lg-3" style="margin-bottom: 5%">
                    
                      <div class="name" >
                          Nguyeen Van An
                        </div>
                      
                  </div>
                  <div  class="col-lg-9">
                      <div class="content" style="margin-top: -5%">
                       BÁNH KEM BẮP VÀ MATCHA Ở ĐÂY NGON XUẤT SẮC LUÔN CÒN BÁNH SU KEM THẦN THÁNH THÌ KHỎI BÀN LUÔN , SẼ ỦNG HỘ DÀI DÀI HEHEE	
                      
                        <br />
                          
                      </div>
                     
                      <div class="time">
                          20/2/2020
                      </div>
                  </div>
              </div>
          </div>
    </div>

  </div>
</div>
@endsection