
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UFAZ GPA CALCULATOR</title>
    <link rel = "shortcut icon" type = "image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Codystar&family=Norican&family=Courgette&family=Raleway:ital,wght@1,600&family=Montserrat+Alternates:ital,wght@1,500&family=Righteous&family=Volkhov:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Arvo:wght@400;700&family=Bebas+Neue&family=Exo:wght@500&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Oswald&family=KoHo:ital,wght@1,600&family=Hammersmith+One&family=Poiret+One&family=Contrail+One&family=Courgette&family=Expletus+Sans:ital,wght@1,600&family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/choosestyle.css">

  <head>

    <body>
       <div class="container" id="container2" >
          <main>
            <center>
              <header>
                <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="navbar">
                  <div class="container-fluid" id="headercontainer">
                        <div class="text text-wrap" id="brandhead" style="font-family: 'Bebas Neue', cursive;">French-Azerbaijani University</div>
                          <ul class="navbar-nav" style="margin-right: 1rem;">
                            <li class="nav-item">
                              <a class="nav-link" style = "font-size: 1.5rem;font-family: 'Oswald', sans-serif;" href="{{route('index')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" style = "font-size: 1.5rem;font-family: 'Oswald', sans-serif;" href="{{route('about')}}">About</a>
                          </li>
                          </ul>
                  </div>
                </nav>
            </header>
            <div id="middle">
              <div id="ufaz">UFAZ GPA CALCULATOR</div>
              <div style="font-family: 'Hammersmith One', sans-serif;font-size:2rem;text-shadow:2px 2px rgb(173, 173, 173)">Choose your group</div>
              <form action="{{ route('evaluation') }}" method="post">
                @csrf
                <select class="form-select" id="brand" aria-label="Default select example" name="group_id">
                  @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                  @endforeach
                </select>
                <input type="submit" class="btn">
              </form>
            </div>
            </center>
          </main>
</div>

</div>
    </body>
</html>
