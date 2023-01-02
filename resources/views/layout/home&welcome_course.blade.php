<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='css/style.css' type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <style>
        h1{
            font-size: 80px;
            margin-top: 30px;
        }
        p {
            font-size: 25px;
            margin-top: 20px;
        }
        button {
            width: 217px;
            border-radius: 40px;
            height: 70px;
            border-color: transparent;
            font-size: 30px;
            margin-top: 59px
        }
        img {
            height: 90px;
        }
        body {
            background-color: black;
            display: inline-flex;
            height: 100vh;
            width: 100vw;
        }
     </style>
<body>
    <div class="left">
            <div>
                <img src="storage/images/eye_icon.png" alt="" srcset="">
                <h1>@yield('left-title')</h1>
                <p>@yield('left-subtitle')</p>
                <p style="color: #FFE1E1;">@yield('left-course')</p>
                <a href=@yield('left-route')><button style="background-color: #FFE1E1; color: #32303F;">@yield('left-button-title')</button></a>
            </div>
        </div>
        <div class="right">
            <div>
                <img src="storage/images/serrations_icon.png" alt="" srcset="">
                <h1>@yield('right-title')</h1>
                <p>@yield('right-subtitle')</p>
                <p style="color: #47464C;">@yield('right-course')</p>
                <a href=@yield('right-route')><button style="background-color: #5B9277; color: #E0FFDD;">@yield('right-button-title')</button></a>
            </div>
        </div>

</body>
