<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this-> validate($request , [
            'title' => 'required',
            'description' => 'required'
        ]);
       $message = new Article;
       $message->title = $request->input('title');
       $message->description = $request->input('description');

       $message -> save();

       //To Redirect
       return redirect('/')-> with('success', 'Article has been sent');
    }

    public function getArticle(){
        $messages = Article::all();
        return view('home')-> with('messages', $messages);
    }
}
