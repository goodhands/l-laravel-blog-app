@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">
    <h2>{{ $posts->title }}</h2>
    <hr>
    {{ $posts->body }}
    <hr>
    {{-- Date Written: {{ $posts->created_at }}  --}}
    <br>
    Comments {{ count($posts->comments) }}
    <hr>

    {{-- Comments --}}

    <div class="comment">
        <ul>
        @foreach($posts->comments as $comment)
            <li>{{ $comment->body }} &nbsp; - &nbsp; {{ $comment->created_at->diffForHumans() }} </li>
        @endforeach
        </ul>
    </div>

    {{-- Add a comment --}}

    <hr>

    <div class="card">
        <div class="card-block">
        @include('layouts.error')
        <form method="post" action="/posts/{{ $posts->id }}/comment">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="pull-right btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection