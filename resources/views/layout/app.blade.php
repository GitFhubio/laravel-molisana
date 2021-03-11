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
  <div class="container">
    @yield('content')
  </div>
</div>

<div class="footer">
  <div class="container">
<div class="container-left">
<img src="https://via.placeholder.com/90" alt="">
<ul>
  <li>Ragione Sociale:La Molisana S.P.A</li>
    <li>Sede legale: Contrada Colle delle Alpi,100/A</li>
      <li>86100-Campobasso(CB)</li>
        <li>Pec:lamolisana@pec.it</li>
        <li>Tel:+39 0874 4981</li>
          <li>Fax: +39 0874 629584</li>
            <li>info@lamolisana.it(per segnalazioni degli utenti)</li>
              <li>commerciale@lamolisana.it</li>
                <li>export@lamolisana.it</li>
                <li>numero verde 8008198081</li>
                <li>telefono 3801292455</li>
</ul>
</div>
<div class="container-center">
  <h3>PASTIFICIO</h3>
<ul>
<li>Il pastificio</li>
<li>Grano decorticato a pietra</li>
<li>Il Molise c'è</li>
<li>Filiera Integrata</li>
<li>100 anni di pasta</li>
<li>Sartoria della pasta</li>
<li>Spaghetto Quadrato</li>
<li>Le persone</li>
</ul>
<h3>PRODOTTI</h3>
<ul>
<li>Le classiche</li>
<li>Le integrali</li>
<li>Le speciali</li>
<li>Le biologiche</li>
<li>Le gluten-Free</li>
<li>Le Semole</li>
<li>Le Extra di Lusso</li>
</ul>
</div>
<div class="container-right">
  <h3>COLLEZIONE DA CHEF</h3>
<ul>
<li>Collezione da chef</li>
<li>Grandi cucine</li>
<li>Biologiche</li>
<li>Quadrate</li>
</ul>
</div>
</div>
</div>
</div>
</body>
</html>
