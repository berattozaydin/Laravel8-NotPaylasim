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
use MongoDB\Driver\Session;
use phpDocumentor\Reflection\Types\Context;

class HomeController extends Controller
{
    public function getnotes(Request $request){
        $data = Notes::where('title',$request->input('search'))->first();
        return redirect()->route('note',['id'=>$data->id,'slug'=>$data->slug]);
    }
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
    public function sendmessage(Request $request){

        $data = new Message;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->address=$request->input('address');
        $data->message=$request->input('message');


        $data->save();

        return redirect()->route('contactus')->with('success','Mesajınız Gönderilmiştir');
    }

    public static function getsetting(){
        return Setting::first();
    }
    public function notess($id){
        $data=Notes::find($id);
        $datalist=Image::where('note_id',$id)->get();
        $reviews = \App\Models\Review::where('note_id',$id)->get();
        return view('home.notes_detail',['data'=>$data,'datalist'=>$datalist,'reviews' =>$reviews]);
        //print_r($data);
       // exit();
    }
    public function categorynotess($id){
       $datalist=Notes::where('category_id',$id)->get();
        $data=Category::find($id);
       return view('home.category_notes',['datalist'=>$datalist,'data'=>$data]);
        //print_r($data);
        //exit();
    }
    public function index(){
        $setting = Setting::first();
        $slider= Notes::select('id','title','image')->limit(4)->get();
//print_r($slider);
//exit();
        $data=['setting'=>$setting,
            'slider'=>$slider
            ];

    	return view('home.index',$data);
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
