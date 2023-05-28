<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $articles = Article::inRandomOrder()->take(6)->get();
        return view('welcome')->with('articles',$articles);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function appointment()
    {
        return view('pages.appointment');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function detail($slug)
    {
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('pages.detail')->with('article',$article);
    }
    public function price()
    {
        return view('pages.price');
    }
    public function search()
    {
        return view('pages.search');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function profile()
    {
        return view('pages.profile');
    }
    public function signup()
    {
        return view('pages.signup');
    }


    // public function signup()
    // {
    //     return view('pages.signup');
    // }
    // public function review()
    // {
    //     return view('pages.review');
    // }
    // public function settings()
    // {
    //     return view('pages.settings');
    // }
    // public function UserAbout()
    // {
    //     //$users = UserInfo::where('id',$id)->firstOrfail();
    //     return view('pages.UserAbout');
    //     //->with('users',$users);;
    // }
    // public function chatbox()
    // {
    //     //$users = UserInfo::where('id',$id)->firstOrfail();
    //     return view('pages.chatbox');

    //     //->with('users',$users);;
    // }
}
