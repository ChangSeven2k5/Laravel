<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function Login(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw')
        ];

        if (Auth::attempt($login)) {
            $user = Auth::user();
        //     Session::put('user', $user);
        // Lưu vào session dưới dạng mảng thay vì object
        Session::put('user', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]);

        // Lưu session trước khi redirect
        Session::save();
            echo '<script>alert("Đăng nhập thành công.");window.location.assign("trangchu");</script>';
        } else {
            echo '<script>alert("Đăng nhập thất bại.");window.location.assign("login");</script>';
        }
    }

    public function Logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('/trangchu');
    }

        public function Register(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        $input['password'] = bcrypt($input['password']);
        User::create($input);

        echo '
        <script>
            alert("Đăng ký thành công. Vui lòng đăng nhập.");
            window.location.assign("login");
        </script>
        ';
    }

}