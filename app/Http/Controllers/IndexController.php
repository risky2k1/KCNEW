<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\PropertiCategory;
use App\Models\Tintuc;
use App\Models\User;
use App\Models\Binhluan;
use Carbon\Carbon;
use  App\Models\Like;

use Auth;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public function index(){
        
        $xahoi = Category::where('slug','xa-hoi')->first();
        $thegioi = Category::where('slug','the-gioi')->first();
        $congnghe = Category::where('slug','cong-nghe')->first();
        $giaoduc = Category::where('slug','giao-duc')->first();
        $thethao = Category::where('slug','the-thao')->first();
        $congnghe = Category::where('slug','cong-nghe')->first();
        $khoahoc = Category::where('slug','khoa-hoc')->first();
        $doisong = Category::where('slug','doi-song')->first();
        $phapluat = Category::where('slug','phap-luat')->first();
        $giaitri = Category::where('slug','giai-tri')->first();
        $kinhte = Category::where('slug','kinh-te')->first();
      
        
        $duyet = 1;
        $thoisu = 1;
        $nghethuat = 5;
        $category = Category::all();
        $properti = PropertiCategory::all();
        $tintuc = Tintuc::all();
        $user = User::all();

        $f_f_e = Tintuc::orderBy('created_at','DESC')->where('trangthai',$duyet)->take(2)->get();
        $t_s_f = Tintuc::where('id_properticategory',$thoisu)
        ->orderBy('created_at','DESC')
        ->where('trangthai',$duyet)->take(1)->get();

        $e_t_z = Tintuc::where('id_properticategory',$nghethuat)
        ->orderBy('created_at','DESC')
        ->where('trangthai',$duyet)->take(1)->get();

        
        $the_gioi = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $the_gioi2 = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $the_gioi3 = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('created_at','ASC')->take(2)->get();


        $cong_nghe = Tintuc::where('id_category',$congnghe->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $cong_nghe2= Tintuc::where('id_category',$congnghe->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $giao_duc = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $giao_duc2 = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $giao_duc3 = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('created_at','ASC')->take(2)->get();


        $the_thao = Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $the_thao2= Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $the_thao3= Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();

        $khoa_hoc = Tintuc::where('id_category',$khoahoc->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $khoa_hoc2= Tintuc::where('id_category',$khoahoc->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $phap_luat = Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $phap_luat2= Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $phap_luat3= Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();

        $doi_song = Tintuc::where('id_category',$doisong->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $doi_song2= Tintuc::where('id_category',$doisong->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $kinh_te = Tintuc::where('id_category',$kinhte->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $kinh_te2= Tintuc::where('id_category',$kinhte->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(3)->get();

        $giai_tri = Tintuc::where('id_category',$giaitri->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(3)->get();
        
        
       

      

        $video  = Tintuc::where('video','!=','null')->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $video2  = Tintuc::where('video','!=','null')->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();

        


        return view('index',compact('video2','video','kinh_te2','kinh_te','giai_tri','phap_luat3','phap_luat2','phap_luat','doi_song2','doi_song','khoa_hoc2','khoa_hoc','the_thao3','the_thao2','giao_duc3',
                                    'giao_duc2','the_thao','giao_duc','cong_nghe2','the_gioi3','the_gioi2','cong_nghe','the_gioi','e_t_z',
                                    't_s_f','f_f_e','category','properti','user'));
    }
    public function xemnhieunhat(){
        $loc = Tintuc::where('trangthai','1')->orderBy('luotxem','DESC')->paginate(10);
        $title = 'Xem nhiều nhất' ;
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function tinnong(){
        $loc = Tintuc::where('trangthai','1')->where('id_category','1')->paginate(10); //tin thế giới
        $title = 'Tin nóng' ;
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function tintucmoinhat(){
        $loc = Tintuc::where('trangthai','1')->orderBy('created_at','DESC')->paginate(10);
        $title = 'Tin mới nhất' ;
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function properti($pro){
        $proper = PropertiCategory::where('slug',$pro)->first();
        $loc = Tintuc::where('trangthai','1')->where('id_properticategory',$proper->id)->paginate(10);
        
        $title =  $proper->title;
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function category($cat){
        $cat = Category::where('slug',$cat)->first();
        $loc = Tintuc::where('trangthai','1')->where('id_category',$cat->id)->paginate(10);
        
        $title =  $cat->title;
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function tag($tag){
        
        $loc = Tintuc::where('trangthai','1')->where('tag',$tag)->paginate(10);
        
        $title =  'tag';
        return view('frontend.pages.loc.loc',compact('loc','title'));
    }
    public function search(Request $request){
        
        

        $key = $request->search;
        $cat = Category::where('title','like' , '%'.$key.'%')->first();
        $pro = Category::where('title','like' , '%'.$key.'%')->first();

        $tintuc = Tintuc::where('trangthai','1')->where('title','like' , '%'.$key.'%')->get();
        $tintuc_t = Tintuc::where('trangthai','1')->where('tag','like' , '%'.$key.'%')->get();
        
        $title = 'kết quả tìm kiếm';
        $title_t = 'kết quả tìm kiếm theo';
        $s = '(0,36 giây) ';
        return view('frontend.pages.loc.search',compact('tintuc','tintuc_t','title','s'));
    }

    public function danhmuc($slug){
        $category = Category::where('slug',$slug)->first();
       
        $duyet =1;
        $title = Category::where('slug', $slug)->first();
        
        $xemnhieunhat = Tintuc::where('id_category',$category->id)->orderBy('luotxem','DESC')->first();

        
        $tintuc1 = Tintuc::where('id_category',$category->id)->orderBy('created_at','DESC')->where('trangthai',$duyet)->take(2)->get();
        $tintuc2 = Tintuc::where('id_category',$category->id)->orderBy('created_at','ASC')->where('trangthai',$duyet)->take(2)->get();

        $pro = PropertiCategory::where('id_category',$category->id)->orderBy('id','DESC')->get();
        
        $c1=  PropertiCategory::where('id_category',$category->id)->first();
        $w1 = Tintuc::where('id_properticategory',$c1->id)->where('trangthai',$duyet)->take(2)->get();
        
        $c2=  PropertiCategory::where('id_category',$category->id)->orderBy('created_at','DESC')->first();
        $w2 = Tintuc::where('id_properticategory',$c2->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $w3 = Tintuc::where('id_properticategory',$c2->id)->where('trangthai',$duyet)->take(4)->get();

        $c3 = PropertiCategory::where('id_category',$category->id)->orderBy('created_at','ASC')->first();
        

        //2 row
        $w4 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderby('created_at','DESC')->first();
        $w5 = Tintuc::where('id_properticategory',$w4->tintucProperti->id)->where('trangthai',$duyet)->orderby('luotxem','ASC')->take(4)->get();
        

        $w6 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderby('created_at','ASC')->first();
        $w7 = Tintuc::where('id_properticategory',$w6->tintucProperti->id)->where('trangthai',$duyet)->orderby('created_at','ASC')->get();
        

        $w8 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderby('luotxem','DESC')->first();
        $w9 = Tintuc::where('id_properticategory',$w8->tintucProperti->id)->where('trangthai',$duyet)->get();
        //video
        $w10 = Tintuc::where('id_category',$category->id)->where('video','!=','null')->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();;
        $w11 = Tintuc::where('id_category',$category->id)->where('video','!=','null')->where('trangthai',$duyet)->orderBy('luotxem','ASC')->take(4)->get();
        //after video
        $w12 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->orderBy('created_at','ASC')->first();
        $w13 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->orderBy('created_at','ASC')->take(3)->get();
        
        //foot
        $w16 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderBy('luotxem','ASC')->orderBy('created_at','DESC')->first();
        $w17 = Tintuc::where('id_category',$category->id)->where('trangthai',$duyet)->orderBy('luotxem','ASC')->orderBy('created_at','DESC')->take(3)->get();



        return view('frontend.pages.danhmuc.index',compact('category','title','xemnhieunhat','tintuc1','tintuc2','w1','c1','w2','c2','w3','c3','w4','w5','w6','w7','w8','w9','w10','w11','w12','w13','w16','w17'));
       
        
      
    }


    public function ero(){
        return view('frontend.pages.404');
    }
    public function coming(){
        return view('frontend.pages.coming');
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function detail($slug){
        $tin = Tintuc::where('slug',$slug)->first();
        $tin->increment('luotxem');
        
        

        $user = User::all();
        $checkbinhluan = Binhluan::where('id_tintuc',$tin->id)->first();
        $xuhuong = Tintuc::orderBy('created_at','ASC')->take(4)->get();
        $binhluan = Binhluan::where('id_tintuc',$tin->id)->get();
        $binhluansibar = Binhluan::orderBy('created_at','DESC')->take(4)->get();
        $ketiep = Tintuc::where('id_category',$tin->id_category)->take(2)->get();
        $luachon = Tintuc::orderBy('luotxem','ASC')->take(4)->get();
        $like = Tintuc::where('id_properticategory',$tin->id_properticategory)->orderBy('luotxem','DESC')->take(2)->get();
        if(Auth::check()){
            $likes = Like::where('id_user',Auth::user()->id)->where('id_tintuc',$tin->id)->where('like','1')->first();
            return view('frontend.pages.detail.index',compact('likes','luachon','checkbinhluan','binhluan','like','ketiep','slug','tin','user','xuhuong','binhluansibar'));
        }
        return view('frontend.pages.detail.index',compact('like','luachon','checkbinhluan','binhluan','like','ketiep','slug','tin','user','xuhuong','binhluansibar'));
    }


    public function binhluan(Request $request, $tin, $user){
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $binhluan = new Binhluan();
        
        $binhluan->noidung = $request->comment;
        $binhluan->id_user = $user;
        $binhluan->id_tintuc = $tin;
        $binhluan->ngaydang = $now;
        $binhluan->save();

        return redirect()->back();
    }

    public function like(Request $request){
       $check = Like::where('id_tintuc', $request->tin)->where('id_user',$request->user)->first();
       if(isset($check)){
           if($check->like == 0){
               $val = Like::where('id_tintuc', $request->tin)->where('id_user',$request->user)->first();
               $val->like = 1;
               $val->id_user = $request->user;
               $val->id_tintuc =  $request->tin;
               $val->save();
           }
           else{
            $val = Like::where('id_tintuc', $request->tin)->where('id_user',$request->user)->first();
            $val->like = 0;
            $val->id_user = $request->user;
            $val->id_tintuc =  $request->tin;
            $val->save();
           }
       }
       else{
           $val = new Like();
           $val->like = 1;
           $val->id_user = $request->user;
           $val->id_tintuc =  $request->tin;
           $val->save();
       }
       return redirect()->back();
    }
    public function report($id){
        $binhluan = Binhluan::where('id',$id)->first();
        $binhluan->trangthai = '2';
        $binhluan->save();
        
        return redirect()->back();
    }

   
}
