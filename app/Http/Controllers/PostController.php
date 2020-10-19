<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post.index');
    }

    public function  store(Request $request) {
        $msg = $request->message;
        return view('post.msg', ['msg' => $msg]);
    }
}
