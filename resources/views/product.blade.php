@php
    // il data lo mettiamo qui inizialmente poi lo sposteremo in config
    if ($idProduct>1){
    $prev = $idProduct - 1 ;}
    else {
    $prev = count($array) - 1;}
    if ($idProduct< count($array) - 1){
    $post = $idProduct + 1 ;}
    else {
    $post = 1 ;}
@endphp

@extends('layout.app')
@section('content')
 {{-- $idProduct --}}
 <div class="layer-product">
   <div class="container">
 <div class="box-product">
<p class="title">{{ $array[$idProduct - 1 ]['titolo'] }}</p>
    <img src="{{$array[$idProduct - 1]['src-h']}}" alt="">
   <img src="{{$array[$idProduct - 1]['src-p']}}" alt="">
{{--non stampo come stringa ma come html con {!!  !!} --}}
 <div class="descrizione"><p>{!! $array[$idProduct - 1]['descrizione'] !!}</p></div>
</div>
 </div>
<a href="/product/{{$prev }}"><div class="angle-left">
<i class="fas fa-angle-left"></i>
</div></a>
<a href="/product/{{$post }}"><div class="angle-right">
<i class="fas fa-angle-right"></i>
</div></a>
  </div>

@endsection
