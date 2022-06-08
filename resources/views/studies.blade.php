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

        .container {
            width: 100%;
            margin: 2rem auto;
            text-align: center;
        }

        ul {
            list-style: none;
        }

        li {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('studies') }}">Percorso studi</a>
        </nav>
    </header>

    <h1> Percorso di studi</h1>
    <div class="container">
        <ul>
            @foreach ($study as $topic)
            <li>
                {{ $topic }}
            </li>
            @endforeach
        </ul>

    </div>
</body>

</html>