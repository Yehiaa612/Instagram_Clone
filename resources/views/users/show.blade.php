@extends('layouts.app')

@section('title' , 'Form')

@section('content')
<table style="margin-top: 30px;" class="table table-striped table-hover">

    <th>Title</th>
    <th>Owner</th>
    <th>Body</th>
    <th>Enabled</th>
    <th>Pusblished At</th>
    <th>User ID</th>
    <th>Created At</th>
    <th>Updated At</th>

    <th>Actions</th>

</tr>

    <tr>
@foreach ($posts as $post )
@if($post['P_id'] == "0")
@continue
@endif

<td><a href="{{ Route('posts.show',['id'=>$post['P_id'] ]) }}">{{$post['title']}}</a></td>
<td>{{$post->user->name}}</td>
<td>{{$post['body']}}</td>
<td>{{$post['enabled']}}</td>
<td>{{$post['published_at']}}</td>
<td>{{$post['user_id']}}</td>
<td>{{$post['created_at']}}</td>
<td>{{$post['updated_at']}}</td>
<td><div class="row text-center">
    <div class="col-md-6 "><a href="{{ Route('posts.edit',['id'=>$post['P_id'] ]) }}" class="btn btn-primary">Edit</a>

        <form method="POST" action="{{ Route('posts.destroy',['id'=>$post['P_id'] ]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

</div>
</td>

</tr>


@endforeach




</table>


@endsection
