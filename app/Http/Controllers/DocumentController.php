<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

class DocumentController extends Controller
{

    public function upfile(){ //tải file lên gg drive
       
        $get_document =  $data['cv'];
            if($get_document){
            $file_name = $get_document->getClientOriginalName();
            $filePath = $get_document;
            $fileData = File::get($filePath);
            Storage::disk('google')->put($file_name, $fileData);

                $ungtuyen->cv = $file_name;
                // $ungtuyen->save();
                // // $jobs = Jobs::where('trangthai_job', 1)->orderBy('created_at', 'DESC')->get();
                // return view('frontend.tuyendung.jobs.index', compact('jobs'));
        }
    }
   
    public function create(){ //Tạo folder
        Storage::cloud()->makeDirectory('hinhanhtintuc');
        dd('created');
    }
    public function delete(){//XOA folder
        $forder = collect(Storage::cloud()->listcontents('/', false))->where('type' , 'dir')->where('name' , 'huongdansudung')->first();
        
        Storage::cloud()->delete($forder['path']);
        dd('delete');
    }
}
