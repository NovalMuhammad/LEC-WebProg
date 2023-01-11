@extends('layout.front&back_layout')

@section('title', 'Back-End')

@section('title-image', 'serrations_icon.png')

@section('course-title-font-color', '#E0FFDD')

@section('course-subtitle-font-color', 'white')

@section('category-title-clor', '#47464C')

@section('background-color', '#E0FFDD')

@section('new-course-color', '#E0FFDD')

@section('new-course-background-color', '#5B9277')

@section('course')
<a href="/sql">
    <div class="card" style="background-color: #729D83;">
        <h1>SQL</h1>
        <h3>A language for accessing databases</h3>
    </div>
</a>
<a href="/php">
    <div class="card" style="background-color: #6A94C5;">
        <h1>PHP</h1>
        <h3>A web server programming language</h3>
    </div>
</a>
<a href="/python">
    <div class="card" style="background-color: #71625F;">
        <h1>Python</h1>
        <h3>A popular programming language</h3>
    </div>
</a>
<a href="/c++">
    <div class="card" style="background-color: #D89C8F;">
        <h1>C++</h1>
        <h3>A programming language</h3>
    </div>
</a>
@endsection



