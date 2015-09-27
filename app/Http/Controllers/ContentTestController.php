<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ContentTest;

class ContentTestController extends Controller
{
    //

    public function index()
    {
        $contents=ContentTest::where('status','yes')->orderBy('title','asc')->paginate(config('content.content_per_page'));
        return view('contentTest.index',compact('contents'));
    }


    public function showContent($id)
    {
        $content=ContentTest::where('id',$id)->firstOrFail();

        return view('contentTest.show',compact('content'));
    }
}
