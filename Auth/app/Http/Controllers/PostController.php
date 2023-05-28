<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function store(Request $request)
    {
     
        return redirect()->back()->with([
            'message' => 'Your Medical Record has Been saved !', 
            'status' => 'success'
        ]);      }
}