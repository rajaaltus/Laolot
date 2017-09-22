@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-success">
            <div class="panel-heading">User Profile <a class="button btn-sm btn-success pull-right" href="/users">Back</a>
                   
                
            </div>

            <div class="panel-body">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px;height:150px;border-radius:50%;float:left;margin-right:15px;" />
                <h2>{{ $user->username }}</h2>
                
                <h5>User Created: {{ $user->created_at->diffForHumans() }}</h5>  
                <h5>Email: {{ $user->email }}</h5>
                <form enctype="multipart/form-data" action="/users/{{$user->id}}" method="POST">
                    {{ method_field('PUT') }}
                    <label>Update Profile's Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-sm btn-primary" value="update">
                </form>

            <div class="clearfix"></div>

            </div>      
        </div> 
     </div> 
</div>
</div>   
        
@endsection