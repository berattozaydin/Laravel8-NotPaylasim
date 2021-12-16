<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Note;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id', '=',1)->with('children')->get();
    }
    public static function getsetting(){
        return Setting::first();
    }
    public function index(){
    	return view('home.index');
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
