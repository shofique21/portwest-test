<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
:root {
    --level-1: #8dccad;
    --level-2: #f5cc7f;
    --level-3: #7b9fe0;
    --level-4: #f27c8d;
    --black: black;
  }
  
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  ol {
    list-style: none;
  }
  
  body {
    margin: 50px 0 100px;
    text-align: center;
    font-family: "Inter", sans-serif;
  }
  
  .container {
    max-width: 1000px;
    padding: 0 10px;
    margin: 0 auto;
  }
  
  .rectangle {
    position: relative;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
  }
  
  
  /* LEVEL-1 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .level-1 {
    width: 50%;
    margin: 0 auto 40px;
    background: var(--level-1);
  }
  
  .level-1::before {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 20px;
    background: var(--black);
  }
  
  
  /* LEVEL-2 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .level-2-wrapper {
    position: relative;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }
  
  .level-2-wrapper::before {
    content: "";
    position: absolute;
    top: -20px;
    left: 25%;
    width: 50%;
    height: 2px;
    background: var(--black);
  }
  
  .level-2-wrapper::after {
    display: none;
    content: "";
    position: absolute;
    left: -20px;
    bottom: -20px;
    width: calc(100% + 20px);
    height: 2px;
    background: var(--black);
  }
  
  .level-2-wrapper li {
    position: relative;
  }
  
  .level-2-wrapper > li::before {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 20px;
    background: var(--black);
  }
  
  .level-2 {
    width: 70%;
    margin: 0 auto 40px;
    background: var(--level-2);
  }
  
  .level-2::before {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 20px;
    background: var(--black);
  }
  
  .level-2::after {
    display: none;
    content: "";
    position: absolute;
    top: 50%;
    left: 0%;
    transform: translate(-100%, -50%);
    width: 20px;
    height: 2px;
    background: var(--black);
  }
  
  
  /* LEVEL-3 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .level-3-wrapper {
    position: relative;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-column-gap: 20px;
    width: 90%;
    margin: 0 auto;
  }
  
  .level-3-wrapper::before {
    content: "";
    position: absolute;
    top: -20px;
    left: calc(25% - 5px);
    width: calc(50% + 10px);
    height: 2px;
    background: var(--black);
  }
  
  .level-3-wrapper > li::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -100%);
    width: 2px;
    height: 20px;
    background: var(--black);
  }
  
  .level-3 {
    margin-bottom: 20px;
    background: var(--level-3);
  }
  
  
  /* LEVEL-4 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .level-4-wrapper {
    position: relative;
    width: 80%;
    margin-left: auto;
  }
  
  .level-4-wrapper::before {
    content: "";
    position: absolute;
    top: -20px;
    left: -20px;
    width: 2px;
    height: calc(100% + 20px);
    background: var(--black);
  }
  
  .level-4-wrapper li + li {
    margin-top: 20px;
  }
  
  .level-4 {
    font-weight: normal;
    background: var(--level-4);
  }
  
  .level-4::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0%;
    transform: translate(-100%, -50%);
    width: 20px;
    height: 2px;
    background: var(--black);
  }
  
  
  /* MQ STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  @media screen and (max-width: 700px) {
    .rectangle {
      padding: 20px 10px;
    }
  
    .level-1,
    .level-2 {
      width: 100%;
    }
  
    .level-1 {
      margin-bottom: 20px;
    }
  
    .level-1::before,
    .level-2-wrapper > li::before {
      display: none;
    }
    
    .level-2-wrapper,
    .level-2-wrapper::after,
    .level-2::after {
      display: block;
    }
  
    .level-2-wrapper {
      width: 90%;
      margin-left: 10%;
    }
  
    .level-2-wrapper::before {
      left: -20px;
      width: 2px;
      height: calc(100% + 40px);
    }
  
    .level-2-wrapper > li:not(:first-child) {
      margin-top: 50px;
    }
  }
  
  
  /* FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-footer {
    position: fixed;
    right: 0;
    bottom: 20px;
    display: flex;
    align-items: center;
    padding: 5px;
  }
  
  .page-footer a {
    margin-left: 4px;
  }
  
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
