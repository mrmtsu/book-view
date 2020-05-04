@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')

<div class="container" style="width:500px; height:500px;">
  @foreach($articles as $article)  
    @include('articles.card')
  @endforeach 
</div>

@endsection