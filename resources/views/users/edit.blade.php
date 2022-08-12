@extends('layouts.app')

@section('title' , 'Edit')

@section('content')

<form method="POST" action="{{Route('users.update' , ['id' => $user['id'] ])}}">
    @method('PUT')
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{$user['name']}}">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{$user['email']}}">.
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3 form-check">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
