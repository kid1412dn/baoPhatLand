@extends('layout')
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
<ul class="style1">
                @foreach ($articles as $article)
                <li class="first">
                    <h2>
                        <a href= "articles/{{$article->id}}"> {{$article->title}} </a>
                    </h2>
                    <p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> <a href="#">{{$article->except}}</a></p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection