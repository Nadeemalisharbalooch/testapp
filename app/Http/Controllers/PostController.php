<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Http\Requests\UserRequest;
use App\Models\Post;
use App\Models\Test;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{    
    
    public function test() {
     return   $trashedUsers = User::onlyTrashed()->get();

        return "data has been soft delete";
        

        
    
        // Return the array of post titles
    
    }
    
    /**
     * Display a listing of the resource.
     */
    public function relation(){
      
        return  User::with('post')->get();
    }
    public function index()
    {
      return view('uploadfile');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
      
        $users=User::create([
          'name'=>$request->password,
          'email'=>$request->password,
          'password'=>$request->password,
        ]);

     return Redirect()->back()->with('message','data has been Created successfully.');
    }
    public function upload(Request $request){
        
        $image=$request->file('photo');
       
       $path=$image->store('images','public');
       $file=Test::create([
       'images'=>$path,
       ]);
      redirect()->back();

          
    }
public function showimage(string $id){
  
    $imgs=Test::find($id);

    // return view('showimages')->with('imgs',$imgs);

     $path=public_path('storage/'.$imgs->images);
  unlink($path);
  echo "image has been deleted successfully";
}
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::with('post')->get();

foreach ($users as $user) {
    foreach ($user->post as $poste) {
        echo $poste->title . '<br>';
    }
}

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
