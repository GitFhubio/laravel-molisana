@extends('layout.app')
@section('content')
<div style="background-image:url({{asset('img/mainback.jpg')}})" class="layout-homepage">
<div class="container">
  @foreach ($array as $key=>$pasta)
    <a href="/product/{{$key}}"><div style="background-image:url({{$pasta['src']}})" class="box">
      {{-- {{$pasta['titolo']}}
        {{$pasta['src']}} --}}
    </div></a>
  @endforeach

</div>
</div>
@endsection
