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
@if ($idProduct>1)
  <a href="/product/{{ $idProduct - 1 }}"><div class="angle-left">
  <i class="fas fa-angle-left"></i>
  </div></a>
@else
  <a href="/product/{{ count($array) - 1 }}"><div class="angle-left">
  <i class="fas fa-angle-left"></i>
</div></a>
@endif
@if ($idProduct< count($array) - 1)
<a href="/product/{{$idProduct + 1 }}"><div class="angle-right">
<i class="fas fa-angle-right"></i>
</div></a>
@else
  <a href="/product/{{1}}"><div class="angle-right">
  <i class="fas fa-angle-right"></i>
  </div></a>
@endif

  </div>
@endsection

{{-- oppure direttamente in html --}}
{{-- @if (($idProduct) == count($array))
  <a href="/product/1">
@else
  <a href="/product/{{$idProduct + 1}}">
@endif
  <i class="fas fa-chevron-right"></i>
</a> --}}
