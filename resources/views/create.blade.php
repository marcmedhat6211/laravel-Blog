@extends('layouts.base')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal" method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm" for="title">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" placeholder="Enter post's title" name="title" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm" for="pwd">Description</label>
                <div class="col-sm-10">          
                    <textarea class="form-control" rows="5" id="description" placeholder="Enter post's description" required></textarea>
                </div>
            </div>
            <label class="control-label col-sm" for="users">Users</label>
            <select class="form-control" id="users">
            @foreach($users as $user)
                <option value={{$user->id}}>{{$user->name}}</option>
            @endforeach
            </select>
            <br>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <style>
    #users{
        width:375px;
        margin:left;
    }
    </style>
@endsection