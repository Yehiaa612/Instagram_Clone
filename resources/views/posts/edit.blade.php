@extends('layouts.app')

@section('title' , 'Edit')

@section('content')

<form method="POST" action="{{Route('posts.update' , ['id' => $user['P_id'] ])}}">
    @method('PUT')
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{$user['title']}}">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="body" value="{{$user['body']}}">.

    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="r1" value="0" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          UnChecked
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="r1" id="flexRadioDefault2" value="1" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Checked
        </label>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
