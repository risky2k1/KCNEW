<?php

namespace App\Http\Controllers;

use App\Models\Tintuc;
use App\Models\User;
use App\Models\Category;
use App\Models\PropertiCategory;
use App\Models\Like;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class TintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $nguoivietbai = Tintuc::where('tacgia',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);

        $tintuc = Tintuc::all();
        $tintucs = Tintuc::orderBy('created_at','DESC')->paginate(10);
        $properti = PropertiCategory::all();
        $category = Category::where('chubien',Auth::user()->id)->get();
        
        foreach ($tintuc as $tin) {
            foreach ($properti as $pro) {
                if ($pro->id == $tin->id_properticategory) {
                    foreach ($category as $cat) {
                
                        if ($pro->id_category == $cat->id) {
                            $nguoiduyetbai = Tintuc::orderBy('created_at','DESC')->paginate(10);          
                            return view('backend.pages.tintuc.index',compact('nguoiduyetbai','user','tintucs'));
                        
                        }
                        
                    }
              
                 }
            }
        }

       
        
        return view('backend.pages.tintuc.index',compact('nguoivietbai','user','tintucs'));
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        $category = Category::all();
        return view('backend.pages.tintuc.create',compact('user','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => 'required|unique:tintucs|max:255',
            'tomtat' => 'required',
            'noidung' => 'required',      
              
            'category' => 'required',      
            'tag' => 'required',      
        ],
        [
            'title.unique' => 'Tên bài viết đã tồn tại',
            'title.required' => 'Chưa nhập tên bài viết',
            'title.max' => 'Tên bài viết quá dài',
            'tomtat.required' => 'Chưa nhập tóm tắt',
            'noidung.required' => 'Chưa nhập nội dung',
            'category.required' => 'Chưa chọn danh mục',
            'tag.required' => 'Chưa chọn tag',
           
        ]);

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();


        $tintuc = new Tintuc();
        $tintuc->title = $data['title'];
        $tintuc->tacgia = $request->tacgia;
        $tintuc->slug =  $request->slug;
        $tintuc->tag = $data['tag'];
        $tintuc->tomtat = $data['tomtat'];
        $tintuc->id_properticategory = $request->properticategory;
        $tintuc->id_category = $request->category;
        $tintuc->noidung = $data['noidung'];
        $tintuc->ngayguibai = $now;
        
        $tintuc->video =  $request->video;
        $tintuc->trangthai = 0; //Đợi duyệt

        
        $get_image = $request->file('hinhanh');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/tintuc',$new_image);
            $tintuc->hinhanh = $new_image;

            $tintuc->save();
            if($request->submit == null)
            return redirect()->route('tintuc.index')->with('success','Thêm bài viết thành công');
            else
            return redirect()->back()->with('success','Thêm thành công');
        }

       

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all();
        $tin = Tintuc::find($id);
        return view('backend.pages.tintuc.show',compact('tin','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tintuc = Tintuc::find($id);
        $category = Category::orderBy('created_at','DESC')->get();
        $properti =PropertiCategory::all();

        return view('backend.pages.tintuc.edit',compact('tintuc','category','properti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();


        $tintuc = Tintuc::find($id);
        $tintuc->title = $request->title;
        $tintuc->tacgia = $request->tacgia;
        $tintuc->slug =  $request->slug;
        $tintuc->tag = $request->tag;
        $tintuc->tomtat = $request->tomtat;
        $tintuc->id_properticategory = $request->properticategory;
        $tintuc->id_category = $request->category;
        $tintuc->noidung = $request->noidung;
        $tintuc->ngayguibai = $now;
        $tintuc->trangthai = 3;
        
        $tintuc->video =  $request->video;
        

        
        $get_image = $request->file('hinhanh');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/tintuc',$new_image);
            $tintuc->hinhanh = $new_image;

            $tintuc->save();
            
            return redirect()->route('tintuc.index')->with('success','Cập nhật bài viết thành công');
        }
        $tintuc->save();
        
        return redirect()->route('tintuc.index')->with('success','Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tintuc::find($id)->delete();
        return redirect()->back()->with('success','Xóa bài viết thành công');
    }

    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output ='';
            if($data['action']=="danhmuc"){
                $select_thuoctinh = PropertiCategory::where('id_category',$data['madm'])->orderBy('created_at','DESC')->get();
                $output.='<option>--Chọn thuộc tính danh mục--</option>';
                foreach ($select_thuoctinh as $select) {
                    $output.='<option value="'.$select->id.'">'.$select->title.'</option>';
                }
            }
            echo $output;
        }

    }

    public function duyet($id){
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $duyet = 1;
        $tin = Tintuc::where('id',$id)->first();
        $tin->trangthai = $duyet ;
        $tin->ngayduyet =   $now ;
        $tin->save();
        $output = '';
        $output.='<div class="alert alert-info alert-dismissible">';
        $output.=' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        $output.='<h5><i class="icon fas fa-info"></i>Bài viết đã được duyệt</h5>';

        $output.='</div>';

        echo $output;
    }
    public function tuchoi($id){
        $tin = Tintuc::where('id',$id)->delete();
        return redirect()->route('tintuc.index')->with('success','Bài viết đã được từ chối');
    }

    public function timkiembaiviet(Request $request){
        $key =  $request->search;
        $tintuc =


        

        $user = User::all();
        $nguoivietbai = Tintuc::where('tacgia',Auth::user()->id)->where('title','like','%'.$key.'%')->orderBy('created_at','DESC')->paginate(10);

        $tintuc = Tintuc::all();
        $tintucs = Tintuc::orderBy('created_at','DESC')->paginate(10);
        $properti = PropertiCategory::all();
        $category = Category::where('chubien',Auth::user()->id)->get();
        
        foreach ($tintuc as $tin) {
            foreach ($properti as $pro) {
                if ($pro->id == $tin->id_properticategory) {
                    foreach ($category as $cat) {
                
                        if ($pro->id_category == $cat->id) {
                            $nguoiduyetbai =  Tintuc::where('title','like','%'.$key.'%')->orderBy('created_at','DESC')->paginate(10);        
                            return view('backend.pages.tintuc.timkiem',compact('nguoiduyetbai','user','tintucs'));
                        
                        }
                        
                    }
              
                 }
            }
        }

       
        
        return view('backend.pages.tintuc.timkiem',compact('nguoivietbai','user','tintucs'));
    }

    public function taobaiviet(Request $request){
        $data = $request->all();
        $tintuc = new PropertiCategory();
        $tintuc->title = $data['title'];
        $tintuc->slug = $data['slug'];
        $tintuc->id_category = $data['danhmuc'];
        $tintuc->id_properticategory = $data['thuoctinh'];
        $tintuc->tomtat = $data['tomtat'];
        $tintuc->tag = $data['tag'];
        $tintuc->hinhanh = $data['hinhanh'];
        $tintuc->video = $data['video'];
        $tintuc->noidung = $data['noidung'];
        $tintuc->tacgia = $data['tacgia'];
        $tintuc->ngayguibai = $now;
        $tintuc->trangthai = 0;
        $get_image = $request->file('hinhanh');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/tintuc',$new_image);
            $tintuc->hinhanh = $new_image;

            $tintuc->save();
            if($request->submit == null)
            return redirect()->route('tintuc.index')->with('success','Thêm bài viết thành công');
            else
            return redirect()->back()->with('success','Thêm thành công');
        }
        $tintuc->save();

      
        

        $output ='';
        $output.='<div class="alert alert-info alert-dismissible">';
        $output.=' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        $output.='<h5><i class="icon fas fa-info"></i>Thêm thành công</h5>';

        $output.='</div>';

        echo $output;
    }
    

  
}
