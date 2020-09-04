@extends('admin.adminlayout')
@section('admin.trangchu')
<div class="grid_10">
    <div class="box round first grid">
         <h2>DANH SÁCH CHỦ ĐỀ</h2>
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
					<th>No.</th>
					<th>Slider Title</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach($theme as $row)
				<tr class="odd gradeX">
					<td>{{	$row->id	}}</td>
					<td>{{	$row->name	}}</td>		
					<td>
						<a href="">Edit</a> || 
						<form method="POST" onclick="return confirm('Are you sure to Delete!');"  action="{{route('theme.delete',['id'=>$row->id])}}" onsubmit="return ConfirmDelete( this )">
		                    @method('DELETE')
		                    @csrf
		                    <button type="submit">Delete</button>
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
