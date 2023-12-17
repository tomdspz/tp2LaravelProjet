<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        {{-- <link rel="stylesheet" href="asset('ressources/css/style.css');">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}



        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"><i class='bx bx-image' ></i></a></li>
                    <li><a href="/albums"><i class='bx bx-images' ></i></a></li>
                    {{-- <li class="menu"><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i class='bx bx-search' ></i></a></li> --}}
                    <h1>MMIPhotos</h1>
                    <li><a href="/account"><i class='bx bxs-face'></i></a></li>
                </ul>
            </nav>
        </header>

        <main>
			@yield("content")
		</main>

    </body>
</html>





