<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='css/style.css' type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    .course {
    width: 1219px;
    margin: auto;
    display: grid;
    grid-template-columns: auto auto;
    text-decoration: none;
    }

    .card {
        margin: 20px 20px;
        border-radius: 35px;
        padding: 100px 0;

    }

    .card h1 {
        color: @yield('course-title-font-color');
        font-weight: bold;
    }

    .card h3 {
        color: @yield('course-subtitle-font-color');
        font-weight: 500;
    }
    img {
        height: 90px;
    }
    h1{
        font-size: 60px;
        color: @yield('category-title-clor');
    }
    a {
        margin: auto;
        width: 500px;
        text-decoration: none;

    }
    body {
        padding: 20px;
        background-color: @yield('background-color');
        text-align: center;
    }

    .delete {
        width: 62px;
        height: 62px;
        background-color: @yield('delete-button-color');
        border-radius: 100%;
        position: absolute;
        margin-left: 380px;
    }

    .delete img{
        width: 25px;
        height: 25px;
        padding: 17px 0;
    }

    .button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }
    .new-course img{
        width: 27px;
        height: 27px;
        color: @yield('new-course-color');
    }

    .new-course a {
        text-decoration: none;
        align-items: center;
    }

    .new-course {
        display: flex;
        background-color: @yield('new-course-background-color');
        width: 283px;
        height: 62px;
        border-radius: 40px;
        position: fixed;
        bottom: 0;
        margin: 50px 0;

    }

    .new-course p {
        color: @yield('new-course-color');
        font-size: 1.2em;
    }

</style>
<body>
    <img src="storage/images/@yield('title-image')" alt="">
    <h1>@yield('title')</h1>
    <div class="course">
        @yield('course')
    </div>

    @yield('new-course-button')
</body>
</html>
