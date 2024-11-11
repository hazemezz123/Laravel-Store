<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function action1()
    {
        $local_name = "hazem";
        $Books = ["html", "css", "js", "Laravel", "php"];
        return view('welcome', [
            "name" => $local_name,
            "Books" => $Books
        ]);
    }
    public function action2()
    {
        return "hello from the Controller am very happy to learn laravel With CodeZilla ";
    }
}
