<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UFAZ GPA CALCULATOR</title>
    <link rel = "shortcut icon" type = "image/x-icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Codystar&family=Oleo+Script&family=Amita&family=Leckerli+One&family=Exo:ital,wght@0,400;1,500&family=Patua+One&family=Kaushan+Script&family=Recursive&family=Courgette&family=Raleway:ital,wght@1,600&family=Montserrat+Alternates:ital,wght@1,500&family=Righteous&family=Volkhov:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&family=Arvo:wght@400;700&family=Lobster+Two&family=Bebas+Neue&family=Exo:wght@500&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Evaluation.css">
    <title>L0S1</title>
</head>
<body>
<main>
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
    <div id="maincontainer" class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Subject</th>
                <th scope="col">Coef.Unit</th>
                <th scope="col">Grade 1</th>
                <th scope="col">Grade 2</th>
                <th scope="col">Grade 3</th>
                <th scope="col">Subject Average</th>
            </tr>
            </thead>

            <tbody id="output_div">
            @foreach ($subjects as $subject)
                <tr id = "{{$subject->id}}">
                    <td>{{$subject->subject_name}}</td>
                    <td>{{$subject->sum}}</td>
                    <td>
                        <div class="input-group" id="input1">
                            <span class="input-group-text fw-bold" id = "coeff">{{$subject->first_exam_coef}}</span>
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group" id="input2">
                            <span class="input-group-text fw-bold" id = "coeff" >{{$subject->second_exam_coef}}</span>
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group" id="input3">
                            <span class="input-group-text fw-bold" id = "coeff">{{$subject->third_exam_coef}}</span>
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="alert alert-dark text-center text-black-100" role="alert" id="subj">
                            <p id="subject-average">
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="container " id ="overall" >
            <p>
                Your Overall Score:
            </p>
            <center>
                <p id="score"></p>
            </center>
        </div>
        <div id="buttons" >
            <a id = "back" class="btn btn-lg" href="{{ route('choosetry') }}" style = "background-color: rgb(103, 165, 157, 0.575);"role="button">Back</a>
            <button class="btn btn-lg"  onclick = "calculation()"  type="button" style = "background-color: rgb(103, 165, 157, 0.575)">Evaluate</button>
        </div>
    </div>

</main>


<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
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
<script type="text/javascript" src="{{ URL::asset('js/calculation.js') }}"></script>
</body>
</html>
