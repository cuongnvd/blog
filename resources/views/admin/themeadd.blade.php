@extends('admin.adminlayout')
@section('admin.trangchu')
<div class="grid_10">
    <div class="box round first grid">
        <h2>THÊM CHỦ ĐỀ MỚI</h2>
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
                 <form action="{{URL::to('/save-theme')}}" method="post">
                    {{ csrf_field()}}
                    <table class="form">     
                        <tr>
                            <td>
                                <label>Tên chủ đề</label>
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Nhập tên chủ đề..." class="medium" />
                            </td>
                        </tr>           
                       
        				<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="add_theme" Value="Thêm" />
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </div>
</div>

@endsection