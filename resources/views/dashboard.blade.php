@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h3>Your Blog Posts</h3>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <a href="posts/create" class="btn btn-primary btn-block">Create Posts</a>
                        </div>
                    </div>
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection