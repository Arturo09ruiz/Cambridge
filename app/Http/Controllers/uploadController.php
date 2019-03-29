<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function index(){
        return view('upload.upload');
    }

    public function store(request $request){
        if ($request->hasFile('image')) {
            $request->file('image');
        //return $request->image->extension();     Una pequeña herramienta que nos ayudara mas tarde
        //return $request->image->store('public');
        //return $request->image->storeAs('public', 'clientes.png');
        //return Storage::putFile('public/new', $request->file('image'));
        }
        else{
            return ('Ningun Archivo Seleccionado');
        }
    }

    public function show(){
        //$rawContent = Storage::get('arturo.png');
        //if (Storage::put('newImage.png', $rawContent)){
        //    return 'Ha Sido Creada';
        //}




    

       //if (Storage::move('public/arturo.png', 'arturo.png')){
       //     return 'File';
       // }


        //return "<img src='".$url."'/>";

        //if(Storage::deleteDirectory('public/make')){
        //    return 'Deleted';
        //}
    }


}
