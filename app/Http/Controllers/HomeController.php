<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function Home()
    {
        // ดึงข้อมูลโพสทั้งหมดจากตาราง "posts" และเรียงลำดับตามคอลัมน์ที่คุณต้องการ
        $posts = Post::orderBy('id', 'asc')->get();

        // ส่งข้อมูลโพสไปยังหน้า "homepage.blade.php"
        return view('Homepage', ['posts' => $posts]);
    }
}
