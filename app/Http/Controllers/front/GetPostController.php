<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GetPostController extends Controller
{
    public function list(){
        $data['result']=DB::table('posts')->orderBy('id','desc')->get();
        return view('front.home',$data);
    }
    public function detail($slug){
        $data['result']=DB::table('posts')->where('slug',$slug)->get();
        return view('front.detail',$data);
    }
}
