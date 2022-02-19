@extends('layouts.admin')
@section('title', "Delete '".ucwords($post->title)."'" )
@section('content')
<div class="row" >
    <div class="col-12" >
        @include('partials.admin.tabs',compact('routes'))
    </div>
    <div class="col-12 pt-5" >
        <h1 class="text-capitalize" >Delete '<em>{{ $post->title }}</em>'</h1>
    </div>
    <div class="col-12 pt-5" >
        <p class="text-center" >You are shure that want delete post '<em>{{ $post->title }}</em>' ?</p>
        <div class="row justify-content-center" >
            <div class="col-1" >
                <form action="{{ route('posts.destroy',compact('post')) }}?answer=1" method="POST" >
                    @csrf
                    <input type="hidden" name="_method" value="DELETE" >
                    <button class="btn btn-danger" >YES</button>
                </form>
            </div>
            <div class="col-1" >
                <a class="btn btn-success" href="{{ route('posts.show',compact('post')) }}" >NO</a>
            </div>
        </div>
    </div>
</div>
@endsection