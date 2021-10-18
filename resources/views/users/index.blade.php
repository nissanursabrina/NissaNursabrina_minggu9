@extends('layouts.app') 
   
@section('content') 
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header">{{ __('USER DATA') }}</div> 
   
                <div class="card-body"> 
                    @if (session('status')) 
                        <div class="alert alert-success" role="alert"> 
                            {{ session('status') }} 
                        </div> 
                    @endif 
  
                    <form class="form-inline my-2 my-lg-0" method="GET" action="/users">
                    <input name="cari" class="form-control mr-sm-2" type="search" placeholder="search" aria-label="Search">
                        <button type="submit" name="delete" class="btn btn-outline-success my-2 my-sm-0">Search</button>
                    </form>

                    <table class="table table-responsive table-striped"> 
                    <a href="/users/create" class="btn btn-primary">Add Data</a> 
                    <table class="table table-responsive table-striped"> 
                        <thead> 
                            <tr> 
                                <th>Username</th>  
                                <th>Name</th> 
                                <th>Email</th>
                                <th>Password</th>
                                <th>Created At</th>
                                <th></th><th></th>
                                </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($user as $u) 
                            <tr> 
                                <td>{{ $u->username }}</td> 
                                <td>{{ $u->name }}</td> 
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->password }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td>
                                <form action="/users/{{$u->id}}" method="post">
                                    <a href="/users/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    </form>
                                </td>
                                <td>
                                <form action="/users/{{$u->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection 