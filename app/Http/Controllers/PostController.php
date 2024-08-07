<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //
    public function page(){
        $categories = Category::all();  //get all categories
        $user_id = Auth::id();    //send user id to view
        return view('post',['user_id'=>$user_id,'categories'=>$categories]);
    }

    public function create(Request $request){
        $request->validate([
            'title'  =>'required|string',
            'photo'  =>'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            'category'=>'required|string',
            'content' =>'required|string'
        ]);
        $post = new Post();

        //$photo = time().'-'.$request->photo->getClientOriginalName();
        $post_photo = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('post_images'),$post_photo);

        //$img_path = public_path('post_images').$post_photo;

        $post->title = $request->title;
        $post->photo = 'post_images/'.$post_photo;
        $post->user_id = $request->user;
        $post->category_id = $request->category;
        $post->content = $request->content;

        if($post->save()){
            return back()->with(['success'=>'post created successfully !']);
        }else{
            return back()->with(['error'=>'failed to create post!']);
        }
        //dd($test);
        //dd(time().'.'.$request->photo->extension());
    }
    public function one(int $id){
        $post=Post::find($id);
        return view('single',['post'=>$post]);
    }

    public function getPost(){
        $posts = Post::all();
        return view('posters',['posts'=>$posts]);
    }
    
}
