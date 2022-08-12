<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\User;

class Postcontroller extends Controller
{
    //
    public function index()
    {
        $posts = post::simplePaginate(15);



        return view('posts.index')->with(["posts" => $posts  ]);
    }
    public function create()
    {

        return view('posts.create');
    }
    public function store(Request $req)
    {   $name = $req->input('name');
        $email = $req->input('body');
        $pass = $req->input('r1');



        post::create(
        ['title' => $name , 'body' => $email , 'enabled' => $pass ,'user_id' => auth()->user()->id ]);

        return redirect()->Route("posts.index");
    }
    public function show($id)
    {

        return dd(post::where('P_id', $id)->get());
    }



       //
       public function edit($id)
       {
            $users = post::simplePaginate(15);
            $user = $users[$id];

            return view('posts.edit')->with( [ "user" => $user  ]);


    }

       public function update(Request $req , $id)
       {

        $name = $req->input('name');
        $email = $req->input('body');
        $pass = $req->input('r1');
        $ud = $req->input('uid');


            post::find($id)->update(['title'=> $name , 'body'=> $email , 'enabled' => $pass , 'user_id' => $ud]);

            return redirect()->Route("posts.index");
    }
       public function destroy($id)
       {
        post::where('P_id', $id)->delete();

        return redirect()->Route("posts.index");



    }

    public function dlist()
    {
        $users = post::onlyTrashed()->simplePaginate(15);


        return view('posts.deleted')->with(["users" => $users]);
    }

    public function restore($id){


        post::onlyTrashed()->where('P_id', $id)->restore();


        return redirect()->route('posts.dlist');

    }


}
