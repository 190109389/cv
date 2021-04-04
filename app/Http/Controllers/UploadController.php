<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\UserN;
use Mail;

class UploadController extends Controller
{
public function uploadForm(){
return view('create');
}
public function uploadSubmit(Request $request){
    $this->validate($request, [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required',
        'image'=>'required',
        ]);
        if($request->hasFile('image'))
        {
        $allowedfileExtension=['pdf','jpg','png','docx'];
        $files = $request->file('image');
        foreach($files as $file){
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $check=in_array($extension,$allowedfileExtension);
        //dd($check);
        if($check){
        $post= Post::create($request->all());
        foreach ($request->image as $photo) {
        $filename = $photo->store('image');
        UserN::create([
        'post_id' => $post->id,
        'filename' => $filename
        ]);
        }
        return view('index');
        }
        else{
        return response ('<p><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</p>');
        }
        }
        }

}

public function index(){
    $posts = Post::all();
    return view('index')->with(['posts'=>$posts]);
}
public function get_post($id)
    {
        $post = Post::find($id);

        if($post == null)
        return response('post is not found');

        return view('detail')->with(['post'=>$post]);
    }

    
}
