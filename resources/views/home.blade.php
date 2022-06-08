<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color:antiquewhite;
        }

        a {
            text-decoration: none;
            margin: 0 1rem;
        }

        ul {
            list-style: none;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/studies">Percorso studi</a>
        </nav>
    </header>

    <h1> Ciao sono {{ $name }} {{ $surname }}</h1>

    </div>
</body>

</html>