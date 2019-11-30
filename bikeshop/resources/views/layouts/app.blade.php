<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dviraciai</title>

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <!-- fonts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- boostrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

    <section class="navbar-spalva">
    <div >
      <nav class=" navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#">Dviračiai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link  {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dvitatis') ? 'active' : '' }}" href="/dviratis">Dviračiai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Detaliu sarasas.html">Detalės</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Prisijungti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="regstracija.html">Registruotis</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </section>
  @include('inc.messeges')
      @yield('content')

    <section id="footer">
      <i class="footer-icon fab fa-facebook-f"></i>
      <i class="footer-icon fab fa-twitter"></i>
      <i class="footer-icon far fa-envelope"></i>
      <p>© Copyright 2019 | Aleksandr Naruševič IFF 7/3</p>
    </section>
  </body>


</html>
