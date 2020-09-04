@extends('admin.adminlayout')
@section('admin.trangchu')


<style type="text/css">
	td img{
		max-width: 100px;
		max-height: 100px;
	}
</style>
<div class="grid_10">
    <div class="box round first grid">
          <h2>DANH SÁCH NGƯỜI DÙNG</h2>
        <div class="block"> 
        	 <p style="color: red;">
                            <?php
                            $message = Session::get('message');
                            if($message)
                            {
                            echo $message;
                            Session::put('message',null);
                            }
                            ?> 
                            </p> 
                            @if($errors->any())
        <p>
            @foreach($errors->all() as $error)
                <strong style="color: red">
                   {{ $error }} <br />
                 </strong>
            @endforeach
        </p>
        @endif 
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>STT</th>
					<th>TÊN NGƯỜI DÙNG</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th width="15%">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $row)
				<tr class="odd gradeX" style="border-bottom: 1px solid black">
					<td>
						{{	$row->id	}}
					</td>
					<td width="20%">
						{{	$row->name	}}
					</td>
					<td width="20%">
						{!!	$row->email	!!}
					</td>
					<td width="20%">
						{!!	$row->password	!!}
					</td>
			
					<td width="15%">
						<a href="{{route('password.edit',['id'=>$row->id])}}">Edit</a> 
						|| 
						<!-- <a href="javascript:void(0);"  data-url="{{route('users.delete',[$row->id])}}" data-id="{{$row->id}}">Delete</a> -->
						<form method="POST" action="{{route('users.delete',[$row->id])}}" onsubmit="return ConfirmDelete( this )">
		                    @method('DELETE')
		                    @csrf
		                    <button type="submit" class="dele">Delete</button>
		                </form> 


					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
@endsection
