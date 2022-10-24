<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class blog extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        return view("blog.index", compact('categories'));
    }
   
    public function post($id){
        $article = DB::table("articles")->find($id);
        $categories = DB::table('categories')->get();
        $comments = DB::table("comments")->get()->where('article_id',$id);
        return view('blog.post', compact('article',"comments",'categories'));
    }
   
    public function postsInCat($cat_id){
        $article = DB::table("articles")->get()->where('category_id',$cat_id);
        $categories = DB::table('categories')->get();
        return view("blog.postsInCat", compact('article', 'categories'));
    }
   
    public function about(){
        return view("blog.about");
    }
   
    public function saveComment(Request $request){

        $replaced = Str::replace(['replace','shit','bad'], '*****', $request->content);

        DB::table('comments')->insert([
            "commenter_name" => $request->commenter_name,
            "content"=> $replaced,
            "article_id"=>$request->article_id
        ]);

        $article = DB::table("articles")->find($request->article_id);
        $categories = DB::table('categories')->get();
        $comments = DB::table("comments")->get()->where('article_id',$request->article_id);
        return view('blog.post', compact('article',"comments",'categories'));

    }
}
