<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
        $images=Image::all();
        return view('image.index',compact('images'));
    }

    public function create(){
        return view('image.create');
    }

    public function store(Request $req){
        $image_upload=$req->url_image;
        $url=$image_upload->store('public/download');

        Image::create([
            'title'=>$req->title,
            'description'=>$req->description,
            'url_image'=>$url
        ]);
        
        return redirect('/image');
    }

    public function show($id){
        $image=Image::find($id);
        return view('image.show',compact('image'));
    }

    public function edit($id){
        $image=Image::find($id);
        return view('image.edit',compact('image'));
    }

    public function update(Request $req,$id){
        $image=Image::find($id);
        Storage::delete($image->url_image);

        $image_upload=$req->url_image;
        $url=$image_upload->store('public/download');

        $image->update([
            "title" => $req->title,
            "description" => $req->description,
            "url_image" => $url,
        ]);
        
        return redirect('/image');
    }

    public function destroy($id){
        $url=Image::find($id)->url_image;
        Storage::delete($url);
        
        Image::destroy($id);
        return redirect('/image');

    }
}
