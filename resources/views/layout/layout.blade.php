<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width: 100%;
            background-color: #f4f4f4;
        }
        nav{
            background-color: #fff;
            padding: 20px;
        }
        nav ul a{
            padding: 20px auto;
            text-decoration: none;
            font-size: 20px;
        }
        .page{
            max-width: 1020px;
            padding: 20px auto;
            margin: 0 auto;
        }
        .container{
            padding: 20px 50px;
        }
        .row{
            display: flex;
            align-items: top;
            justify-content: center;
            gap: 50px;
        }
        .menu, .post-box, .search-box{
            background-color: #fff;
            padding: 20px;
            line-height: 2;
            font-size: 120%;
        }
        input{
            height:30px;
            text-align: left;
            padding: 8px;
        }
        button{
            font-size: 15px;
            padding: 8px 12px;
        }
    </style>
</head>
<body>

   <!-- include navbar -->
        @include('layout.nav')
    <div class="page">
        <!-- container -->
        <div class="container row">
            {{-- Page content goes here--}}
            @yield('content')
        </div>
        <!-- end of container -->
    </div>
</body>
</html>