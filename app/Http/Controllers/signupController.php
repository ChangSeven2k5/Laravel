<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Input, File;
use Request;
use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Session;

// Session::flush();
class signupController extends Controller
{
    public function index() {
        return view("signup");
    }

  
    public function displayInfor(signupRequest $Request) {
        // Lấy danh sách sinh viên hiện tại từ sesion
        $students = Session::get('students', []);
        $user = [
            "name"=>$name =  $Request->input('name'),
            "age"=>$age =  $Request->input('age'),
            "date"=>$date =  $Request->input('date'),
            "phone"=>$phone =  $Request->input('phone'),
            "web"=>$web =  $Request->input('web'),
            "address"=>$address =  $Request->input('address')
        ];
        
        $students[] = $user; // Thêm sinh viên mới vào danh sách

        // Cập nhật session với danh sách mới
        Session::put('students', $students);

        return view("signup")->with('students', $students);
        // Sử dụng redirect để tránh form resubmission
        // return redirect()->route('signup.index');
    }

    // Hàm xóa tất cả sinh viên khỏi sesion
    // public function clearStudents() {
    //     Session::forget('students'); // Xóa danh sách sinh viên khỏi session
    //     Session::flash('message', 'Đã xóa tất cả sinh viên!');
    //     return redirect()->route('signup.index');
    // }

}
