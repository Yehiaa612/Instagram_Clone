@extends('layouts.app')

@section('title' , 'Form')

@section('content')


<form method="POST" action="{{Route('users.store')}}">
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<hr>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1">.
<hr>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">.
        
        <hr>
    </div>
    <div class="mb-3 form-check">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
