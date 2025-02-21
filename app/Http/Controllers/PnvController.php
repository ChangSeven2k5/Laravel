<?php
    namespace App\Http\Controllers;


    use Illuminate\Http\Request;
    class PNVcontroller extends Controller {
        public function index (){
            $title = "Hello PNV26";
            return view('welcome')-> with(['title'=>$title]);

        }
        public function index2(){
            $title = "Hello PNV26";
            $description = "Hoc web chuẩn";
            return view('welcome') -> with(['title'=>$title, 'description'=>$description]);

        }
    }
