<?php

namespace App\Http\Controllers\admin;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostController extends Controller
{
    public function listing(){
        $data['result']=Post::orderBy('id','desc')->paginate(3);
        // $data['result']=DB::table('posts')->orderBy('id','desc')->get();
        return view('admin.post.list',$data); 
    }

    public function add(Request $req){
        $req->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts',
            'short_desc'=>'required',
            'long_desc'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'post_date'=>'required'
        ]);
        // dd($req->file('image'));
        $image_name=$req->image->store('post','public');
        $data=array([
            'title'=>$req->input('title'),
            'slug'=>$req->input('slug'),
            'short_desc'=>$req->input('short_desc'),
            'long_desc'=>$req->input('long_desc'),
            'image'=>$image_name,
            'post_date'=>$req->input('post_date')
        ]);
        DB::table('posts')->insert($data);
        // $req->session()->flash('msg','Data inserted successfully');
        return redirect('/admin/post/list');
    }

    public function edit($id){
        $result['data']=DB::table('posts')->where('id',$id)->get();
        // echo "<pre>";
        // return print_r($data);
        return view('/admin/post/edit',$result);
    }

    public function update(Request $req,$id){
        $req->validate([
            'title'=>'required',
            'slug'=>'required',
            'short_desc'=>'required',
            'long_desc'=>'required',
            'post_date'=>'required',
            'image'=>'mimes:jpeg,jpg,png'
        ]);

        if($req->hasfile('image')){
            $old_image=DB::table('posts')->where('id',$id)->get();
            // dd('public/'.$old_image[0]->image);
            Storage::delete('public/'.$old_image[0]->image);
            $image_name=$req->image->store('post','public');
            DB::table('posts')->where('id',$id)->update([
                'title'=>$req->input('title'),
                'slug'=>$req->input('slug'),
                'short_desc'=>$req->input('short_desc'),
                'long_desc'=>$req->input('long_desc'),
                'post_date'=>$req->input('post_date'),
                'image'=>$image_name
            ]);
            return redirect('/admin/post/list');
        } 
        // else
        DB::table('posts')->where('id',$id)->update([
            'title'=>$req->input('title'),
            'slug'=>$req->input('slug'),
            'short_desc'=>$req->input('short_desc'),
            'long_desc'=>$req->input('long_desc'),
            'post_date'=>$req->input('post_date')
        ]);

        return redirect('/admin/post/list');
    }

    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/admin/post/list');
    }
}
