<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>

    <style>
        header {
            text-align: center;
            color: #fff;
            font-size: 1.2rem;
            background: #ccc;
            padding: 2rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
        }

        body {
            margin: 2rem;
        }

        section.continut {
            padding: 0 2rem;
        }

        footer {
            text-align: center;
            color: #fff;
            font-size: 1.2rem;
            background: #ccc;
            padding: 2rem;
            border-radius: 1rem;
            margin-top: 2rem;
        }

        section.meniu {
            padding: 0 2rem 2rem 2rem;
            color: #ccc;
        }

        form {
            padding: 2rem 0;
        }

        section.meniu a {
            color: #3b3b3b;
            text-decoration: none;
            margin-right: 0.5rem;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <header>HEADER</header>
    <section class="meniu">
        <a href="/">Acasa</a>
        <a href="/blog/">Blog</a>
        <a href="/contact/">Contact</a>
    </section>

    <section class="continut">
        {{--  View output --}}
        @yield('content')
    </section>

    <footer>Footer</footer>
</body>

</html>
