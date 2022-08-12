@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<table style="margin-top: 30px;" class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number Of Posts </th>
        <th>Actions</th>

    </tr>

    <tr>
     @foreach ($users as $user )
        @if($user['id'] == "0")
    @continue
    @endif
        <td>{{$user['id']}}</td>
        <td><a href="{{ Route('users.show',['id'=>$user['id'] ]) }}">{{$user['name']}}</a></td>
        <td>{{$user['email']}}</td>
        <td>{{$user->posts_count}}</td>

        <td><div class="row text-center">
            <div class="col-md-6 "><a href="{{ Route('users.edit',['id'=>$user['id'] ]) }}" class="btn btn-primary">Edit</a>

                <form method="POST" action="{{ Route('users.destroy',['id'=>$user['id'] ]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

        </div>
    </td>

        </tr>


     @endforeach




  </table>
  <center>
  {{ $users->links() }}
</center>

@endsection

