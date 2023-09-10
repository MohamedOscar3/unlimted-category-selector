<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unlimited Select</title>

    <!-- add csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- add bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Add select2 -->
    <link rel="stylesheet" href="{{asset("css/select2.min.css")}}"/>
</head>
<body>
    <!-- Start nav -->
    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>Unlimited Category Selector</h1>
            </a>
        </div>
    </nav>
    <!-- End nav -->

    <!-- Start main content -->
    @yield("content")
    <!-- End main content -->


    <!-- add jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- add bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <!-- Add select2 -->
    <script src="{{asset("js/select2.full.min.js")}}"></script>

    <!-- Add main script -->
    <script src="{{asset("js/main.js")}}"></script>
</body>
</html>
