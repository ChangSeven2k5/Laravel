<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        
        return view("page.trangchu", compact("slide"));
    }
   
}
