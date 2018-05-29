<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function save_post(Request $request){
       $request->validate([
           'name'=>'required|min:5|max:255',
           'desc'=>'required|min:5|max:1000',
           'price'=>'required|min:1',
       ]);
       $post = new Post();
       $post->name = $request->name;
       $post->desc = $request->desc;
       $post->price = $request->price;
        $post->save();
       return response()->json($post);

   }
   public function get_product(){
       $product = Post::orderBy('id','desc')->get();
       return response()->json($product);
   }
   public function del_product($id){
       $product = Post::find($id);
       $product->delete();
       return response()->json($product);
   }
}
