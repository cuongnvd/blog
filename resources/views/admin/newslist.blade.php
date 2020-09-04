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
        <h2>DANH SÁCH TIN TỨC</h2>
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
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>STT</th>
					<th>TIÊU ĐỀ</th>
					<th>NỘI DUNG NGẮN</th>
					<th>ẢNH</th>
				
					<th>NGÀY GỬI</th>
					<th>LOẠI CHỦ ĐỀ</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($news as $row)
				<tr class="odd gradeX" style="border-bottom: 1px solid black">
					<td>
						{{	$row->id	}}
					</td>
					<td width="20%">
						{{	$row->title	}}
					</td>
					<td width="20%" style="">
						{!!	$row->summary	!!}
					</td>
					<td class="center">
						<img src="{{ asset('/upload/'.$row->images )}}" style="max-width: 100px; max-height: 100px ; padding-top: 5px">
					</td>
	
					<td>
						{{	$row->sent_date	}}
					</td>
					<td>
						{{	$row->theme_id	}}
					</td>
					<td>
						<a href="{{route('news.edit',['id'=>$row->id])}}">Edit</a> 
						|| 


						<form method="POST" action="{{route('news.delete',['id'=>$row->id])}}" onsubmit="return ConfirmDelete( this )">
		                    @method('DELETE')
		                    @csrf
		                    <button type="submit">Delete</button>
		                </form>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
			<div style=" margin-top: 3%">
              {{ $news->links() }}
           </div>
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
