<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getIndex()
    {
        return view("page_sp.trangchu_sp");
    }
}
