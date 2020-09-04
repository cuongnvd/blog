<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;
use Mail;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;


class UserController extends Controller
{


	public function getuseradd(){

    	return view('admin1.useradd');

    	}
    public function getuserlist(){
    	$user = User::select('id','name','email','password')->orderBy('id','DESC')->paginate(5);
        // print_r($theme);
        return view('admin1/userlist',compact('user'));
    	}


    public function postAdduser(Request $request){

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
             
        ],
       
        );
      
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
          // dd($users);
        return redirect('useradd')->with('message', 'Thêm người dùng thành công');
        }


	public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('message', 'Xóa người dùng thành công');
    }

   

        public function passwordedit($id)
    {
        $users = User::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin1/userupdate', compact('users'));
    }
    public function updatepassword(Request $request, $id)
    {

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
        ],
        );
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
       	$users->password = bcrypt($request->password);
        $users->save();
      	return redirect()->Route('userlist')->with('message','Cập nhật thành công.');
    }
}
