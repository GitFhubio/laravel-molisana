<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Font Awesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="wrapper">
<div class="header">
<img class="logo" src="{{asset('img/logo2.png')}}" alt="">
<ul>
<li><a href="/homepage">Home</a></li>
<li><a href="/homepage">Prodotti</a></li>
  <li><a href="/homepage">News</a></li>
</ul>
</div>

<div class="main">
    @yield('content')
  </div>

<div style="background-image:url({{asset('img/footer.jpg')}})" class="footer">
  <div class="container">
<div class="container-left">
<img src="{{asset('img/logo2.png')}}" alt="">
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
