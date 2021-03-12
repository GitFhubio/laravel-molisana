@extends('layout.app')
@section('content')
<div style="background-image:url({{asset('img/news.jpg')}})" class="layout-news">
<div class="container">
  <div class="news">

  @foreach ($array as $news)
      <a href="#" class="box-news" ><p> {{$news['text']}}</p>
        <img src="{{$news['img']}}" alt="">
         <button type="button" name="button">Read more</button>
      </a>
    @endforeach
  </div>

  </div>
</div>
</div>
@endsection
