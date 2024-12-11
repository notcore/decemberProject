<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function createView(){
        return view('web.CRUD.createPost');
    }
    
    public function create(Request $request){
            $validate = $request->validate([
                'judul' => 'required|max:255',
                'deskripsi' => 'required',
                'categori' => 'required|integer',
                'thumnail' => 'required|mimes:jpg,png,jpeg|max:3048',
            ]);

            $newPostingan = new Postingan();

            $newPostingan->user_id = auth()->user()->id;
            $newPostingan->categori_id = $request->input('categori');
            $newPostingan->slug = md5(uniqid(rand(),true));
            $newPostingan->judul = htmlspecialchars($request->judul);
            $newPostingan->deskripsi = htmlspecialchars($request->deskripsi);
            
            $thumnail = $request->file('thumnail');
            $uploadTo = $thumnail->store('thumnail');
    
            $newPostingan->thumanil = $uploadTo;
            $newPostingan->save();
            return redirect()->route('home')->with(['notifDone'=>'postingan berhasil diupload!']);    
    }
}
