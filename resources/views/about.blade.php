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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Francois+One&family=Recursive:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Codystar&family=Carter+One&family=Aclonica&family=Merienda&family=Comfortaa:wght@600&family=Mate+SC&family=Oleo+Script&family=Amita&family=Acme&family=Exo+2:wght@600&family=Recursive:wght@600&family=Leckerli+One&family=Exo:ital,wght@0,400;1,500&family=Patua+One&family=Kaushan+Script&family=Recursive&family=Courgette&family=Raleway:ital,wght@1,600&family=Montserrat+Alternates:ital,wght@1,500&family=Righteous&family=Volkhov:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&family=Arvo:wght@400;700&family=Lobster+Two&family=Bebas+Neue&family=Exo:wght@500&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/info2style2.css">
    
<head>

    <body>
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="text text-wrap" id="brand" style="font-family: 'Bebas Neue', cursive;">French-Azerbaijani University</div>
                      <ul class="navbar-nav" style="margin-right: 1rem;">
                        <li class="nav-item">
                            <a class="nav-link" style = "font-family: 'Oswald', sans-serif;" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style = "font-family: 'Oswald', sans-serif;" href="{{ route('about') }}">About</a>
                        </li>
                      </ul>
                </div>
                
            </nav>
        </header>
        <main>
            <div class="container" id="maincontainer">
                <div class="row" id="firstrow">
                  <div class="col">
                    <div class="container" id="text1">
                      The UFAZ GPA CALCULATOR was made by 
                      <br>Ahmadov Kamal 
                      <br>Alasgarli Kamal
                      <br>Gadirli Shams
                      <!--<br>Afandiyev Timur-->
                      <br>Supervisor Javid Khalilov
                      <br>as a project for the L0 Study Project course.
                  </div>
                  </div>
                  <div class="col" id="colalign">
                    <div class="container" id="text2">
                       The purpose of the application is to provide UFAZ students with a quick and easy way to determine their GPAs before official results are released. To use the application select the necessary year and get your average score!
                    </div>
                  </div>
                </div>
                <div class="row" id="mainrow">
                  <div class="col">
                    <div class="container-md">
                        <img src="css/cat.jpeg" width="50%" alt="pic here" class="round"> 
                        <div  id="name">Shams Gadirli</div>
                        <div>CS-20</div> 
                        <div id="frontend">Frontend Developer</div>                      
                    </div>
                  </div>
                  <div class="col">
                    <div class="container-md">
                        <img src="css/cat.jpeg" width="50%" alt="pic here" class="round">  
                        <div id="name">Kamal Ahmadov</div>
                        <div>CS-20</div>  
                        <div id="backend">Full-Stack Developer</div>                    
                    </div>
                  </div>
                  <div class="col">
                    <div class="container-md">
                        <img src="css/cat.jpeg" width="50%" alt="pic here" class="round">      
                        <div id="name">Kamal Alasgarli</div>
                        <div>CS-20</div>       
                        <div id="backend">Backend Developer</div>           
                    </div>
                  </div>
                </div>
              </div>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div id="fontl" class="text-wrap" style="font-family: 'Montserrat', cursive; font-weight: 600;text-align: center;">
                        Contact us
                    </div>
                </div>

                <div class="row">
                    <div class="col"  id="footercol" >
                        <span id="fontl" style="font-family: 'Montserrat', cursive; font-weight: 600;">E-mail</span>
                        <div>
                            <i class="fa fa-envelope" aria-hidden="true">
                                <span id="member" style="font-family: 'Montserrat', cursive;margin-right: 1rem;">kamal.ahmadov1@ufaz.az</span>
                            </i>

                            <i class="fa fa-envelope" aria-hidden="true">
                                <span style="font-family: 'Montserrat', cursive;">kamal.alasgarli@ufaz.az</span>
                            </i>
                            <br>
                            <i class="fa fa-envelope" aria-hidden="true">
                                <span id="member" style="font-family: 'Montserrat', cursive;margin-right: 1rem;">shams.gadirli@ufaz.az</span>
                            </i>
                        </div>
                    </div>


                    <div id="footercol" class="col">
                        <span id="fontl" style="font-family: 'Montserrat', cursive; font-weight: 600;">Follow</span>
                        <div><a id = "follow"><i class="fa fa-instagram" aria-hidden="true"><span style="font-family: 'Montserrat', cursive;"> Instagram </span></i></a></div>
                        <div><a id = "follow"><i class="fa fa-facebook" aria-hidden="true"> <span style="font-family: 'Montserrat', cursive;"> Facebook </span></i></a></div>
                        <div><a id = "follow"><i class="fa fa-telegram" aria-hidden="true"> <span style="font-family: 'Montserrat', cursive;"> Telegram </span></i></a></div>

                    </div>

                </div>

              </div>

       
        </footer>
    </body>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>

</html>
