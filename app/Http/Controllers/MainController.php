<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avatar;

class MainController extends Controller
{
    public function home()
    {
        $avatars = Avatar::all();
        $data = [

            "avatars" => $avatars,
        ];
        return view("pages.home", $data);
    }
}