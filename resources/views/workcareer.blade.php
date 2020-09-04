@extends('master')
@section('trangchu')


<style type="text/css">
	

</style>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
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
                              <img src="{{ asset('upload/'.$row->images )}}">
                          </a>
                      </div>
                      <div class="tend">
                           <h3>
                                <a href="{{route('chitiet', ['id' => $row->id])}}" style="margin-top: 5%">
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
    <div class="col-sm-8">
      <h2>WORKS & CAREER</h2>
      <p style="border-bottom: 2px solid #BDBDBD">
      	
      </p>
       <div class="mid-content">
             @foreach($data as $row)
          <div class="feelback">
              <div class="row">
                  <div class="col-lg-3">
                    <a href="">
                      <div class="img">
                          <img src="{{ asset('upload/'.$row->images )}}" style="border: 0px;max-width: 100%;">
                      </div>
                      </a>
                  </div>
                  <div  class="col-lg-9">
                      <div class="content">
                        <a href="">
                        <div class="name">
                          {{$row->title}}
                        </div>
                        </a>
                        <div class="time" style="color: color: #A4A4A4;">
                          <i class="fa fa-clock-o" aria-hidden="true"></i> {{$row->sent_date}}
                        </div>
             
                          {!! $row->summary !!} 
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
                      


        </div>
    </div>
  </div>
</div>
@endsection