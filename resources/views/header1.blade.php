<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fatventures - Home</title>
        {!! Html::script('javascript/functions.js') !!}
        {!! Html::style('css/styles.css') !!}
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>
