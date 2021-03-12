@extends('layout.app')
@section('content')
<div style="background-image:url({{asset('img/mainback.jpg')}})" class="layout-homepage">
<div class="container">
  <h1>Le lunghe</h1>
  <div class="pasta-lunga">

  @foreach ($array as $key=>$pasta)
    @if ($pasta['tipo'] == "lunga" )
      <a class="box-pasta" href="/product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="box">
        {{-- {{$pasta['titolo']}}
          {{$pasta['src']}} --}}
      </a>
    @endif
    @endforeach
  </div>
      <h1>Le corte</h1>
<div class="pasta-corta">
    @foreach ($array as $key=>$pasta)
    @if ($pasta['tipo'] == "corta" )
      <a class="box-pasta" href="/product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="box">
        {{-- {{$pasta['titolo']}}
          {{$pasta['src']}} --}}
      </a>
    @endif
    @endforeach
  </div>
    <h1>Le cortissime</h1>
    <div class="pasta-cortissima">
    @foreach ($array as $key=>$pasta)
    @if ($pasta['tipo'] == "cortissima" )
      <a  class="box-pasta" href="/product/{{$key + 1}}"><img src="{{$pasta['src']}}" class="box">
        {{-- {{$pasta['titolo']}}
          {{$pasta['src']}} --}}
    </a>
    @endif

  @endforeach
  </div>
</div>
</div>
@endsection
