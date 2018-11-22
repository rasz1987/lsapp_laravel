@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-2">
            <h1>Posts</h1>
        </div>
    </div>
    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%; " src="storage/cover_images/{{$post->cover_image}}" />
                    </div>
                    <div class="col-md-8 col-sm-8 mt-3">
                        <h3><a href="/lsapp/public/posts/{{$post->id}}" >{{$post->title}}</a></h3>
                        <small>write on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>

            

            
        @endforeach
        <!--<div class="row justify-content-center">
            <div class="col-4 ">
                $posts->links()}}
            </div>
        </div>
        -->
            
        </div>

        
        
    @else
        <p>No posts found</p>
    @endif
</div>
@endsection