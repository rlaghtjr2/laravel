<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleBackController extends Controller
{
    public function post(){
        $rows = Article::all();
        return $rows->toJson(JSON_PRETTY_PRINT);
    }
    public function search($id){
        $rows = Article::find($id);
        return $rows->toJson(JSON_PRETTY_PRINT);
    }
    public function edit(Request $request, $id){
            $subject = $request->subject;
            $content = $request->contents;
            $writer = $request->writer;
            $row = Article::find($id);
            if($row!=null) {
                Article::where('id', $id)->update([
                    'subject' => $subject,
                    'content' => $content,
                    'writer' => $writer
                ]);
                return "success";
            }else{
                return "fail";
            }
    }
    public function create(Request $request){
        $subject = $request->subject;
        $content = $request->contents;
        $writer = $request->writer;
        Article::create([
                'subject' => $subject,
                'content' => $content,
                'writer' => $writer]
        );
    }

    public function delete(Request $request, $id){
        $row = Article::find($id);
        if($row!=null) {
            Article::destroy($id);
            return 'Delete Success';
        }else{
            return 'Delete Fail';
        }
    }
}
