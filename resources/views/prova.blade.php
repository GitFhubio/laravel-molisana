@extends('layout.app')
@include('navbar')
@section('bootstrap')
  <!-- Boostrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
p,h2,h1{
  margin-bottom:0;
}
</style>

@endsection

<div class="container">
<div class="row">
<div style="border:1px solid red;" class="col-6 d-flex justify-content-between align-items-center">
<img src="http://via.placeholder.com/40" alt="">
<p>elleh</p>
</div>
<div style="border:1px solid red;" class="col-6 d-flex align-items-center justify-content-center">
<img src="http://via.placeholder.com/30" alt="">
</div>
</div>
{{-- parto da col sotto sm pero è sottinteso col-12 xs se non metto niente
poi la media prende da là in poi --}}
<div class="row">
<div style="border:1px solid black;" class="col-sm-2 col-lg-8 d-flex flex-column align-items-center">
<h1>ciao</h1>
<h2>come stai</h2>
</div>
<div style="border:1px solid black;" class="col-sm-3 col-lg-2">
true love waits
</div>
<div style="border:1px solid black;" class="col-sm-7 col-lg-2">
blablabla
</div>
</div>
</div>
