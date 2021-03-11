<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="wrapper">
<div class="header">
<img class="logo" src="https://via.placeholder.com/90" alt="">
<ul>
  <li>Home</li>
  <li>Products</li>
  <li>News</li>
</ul>
</div>

<div class="main">
    @yield('content')
</div>

<div class="footer">
<div class="footer-left">
<img src="https://via.placeholder.com/90" alt="">
<ul>
  <li>Ragione Sociale:La Molisana SPA</li>
    <li>Sede legale</li>
      <li>efeff</li>
        <li>frffr</li>
        <li>frfrf</li>
          <li>frfrf</li>
            <li>frfrfr</li>
              <li>frfrf</li>
                <li>rffrfrfr</li>
</ul>
</div>
<div class="footer-center">
  <h1>PASTIFICIO</h1>
<ul>
<li>Il pastificio</li>
<li>ffrfrfr</li>
<li>rffr</li>
<li>frfr</li>
<li>frfrf</li>
<li>frfr</li>
<li>frfr</li>
<li>frfrfrfr</li>
</ul>
<h1>PRODOTTI</h1>
<ul>
<li>Le classiche</li>
<li>Le integrali</li>
<li>Le speciali</li>
<li>Le biologiche</li>
</ul>
</div>
<div class="footer-right">
<ul>
<li>Collezione da chef</li>
<li>Grandi cucine</li>
<li>Biologiche</li>
<li>Quadrate</li>
</ul>
</div>
</div>
</div>
</body>
</html>
