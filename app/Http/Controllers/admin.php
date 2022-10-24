<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class admin extends Controller
{
    public function index()
    {
        return view("admin.index");
    }
    
    public function page404()
    {
        return view("admin.404");
    }

    public function login()
    {
        return view("admin.login");
    }

    public function loginRequest(Request $request)
    {
        $data = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if(Auth::attempt($data))
        {
            return redirect('index');
        }
        return redirect("login");
    }

    public function addArticle()
    {
        $categories = DB::table('categories')->get();
        return view("admin.addArticle", compact("categories"));
    }

    public function showArticle()
    {
        $articles = DB::table('articles')->get();
        return view("admin.showArticle", compact("articles"));
    }

    public function deleteArt($id)
    {
        DB::table("articles")->delete($id);
        return redirect("showArticle");
    }

    public function storeArticle(Request $request)
    {
        $request->validate([
            "title" => "required",
            "img" => "required|image",
            "description" => "required",
            "category" => "required"
        ]);

        $file =  $request->file('img');
        $name = $file->getClientOriginalName();
        $img_name = time() . $name;
        $path =  $request->file('img')->move('uploads', $img_name);
        $path = '\\'. $path; 
        DB::table('articles')->insert([
            "title" => $request->title,
            "img" => $path,
            "description" => $request->description,
            "category_id" => $request->category,
            "created_at" => Carbon::now()
        ]);

        return redirect("showArticle");
    }

    public function viewArticle($id)
    {
        $article = DB::table("articles")->find($id);
        $comments = DB::table("comments")->get();
        return view('admin.viewArticle', compact('article',"comments"));
    }

    public function addCategory()
    {
        return view("admin.addCategory");
    }


    public function storeCategory(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        DB::table('categories')->insert([
            "name" => $request->name
        ]);

        return redirect("showCategory");
    }

    public function showCategory()
    {
        $categories = DB::table('categories')->get();
        return view("admin.showCategory", compact("categories"));
    }

    public function deleteCat($id)
    {
        DB::table("categories")->delete($id);
        return redirect("showCategory");
    }

    public function logout()
    {
        Auth::logout();  
        return redirect("login");
    }
}
