<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;


class posts extends Controller
{
    public function index()
    {
        $post = Post::all();
           $s = User::all();  
    return view('posts', ['r' => $post, 's' => $s]);
    }
    public function insert(Request $request)    {
        // التحقق من صحة البيانات
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        // حفظ المقال الجديد في قاعدة البيانات
        $r = new Post();
        $r->title = $request->title;
        $r->description = $request->description;
        $r->save();
    
        // إعادة التوجيه إلى صفحة المقالات مع رسالة نجاح
        return to_route('index ');
    }
}
