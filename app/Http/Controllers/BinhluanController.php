<?php

namespace App\Http\Controllers;

use App\Models\Binhluan;
use App\Models\Tintuc;
use App\Models\Category;
use App\Models\PropertiCategory;
use Illuminate\Http\Request;

class BinhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhluan = Binhluan::orderBy('created_at','DESC')->paginate(10);
        $tintuc = Tintuc::orderBy('created_at','DESC')->get();
        return view('backend.pages.binhluan.index',compact('tintuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tintuc = Tintuc::find($id);
        $user = Binhluan::all();
        $binhluan = Binhluan::where('id_tintuc',$tintuc->id)->get();
        return view('backend.pages.binhluan.show',compact('tintuc','binhluan','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function edit(Binhluan $binhluan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Binhluan $binhluan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Binhluan::find($id)->delete();
        return redirect()->back()->with('success','Xóa thành công');
    }

    public function trolai($id){
        $binhluan = Binhluan::find($id);
        
        $binhluan->trangthai = 1;
        $binhluan->save();
        return redirect()->back()->with('success','Bình luận đã trở lại bình thường');
    }
}
