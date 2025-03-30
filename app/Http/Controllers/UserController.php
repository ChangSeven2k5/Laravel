<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function Login(LoginRequest $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        Session::put('user', $user);
        Session::save();
        return redirect()->route('trangchu')->with('success', 'Đăng nhập thành công.');
    } else {
        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng.');
    }
}

    public function Logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('/trangchu');
    }

        public function Register(RegisterRequest $request)
    {
        $input = $request->validated();
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