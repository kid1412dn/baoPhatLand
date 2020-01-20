@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')

<div id="wrapper">

    <div id="page" class="container">
       <h1 class="heading has-text-weight-bold is-size-4"> Update Articles </h1>  
       <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
           <div class="field">
                <label class="label" for="title"> Title </label>
                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                </div>
           </div>

           <div class="field">
                <label class="label" for="except"> Except </label>
                <div class="control">
                    <textarea class="input" type="text" name="except" id="except" >{{$article->except}}</textarea>
                </div>
           </div>

           <div class="field">
                <label class="label" for="body"> Body </label>
                <div class="control">
                    <textarea class="input" type="text" name="body" id="body">{{$article->body}}</textarea> 
                </div>
           </div>

           <div class="field is-grouped">
               <div class="control">
                    <button class="button is-link" type="submit"> Submit </button>
                </div>
            </div>
       </form>

       <form method="POST" action="/articles/{{$article->id}}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Delete</button>
</form>
    </div>
</div>
@endsection