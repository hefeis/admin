<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function upload(){
        return view('test.upload');
    }
    function  uploaddo(){
        print_r($_FILES);die;
            $img_data=request()->file('img');
            var_dump($img_data);die;
            $img_ext=$img_data->getClientOriginalExtension();
          //  echo $img_ext;die;
        $path = request()->file('img')->storeAs('/storage/images','img.'.$img_ext);
        return $path;
    }
}
