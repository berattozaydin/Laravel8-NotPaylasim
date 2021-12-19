<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Notes;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public function aboutus(){
        $setting = Setting::first();

        return view('home.page-about',['setting'=>$setting]);
    }
    public function references(){
        $setting = Setting::first();

        return view('home.page-reference',['setting'=>$setting]);
    }
    public function contactus(){


        return view('home.page-contact');
    }

    public static function getsetting(){
        return Setting::first();
    }
    public function index(){
        $setting = Setting::first();

    	return view('home.index',['setting'=>$setting]);
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors(['email' => 'The Provided credentials do not match our records']);
        } else {
            return view('admin.login');
        }
    }
    public function home_logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->withErrors(['email' => 'The Provided credentials do not match our records']);
        } else {
            return view('home.page-login');
        }
    }
       public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
