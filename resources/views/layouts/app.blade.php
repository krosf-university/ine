<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <title>Dropship - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/app.css" rel="stylesheet">
    <script src="js/app.js" type="text/javascript" defer></script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar fixed-top pt-4 container-xxl pb-0" style="background: white">
            <div class="d-flex w-100 align-items-center">
                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center justify-content-between px-4">
                    <div class="d-flex">
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="navbar-brand">Dropship</a>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="nav-link">Guys</a></li>
                            <li class="list-inline-item"><a class="nav-link">Girls</a></li>
                        </ul>
                    </div>
                    <form class="d-flex justify-content-center align-items-center search-bar">
                        <input type="text" placeholder="Search" aria-label="Search">
                        <button type="submit" class="d-flex justify-content-center align-items-center">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="d-flex w-25 flex-grow-0 flex-shrink-0 justify-content-end">
                    <button type="button" class="button-icon d-flex justify-content-center align-items-center mr-3">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                        </svg>
                    </button>
                    <button type="button" class="button-icon d-flex justify-content-center align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="container-xxl d-flex h-100 pt-5">
            @yield('content')
        </div>
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Dropship</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</body>

</html>
