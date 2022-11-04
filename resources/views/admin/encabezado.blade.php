<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .active{
            color: red;
            text-decoration: none;
        }
    </style>
    <div class="btn-group" role="group" aria-label="">

            <a class="{{ setActive('index') }}" href='/index'>inicio</a>
            <a class="{{ setActive('registrados') }}" href="/registrados">registrados</a>
            <a class="{{ setActive('contactenos') }}" href="/contactenos">contactenos</a>
            <a class="{{ setActive('otros') }}" href="/otros">otros</a>
    </div>
    </div>
    @yield('content')
</body>

</html>
