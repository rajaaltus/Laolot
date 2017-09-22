@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-success">
            <div class="panel-heading">User Profile 
                   
                
            </div>

            <div class="panel-body text-center">
                <h1>{{ $user->username }}</h1>
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px;height:150px;border-radius:50%;margin-right:15px;" />
                <h3>{{ $user->email }}</h3>
                <h5>User Created: {{ $user->created_at->diffForHumans() }}</h5>  
                <h5><a class="btn btn-primary" href="/users/{{ $user->id }}/edit">Edit</a></h5>
                <h5><a class="btn btn-sm btn-success" href="/users">Back</a></h5>

            </div>      
        </div> 
     </div> 
</div>
</div>   
        
@endsection