<?php

namespace App\Http\Controllers;

use App\Models\PropertiCategory;
use App\Models\Tintuc;
use App\Models\Category;
use Illuminate\Http\Request;

class ProperticategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properti = PropertiCategory::orderBy('created_at','DESC')->paginate(10);
        $category = Category::all();
        return view('backend.pages.properticategory.index',compact('properti','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.pages.properticategory.create',compact('category'));
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
            'title' => 'required|unique:properti_categories',
            'category' => 'required',     
        ],
        [
            'title.unique' => 'Thuộc tính đã tồn tại',
            'title.required' => 'Chưa nhập thuộc tính',
            'category.required' => 'Chưa chọn danh mục',  
            
        ]);
        $properti = new PropertiCategory();
        $properti->title = $data['title'];
        $properti->slug = $request->slug;
        $properti->id_category = $data['category']; 
        $properti->save();

        if ($request->submit == null)
        
        return redirect()->route('thuoctinhdanhmuc.index')->with('success', 'Thêm thành công');
    else
        return redirect()->back()->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertiCategory  $propertiCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PropertiCategory $propertiCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertiCategory  $propertiCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::all();
        $properti = PropertiCategory::find($id);
        return view('backend.pages.properticategory.edit',compact('category','properti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertiCategory  $propertiCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $properti = PropertiCategory::find($id);
        $properti->title = $request->title;
        $properti->slug = $request->slug;
        $properti->id_category = $request->category;

        $properti->save();

        return redirect()->route('thuoctinhdanhmuc.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertiCategory  $propertiCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = Tintuc::where('id_properticategory',$id)->first();
        if($check){
            return redirect()->back()->with('success','Không thể xóa, do tồn tại bài viết thuộc phần tử này!!!');
        }
        else{
            PropertiCategory::find($id)->delete();
            return redirect()->back()->with('success','Xóa thành công!!');
        }
    }

    public function tieptucthem(Request $request){
        $data = $request->all();
        $properti = new PropertiCategory();
        $properti->title = $data['title'];
        $properti->slug = $data['slug'];
        $properti->id_category = $data['danhmuc'];
        $properti->save();

        $output ='';
        $output.='<div class="alert alert-info alert-dismissible">';
        $output.=' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        $output.='<h5><i class="icon fas fa-info"></i>Thêm thành công</h5>';

        $output.='</div>';

        echo $output;
    }
}
