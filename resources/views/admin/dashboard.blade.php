@extends('admin.adminlayout')
@section('admin.trangchu')
<style type="text/css">


</style>
        <div class="grid_10">
            <div class="box round first grid">
                <h2> Dashboard</h2>
                <div class="block">               
                  <div class="container">
                  	<div class="row">
                  		<div class="col-lg-3" style="height: 50%">
                  			<div style="height: 100px; width: 90%; background: yellow; margin: auto; text-align: center; border-radius: 100%">
                  				<p style="padding-top:20px; font-size: 3vw	">
                  					<i class="fa fa-newspaper-o " aria-hidden="true"></i> 	{{$news}}
                  				</p>
                  			</div>
                  		</div> 
                  		<div class="col-lg-3" style="height: 50%">
                        <div style="height: 100px; width: 90%; background: yellow; margin: auto; text-align: center; border-radius: 100%">
                          <p style="padding-top:20px; font-size: 3vw  ">
                            <i class="fa fa-user" aria-hidden="true"></i>  {{$users}}
                          </p>
                        </div>
                      </div> 
                  		<div class="col-lg-3">
                  	
                  		</div>
                      <div class="col-lg-3">
                    
                      </div>
                  </div>   
                </div>
            </div>
        </div>
@endsection