<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Application')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Bootstrap CSS -->
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        body {
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            box-sizing: border-box;
            font-weight: 400;
            font-style: normal;
            background-color: rgb(255, 255, 255);
            background-image: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhRov9sJhisgJJAnuECBU5arHUUUadM8duVcKjbD3pJtRQPPvze-sRUKcI9Fjo7deWuF_usDtJdrnoIOMxd20d9JNl2EQsO3vq8fhBpT8jvc_3KcA4wakV-DgEefDU9t-Vc-HGM93soNYqWkl3cLwh6CSZXvO51O7pEh77F1W0QWXv9MJrHLZkliYPyi5ro/s1920/Fondo%20cpu%20degrade%201.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #ffffff;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(1, 1, 1, 0.5); 
            padding: 10px 10%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }

        .logo {
            font-size: 25px;
            text-transform: uppercase;
            color: #ffffff;
            font-weight: 700;
        }

        .navigation ul {
            list-style: none;
        }

        .header .navigation ul li {
            float: left;
            position: relative;
        }

        .header .navigation ul li a {
            font-size: 18px;
            color: #ffffff;
            text-decoration: none;
            padding: 20px;
            display: block;
            transition: all .2s ease;
        }

        .header .navigation ul li a:hover {
            background-color: rgba(0, 187, 255, 0.7);
        }

        .header .navigation ul li ul {
            position: absolute;
            right: 0;
            width: 300px;
            background-color: rgba(1, 1, 1, 0.5);
            display: none;
        }

        .header .navigation ul li ul li a {
            font-size: 15px;
            text-transform: capitalize;
        }

        .header .navigation ul li ul li ul {
            position: absolute;
            top: 0;
            right: 300px;
        }

        .header .navigation ul li ul li {
            width: 100%;
        }

        .header .navigation ul li:hover>ul {
            display: initial;
        }

        #toggle,
        .header label {
            display: none;
            cursor: pointer;
        }

        .menu {
            width: 45px;
            height: 35px;
        }

        @media (max-width: 950px) {
            .header {
                padding: 10px 10%;
            }

            .header label {
                display: initial;
            }

            .header .navigation {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: rgba(1, 1, 1, 0.7);
                display: none;
            }

            .header .navigation ul {
                padding: 0;
            }

            .header .navigation ul li {
                width: 100%;
                float: none;
            }

            .header .navigation ul li a {
                padding: 8px 30px 8px 10%;
            }

            .header .navigation ul li ul {
                position: relative;
                width: 100%;
                left: 0;
            }

            .header .navigation ul li ul {
                background-color: rgba(1, 1, 1, 0.7);
            }

            .header .navigation ul li ul li ul {
                position: relative;
                width: 100%;
                left: 0;
            }

            #toggle:checked~.navigation {
                display: block;
            }
        }

        .home {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 4%;
        }

        .home-content {
            max-width: 600px;
        }

        .home-content h1 {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.2;
        }

        .home-content h3 {
            font-size: 32px;
            font-weight: 700;
            color: #0dbfff;
        }

        .home-content p {
            font-size: 16px;
            margin: 20px 0 40px;
        }

        .home-content .btn-box {
            display: flex;
            justify-content: space-between;
            width: 345px;
            height: 50px;
        }

        .btn-box a {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 100%;
            background: #0dbfff;
            border: 2px solid #0dbfff;
            border-radius: 8px;
            font-size: 19px;
            color: #081b29;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            z-index: 1;
            overflow: hidden;
            transition: .5s;
        }

        .btn-box a:hover {
            color: #0dbfff;
        }

        .btn-box a:nth-child(2) {
            background: transparent;
            color: #0dbfff;
        }

        .btn-box a:nth-child(2):hover {
            color: #081b29;
        }

        .btn-box a:nth-child(2)::before {
            background: #0dbfff;
        }

        .btn-box a::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: #081b29;
            z-index: -1;
            transition: .5s;
        }

        .btn-box a:hover::before {
            width: 100%;
        }
    </style>
    @yield('style')
   
</head>
<body>

<header class="header">
    <div class="logo">TODO</div>
    <input type="checkbox" id="toggle">
    <label for="toggle"> 
        <img class="menu" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjQcRCwNIHXgysCmSjnyxc4peA8hq0NI7gcQvhjIOY9WLa8wr-lshwxZcgveagSi4UoUBJ8muOPfLmpugzjVro7-5Lrpynl-Ngr_cMsKAzPU9CMwjqQLK7ee_6hf0v2FN_tPDTYAeIKYZLQpvARWwM9D-iHbyJ8OwC1Xd-u-nbDw6HiTzUScSxaVd9yEhD3/s2500/menu1.png" alt="menu">
    </label>
    <nav class="navigation">
        <ul class="navbar-nav ml-auto">
            @guest
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            @else
            <li style="display: flex; align-items: center;">
    <span style="margin-right: 10px;">
        <a href="#">Welcome, {{ Auth::user()->name }}</a>
    </span>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
       Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>

            @endguest
        </ul>
    </nav>
</header>

<div class="hero"></div>
<section  class="home">
    @yield('content')
    </section>

@yield('script')
</body>
</html>
