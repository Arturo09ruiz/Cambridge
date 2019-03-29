<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm(){
        return view('upload');
    }

    public function storeFile(request $request){
        return $request->all();
    }
}
