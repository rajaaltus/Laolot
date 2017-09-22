@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading ">Users List<a type="button" class="btn btn-success btn-sm pull-right" href="/users/create">Create New user</a></div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th>User Name</th><th>Email id</th><th>Joined at</th><th>Actions</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td><a type="button" class="btn btn-sm btn-primary pull-left" href="/users/{{$user->id}}">View</a></td>
                        <td><a type="button" class="btn btn-sm btn-success pull-left" href="/users/{{$user->id}}/edit">Edit</a></td>
                        <td> @if ($user->id != Auth::id())   
                            <form action="/users/{{$user->id}}"  method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                   
                                <input type="submit" class="btn btn-sm btn-danger pull-left" value="Delete"></td>
                            </form>
                            @endif
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{ $users->links() }}

                    
            </div>
        </div>
        <div class="panel-footer"><a href="/">Home</a></div>
    </div>
</div>
@endsection