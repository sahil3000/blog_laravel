<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function listing(){
        $data['result']=DB::table('contacts')->orderBy('id','desc')->get();
        return view('admin/contact/list',$data);
    }
}
