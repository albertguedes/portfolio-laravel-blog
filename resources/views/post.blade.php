@extends('layouts.main')
@section('title', strtoupper($post->title))
@section('content')
<div class="row" >
    <div class="col-12" >
        <h1 class="text-capitalize pt-3" >{{ $post->title }}</h1>
        <h6 class="text-black-50" >{{ $post->created_at->format("Y M d") }}</h6>
    </div>
    <div class="col-12 pt-3" >
        {{ $post->content }}
    </div>
</div>
@endsection