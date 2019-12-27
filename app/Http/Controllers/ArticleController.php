<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $rows = Article::paginate(5);
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

    public function edit($id){
        $row = Article::find($id);
        return view('edit',['row' => $row]);
    }

    public function show($id){
        $row = Article::find($id);
        return view('show',['row'=>$row]);
    }

    public function update(Request $request, $id){
        $row = Article::find($id);
        $subject = $request->subject;
        $content = $request->contents;
        $writer = $request->writer;

        Article::where('id',$id)->update([
           'subject'=>$subject,
           'content'=>$content,
           'writer'=>$writer
        ]);

        return redirect('index/'.$id);
    }

    public function delete(Request $request, $id){
        Article::destroy($id);
        return redirect('index/');
    }
}
