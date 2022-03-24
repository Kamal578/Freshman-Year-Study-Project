<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UFAZ GPA CALCULATOR</title>
    <link rel = "shortcut icon" type = "image/x-icon" href="css/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Codystar&family=Oleo+Script&family=Amita&family=Leckerli+One&family=Exo:ital,wght@0,400;1,500&family=Patua+One&family=Kaushan+Script&family=Recursive&family=Montserrat&family=Raleway:ital,wght@1,600&family=Montserrat+Alternates:ital,wght@1,500&family=Righteous&family=Volkhov:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&family=Arvo:wght@400;700&family=Lobster+Two&family=Bebas+Neue&family=Exo:wght@500&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/WELCOMESTYLE.css">

<head>

    <body>
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="text text-wrap" id="brand" style="font-family: 'Bebas Neue', cursive;">French-Azerbaijani University</div>
                      <ul class="navbar-nav" style="margin-right: 1rem;">
                        <li class="nav-item">
                            <a class="nav-link" style = "font-size: 1.5rem;font-family: 'Oswald', sans-serif;" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style = "font-size: 1.5rem;font-family: 'Oswald', sans-serif;" " href="{{ route('about') }}">About</a>
                        </li>
                      </ul>
                </div>
            </nav>
        </header>
        <main>
                <div class="position-relative " id="welcome">
                    <div class="text-black" id="WELCOME" style="font-family: 'Montserrat', cursive;text-align: center; text-shadow: 2px 2px #808080; font-weight: bold">Welcome</div>
                    <div  class="text-black" style="text-align: center;font-family: 'Montserrat', cursive; text-shadow: 2px 2px #808080;font-weight: bold">to the</div>
                    <div class="text-black" style = "font-family: 'Montserrat', cursive; text-shadow: 2px 2px #808080; font-weight: bold"> UFAZ GPA Calculator</div>
                    <a class="btn btn-lg" style = "font-family: 'Montserrat'"href="{{ route('choosetry') }}" role="button">Get Started</a>
                </div>

        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="text-wrap fs-4" style="font-family: 'Montserrat', cursive; font-weight: 600;text-align: center;">
                        Contact us
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <span style="font-family: 'Montserrat', cursive;font-size:1.5rem; font-weight: 600;">E-mail</span>
                        <div>
                            <i class="fa fa-envelope" aria-hidden="true" >
                                <span style="font-size:1.1rem;font-family: 'Montserrat', cursive;">kamal.ahmadov1@ufaz.az</span>
                            </i>

                            <i class="fa fa-envelope" aria-hidden="true" id ="member" style="padding-left:1rem;">
                                <span style="font-size:1.1rem;font-family: 'Montserrat', cursive;">kamal.alasgarli@ufaz.az</span>
                            </i>
                            <br>
                            <i class="fa fa-envelope" aria-hidden="true" >
                                <span style="font-size:1.1rem;font-family: 'Montserrat', cursive;">shams.gadirli@ufaz.az</span>
                            </i>
                        </div>
                    </div>


                    <div class="col">
                        <span style="font-family: 'Montserrat', cursive;font-size:1.5rem; font-weight: 600;">Follow</span>
                        <div><a id = "follow"><i class="fa fa-instagram" aria-hidden="true"><span style="font-size:1.1rem;font-family: 'Montserrat', cursive;"> Instagram </span></i></a></div>
                        <div><a id = "follow"><i class="fa fa-facebook" aria-hidden="true"> <span style="font-size:1.1rem;font-family: 'Montserrat', cursive;"> Facebook </span></i></a></div>
                        <div><a id = "follow"><i class="fa fa-telegram" aria-hidden="true"> <span style="font-size:1.1rem;font-family: 'Montserrat', cursive;"> Telegram </span></i></a></div>

                    </div>

                </div>

              </div>


        </footer>
    </body>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <script src='welcome.js' type="text/javascript"></script>
