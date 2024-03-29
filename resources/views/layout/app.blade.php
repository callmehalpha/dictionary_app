<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Dictionaryapp">
    <meta name="description"
          content="A dictionary web application allows users to look up the definition of words. It typically includes a search bar where users can enter a word and receive the definition, pronunciation, and possibly related words or phrases. The application may also include features such as the ability to save words to a favorites list or view a history of recently searched words. Additionally, it may offer different languages or a thesaurus functionality. Overall, the main goal is to provide users with a quick and easy way to access dictionary information online.">
    <meta name="description"
          content="@yield('post_desc')">
    <meta name="keywords"
          content="dictionary, dictionary app, diction, words, phrase, find the meaning,@yield('meta')">
    <meta name="robots" content="index, follow">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Find meaning to your words | {{config('app.name')}}"/>
    <meta property="og:description"
          content="A dictionary web application allows users to look up the definition of words. It typically includes a search bar where users can enter a word and receive the definition, pronunciation, and possibly related words or phrases. The application may also include features such as the ability to save words to a favorites list or view a history of recently searched words. Additionally, it may offer different languages or a thesaurus functionality. Overall, the main goal is to provide users with a quick and easy way to access dictionary information online."/>
    <meta property="og:url" content="{{config('app_url')}}"/>
    <meta property="og:site_name"
          content="{{config('app.name')}}: A dictionary web application allows users to look up the definition of words. It typically includes a search bar where users can enter a word and receive the definition, pronunciation, and possibly related words or phrases. The application may also include features such as the ability to save words to a favorites list or view a history of recently searched words. Additionally, it may offer different languages or a thesaurus functionality. Overall, the main goal is to provide users with a quick and easy way to access dictionary information online."/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="Init Zero">
    <title>@yield('title')|{{config('app.name')}}</title>
    @stack('meta')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    @stack('styles')

</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>

            <div class="navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link link-sm">MEANING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-sm" href="{{route('blog')}}">BLOG</a>
                    </li>
                    {{--<div class="divide-line">|</div>
                    <li class="nav-item wordlinkk">
                        <a class="nav-link link-sm" href="#">WORD OF THE DAY</a>
                    </li>--}}
                </ul>
                <!-- <div class="user">
                    <a href="#"><i class="bi bi-person"></i></a>
                </div> -->
            </div>
        </div>
    </nav>
    @yield('search-bar')
</div>
@yield('content')
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">{{env('APP_NAME')}}</div>
                <div class="subscribe">
                    <h4>SIGN UP FOR A VOCABULARY BOOST IN YOUR EMAIL</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter your email address"
                               aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe
                            </button>
                        </div>
                    </div>
                    <div class="links"><a href="#">© @php echo date('Y') @endphp {{config('app_url')}}</a></div>

                </div>
                {{-- <div class="social d-flex">
                     <div class="socialicon"><a href="#"><i class="bi bi-facebook"></i></a></div>
                     <div class="socialicon"><a href="#"><i class="bi bi-twitter"></i></a></div>
                     <div class="socialicon"><a href="#"><i class="bi bi-instagram"></i></a></div>
                     <div class="socialicon"><a href="#"><i class="bi bi-youtube"></i></a></div>
                     <div class="socialicon"><a href="#"><i class="bi bi-pinterest"></i></a></div>
                 </div>--}}
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-3">
                {{--
                                <div class="footer-link">
                                    <div class="links"><a href="#">About</a></div>
                                    <div class="links"><a href="#">Careers</a></div>
                                    <div class="links"><a href="#">Contact us</a></div>
                                    <div class="links"><a href="#">Cookies, Terms, & Privacy</a></div>
                                    <div class="links"><a href="#">© @php echo date('Y') @endphp {{config('app_url')}}</a></div>
                                </div>
                --}}
            </div>
        </div>
    </div>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
@stack('scripts')
</html>
