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
                            @endforeach 
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection 