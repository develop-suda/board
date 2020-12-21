<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        return view('post.index');
        
    }

    public function  store(Request $request) {
        $msg = $request->message;
        DB::table('msg_save_only')->insert([
            'message' => $msg
        ]);
        $msgs = DB::table('msg_save_only')->get();
        return view('post.msg', ['msgs' => $msgs]);
    }

    public function board() {
        $msgs = DB::table('msg_save_only')->get();
        return view('post.msg', ['msgs' => $msgs]);
    }

    public function  delete(Request $request) {
        DB::table('msg_save_only')->where('id', $request->id)->delete();
        return redirect('/post');
    }
}
