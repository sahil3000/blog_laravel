<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetPageController extends Controller
{
    public static function page_menu(){
        $result = DB::table('pages')->where('status',1)->get();
        return $result;
    }
    public function show($slug){
        // return $slug;
        $data['result'] = DB::table('pages')->where('slug',$slug)->get();
        return view('front.showPage',$data);
    }
}
