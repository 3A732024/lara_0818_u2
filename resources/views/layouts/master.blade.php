<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')|MyBlog</title>
    </head>
    <body>
        <div class ="container">
        @yield('content')
        </div>
        @include('layouts. partials.navigation')
    </body>
</html>

