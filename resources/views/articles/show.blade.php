@extends('layout')
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{$article->title}}</h2>
                <span class="byline">{{$article->except}}</span> </div>
            <p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{$article->body}}</p>
        </div>
        
        </div>
    </div>
</div>
@endsection