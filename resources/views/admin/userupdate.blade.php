@extends('admin.adminlayout')
@section('admin.trangchu')
<div class="grid_10">
    <div class="box round first grid">
        <h2>THÊM NGƯỜI DÙNG MỚI</h2>
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
                 <form action="{{route('password_update',$users->id )}}" method="post">
                   @method('PATCH')
                     @csrf

                     <input type="hidden" name="id" value="{{ $users->id }}">
                    <table class="form">     
                        <tr>
                            <td>
                                <label>Tên Người dùng</label>
                            </td>
                            <td>
                                <input type="text" name="name" required="1" value="{{   $users->name  }}" class="medium" />
                            </td>
                        </tr>  

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="email" name="email" required="1" readonly="1" value="{{   $users->email  }}"  class="medium" />
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <label>Mật khẩu</label>
                            </td>
                            <td>
                                <input type="password" name="password" required="1" placeholder="Nhập mật khẩu người dùng..." class="medium" />
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <label>Nhập lại mật khẩu</label>
                            </td>
                            <td>
                                <input type="password" name="passwordAgain" required="1" placeholder="Nhập lại mật khẩu người dùng..." class="medium" />
                            </td>
                        </tr> 

                       
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" Value="CẬP NHẬT " />
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </div>
</div>

@endsection