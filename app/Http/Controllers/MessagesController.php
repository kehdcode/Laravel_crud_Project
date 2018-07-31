<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MessagesController extends Controller
{
    public function submit(){
        $articles = Article::all();
        print_r($articles);

    }
}
