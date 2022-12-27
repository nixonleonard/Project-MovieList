<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getlocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
    integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid mx-5">
            <img src="storage/images/MovieList.png" width="100" height="27" alt="">
            <form class="d-flex" role="search">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    @auth

                        @if (Auth::user()->is_admin == 'admin')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="#">Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="#">Actors</a>
                                </li>
                                <li class="nav-item dropstart">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white">
                                        <i class="bi bi-person-circle" style="color: white"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Profile</a></li>
                                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    </ul>
                                  </li>
                            </ul>
                        @endif

                        @if (Auth::user()->is_admin == 'member')
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="#">Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="#">Actors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="#">My WatchList</a>
                                </li>
                                <li class="nav-item dropstart">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white">
                                        <i class="bi bi-person-circle" style="color: white"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Profile</a></li>
                                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    </ul>
                                  </li>
                            </ul>
                        @endif

                        @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" href="#">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-light" href="#">Actors</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="btn btn-primary" href="/register">Register</a>
                              </li>
                              <li class="nav-item">
                                <a class="btn btn-outline-primary" href="/login">Sign In</a>
                              </li>

                        </ul>
                    @endauth
            </form>
          </div>
        </div>
      </nav>
      <div class="divContent" style="height: 1000px; background-color:#000000;">
        @yield('content')
    </div>

    <footer class="bg-dark text-center">
        <img src="storage/images/MovieList.png" width="170" height="50" alt="">
        <div class="text-light p-2">
            <img src="storage/images/MovieList.png" width="70" height="17" alt="">
            is a website that contains list of movie</div>
            <button type="button" class="btn btn-secondary rounded-circle">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-secondary rounded-circle">
                <i class="fab fa-instagram"></i>
              </button>
              <button type="button" class="btn btn-secondary rounded-circle">
                <i class="fab fa-facebook"></i>
              </button>
              <button type="button" class="btn btn-secondary rounded-circle">
                <i class="fab fa-reddit"></i>
              </button>
              <button type="button" class="btn btn-secondary rounded-circle">
                <i class="fab fa-youtube"></i>
              </button>
        </div>
        <div class="text-light p-2">Privacy  |  Terms of Service  |  Contact Us  |  About Us</div>
        <div class="text-center text-white py-2">
            Copyright © 2021
            <img src="storage/images/MovieList.png" width="70" height="17" alt="">
            All Right Reserved
        </div>
    </footer>
</body>
</html>
