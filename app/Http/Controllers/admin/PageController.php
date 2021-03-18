<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function listing(){
        $data['result']=DB::table('pages')->orderBy('id','desc')->get();
        return view('admin.page.list',$data); 
    }

    public function add(Request $req){
        $req->validate([
            'name'=>'required',
            'slug'=>'required|unique:pages',
            'description'=>'required'
        ]);
        $data=array([
            'name'=>$req->input('name'),
            'slug'=>$req->input('slug'),
            'description'=>$req->input('description'),
            'status'=>1
        ]);
        DB::table('pages')->insert($data);
        // $req->session()->flash('msg','Data inserted successfully');
        return redirect('/admin/page/list');
    }

    public function edit($id){
        $result['data']=DB::table('pages')->where('id',$id)->get();
        return view('/admin/page/edit',$result);
    }

    public function update(Request $req,$id){
        $req->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required'
        ]);
        DB::table('pages')->where('id',$id)->update([
            'name'=>$req->input('name'),
            'slug'=>$req->input('slug'),
            'description'=>$req->input('description')
        ]);

        return redirect('/admin/page/list');
    }

    public function delete($id){
        DB::table('pages')->where('id',$id)->delete();
        return redirect('/admin/page/list');
    }
}
