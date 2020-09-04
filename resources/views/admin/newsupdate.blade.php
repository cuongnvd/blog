@extends('admin.adminlayout')
@section('admin.trangchu')


<div class="grid_10">
    <div class="box round first grid">
        <h2>SỬA LẠI TIN TỨC</h2>
        <div class="block">               
         <form action="{{route('news_update', $news->id )}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <table class="form">
               
                <tr>
                    <td>
                        <label>TIÊU ĐỀ</label>
                    </td>
                    <td>
                        <input type="text" name="title"  placeholder="NHẬP TIÊU ĐỀ..." value="{{ $news->title }}" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>NỘI DUNG NGẮN</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="summary" >{{ $news->summary }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            ẢNH
                        </label>
                    </td>
                   <td>
                       <form action="{{route('postFile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       <input type="file" name="images" value="{{ $news->images }}">
                      
                   </form>
                   </td>
                </tr>
                 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>NỘI DUNG</label>
                    </td>
                    <td>
                  
                        <textarea class="tinymce" name="content">{{ $news->content }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>NGÀY GỬI</label>
                    </td>
                    <td>
                        <input type="date" id="name" name="sent_date" value="{{ $news->sent_date }}">
                    </td>
                </tr>

				<tr>
                    <td>
                        <label>LOẠI CHỦ ĐỀ</label>
                    </td>
                    <td>
                        <select id="select" name="theme_id" value="{{ $news->theme_id }}">
                            <option>------</option>
                             <option value="3">REFINE YOUR STYLE</option>
                            <option value="4">INSIDE A MAN</option>
                            <option value="5">RELATIONSHIPS</option>
                            <option value="6">SELF IMPROVEMENT</option>
                            <option value="8">MONEY MANAGEMENT</option>
                            <option value="9">WORKS & CAREER</option>
                        </select>
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td >
                        <input type="submit" name="add-news" Value="CẬP NHẬT TIN TỨC" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

@endsection


