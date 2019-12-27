<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $rows = Article::all();
        return view('index',['rows'=>$rows]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $subject = $request->subject;
        $content = $request->contents;
        $writer = $request->writer;
        Article::create([
                'subject' => $subject,
                'content' => $content,
                'writer' => $writer]
        );

        return redirect('index');
    }
}
