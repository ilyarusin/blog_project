<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.index') }}">Блог</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">Категории</a>
                        </li>

                        <li class="nav-item">
                            @auth()
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                            @endauth
                            @guest()
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Войти</a>
                            @endguest
                        </li>

                        <li class="nav-item">
                            @auth()
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn btn-outline-primary" value="Выйти">
                                </form>
                            @endauth
                        </li>


                    </ul>

                </div>
            </nav>
        </div>
    </header>

    @yield('content')


    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a href="index.html" class="footer-brand-wrapper">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                    </a>
                    <p class="contact-details">hello@edica.com</p>
                    <p class="contact-details">+23 3000 000 00</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-behance"></i></a>
                        <a href="#!"><i class="fab fa-dribbble"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">Company</a>
                        <a href="#!" class="nav-link">Android App</a>
                        <a href="#!" class="nav-link">ios App</a>
                        <a href="#!" class="nav-link">Blog</a>
                        <a href="#!" class="nav-link">Partners</a>
                        <a href="#!" class="nav-link">Careers</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">FAQ</a>
                        <a href="#!" class="nav-link">Reporting</a>
                        <a href="#!" class="nav-link">Block Storage</a>
                        <a href="#!" class="nav-link">Tools & Integrations</a>
                        <a href="#!" class="nav-link">API</a>
                        <a href="#!" class="nav-link">Pricing</a>
                    </nav>
                </div>

            </div>
            <div class="footer-bottom-content">
                <nav class="nav footer-bottom-nav">
                    <a href="#!">Privacy & Policy</a>
                    <a href="#!">Terms</a>
                    <a href="#!">Site Map</a>
                </nav>
                <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank"
                        rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>