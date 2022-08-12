<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    //
    public function index()
    {
        $users = User::withCount('posts')->simplePaginate(15);


        return view('users.index')->with(["users" => $users]);
    }
    public function create()
    {

        return view('users.create');
    }
    public function store(Request $req)
    {   $name = $req->input('name');
        $email = $req->input('email');
        $pass = $req->input('pass');
        User::create(
        ['name' => $name , 'email' => $email , 'password' => $pass]);

        return redirect()->Route("users.index");
    }
    public function show($id)
    {
        $posts = User::find($id)->posts;

        return view('users.show')->with(["user" => User::find($id),"posts" => $posts] );
    }



       //
       public function edit($id)
       {
            $users = User::simplePaginate(15);
            $user = $users[$id];

            return view('users.edit')->with( [ "user" => $user  ]);


    }

       public function update(Request $req , $id)
       {

        $name = $req->input('name');
        $email = $req->input('email');

            User::find($id)->update(['name'=> $name , 'email'=> $email ]);

            return redirect()->Route("users.index");
    }
       public function destroy($id)
       {
        User::where('id', $id)->delete();

        return redirect()->Route("users.index");



    }

}
