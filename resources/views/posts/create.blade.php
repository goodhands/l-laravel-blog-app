@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">
    <h2>Create a post</h2>
    @include('layouts.error')
    <form method="post" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="pull-right btn btn-primary">Sign in</button>
    </form>
</div>
@endsection