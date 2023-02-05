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
    public function form()
    {
        return view("pages.create-avatar");
    }
    public function getRequest(Request $request)
    {
        $faker = \Faker\Factory::create();
        $data = $request->all();
        $avatar = new Avatar();
        $avatar->nickname = $data["nickname"];
        $avatar->avatarImg = $data["avatarImg"];
        $avatar->email = $data["email"];
        $avatar->code = $faker->md5();
        $avatar->save();
        return redirect()->route("home");
    }
    public function deleteAvatar($id)
    {
        $avatar = Avatar::find($id);
        $avatar->delete();
        return redirect()->route("home");
    }
}