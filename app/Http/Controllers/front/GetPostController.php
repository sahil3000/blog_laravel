<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class GetPostController extends Controller
{
    public function list(){
        $posts=Post::orderBy('id','desc')->paginate(3);
        // return $data;
        //$data['result']=DB::table('posts')->orderBy('id','desc')->get();
        return view('front.home',['posts'=>$posts]);
    }
    public function detail($slug){
        $data['result']=DB::table('posts')->where('slug',$slug)->get();
        return view('front.detail',$data);
    }
}
