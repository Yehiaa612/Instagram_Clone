@extends('layouts.app')

@section('title' , 'Form')

@section('content')


<form method="POST" action="{{Route('posts.store')}}">
    @csrf

    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="name">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <input type="text" name="body" class="form-control" id="exampleInputPassword1">.

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
        <div class="mb-3 form-check">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
