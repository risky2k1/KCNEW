<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\PropertiCategory;
use App\Models\Tintuc;
use App\Models\User;
use App\Models\Binhluan;
use App\Models\Like;
use Carbon\Carbon;

use Auth;

use App\Notifications\Report;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->vaitro == 5)
        {
            return redirect('/');
        }
        else{
            
            
            // $when = Carbon::now()->addSeconds(10);
           
            return view('home');
        }
       
            
        // auth()->user()->assignRole('God');
        // return view('home');
    }
    public function dashboard(){

        $user = User::all();
        $tintuc = Tintuc::all();
        $like = Like::where('like','1')->get();

        
        $category = Category::where('chubien',Auth::user()->id)->get();
        
        
        
        return view('backend.pages.dashboard',compact('user','tintuc','like','category'));
    }
}
