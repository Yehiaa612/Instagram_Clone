@extends('layouts.app')

@section('title' , 'Home')

@section('content')

<table style="margin-top: 30px;" class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Enabled</th>
        <th>Pusblished At</th>
        <th>User ID</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Actions</th>

    </tr>

    <tr>
     @foreach ($users as $user )
        @if($user['P_id'] == "0")
    @continue
    @endif
        <td>{{$user['P_id']}}</td>
        <td><a href="{{ Route('users.show',['id'=>$user['P_id'] ]) }}">{{$user['title']}}</a></td>
        <td>{{$user['body']}}</td>
        <td>{{$user['enabled']}}</td>
        <td>{{$user['published_at']}}</td>
        <td>{{$user['user_id']}}</td>
        <td>{{$user['created_at']}}</td>
        <td>{{$user['updated_at']}}</td>
        <td>{{$user['deleted_at']}}</td>
        <td><div class="row text-center">
            <form method="POST" action="{{ Route('posts.restore',['id'=>$user['P_id'] ]) }}">
                @csrf
                @method('PUT')
            <div class="col-md-6 "><button class="btn btn-primary">Restore</button>
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

