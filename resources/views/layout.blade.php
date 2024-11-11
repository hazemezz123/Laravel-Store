<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet"
        integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="img/image.png" style="height: 30px; width: auto;" alt="Samsung Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('addProducts') }}">Add product</a>
                </li>
            </ul>
            <!-- Theme Toggle Button -->
            <button id="theme-toggle" class="btn btn-outline-secondary ms-3" data-bs-theme-value="dark">
                <svg class="bi theme-icon" width="16" height="16" fill="currentColor">
                    <use href="#icon-moon"></use>
                </svg>
                <span id="bd-theme-text" class="visually-hidden">Toggle theme</span>
            </button>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Icons for light and dark mode -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="icon-moon" viewBox="0 0 16 16">
            <path d="M6 0a6 6 0 1 0 6 6H6z" />
        </symbol>
        <symbol id="icon-sun" viewBox="0 0 16 16">
            <path
                d="M8 0a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0V1a1 1 0 0 1 1-1zm0 12a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1zM0 8a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H1a1 1 0 0 1-1-1zm12 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-6 4.464a1 1 0 0 1 1.414 0l1.414 1.414a1 1 0 1 1-1.414 1.414L5.586 13.88a1 1 0 0 1 0-1.414zm0-8.928a1 1 0 0 1 1.414 0L8.414 2.95a1 1 0 0 1-1.414 1.414L5.586 3.536a1 1 0 0 1 0-1.414z" />
        </symbol>
    </svg>

    <script>
        (() => {
            'use strict'
            const getStoredTheme = () => localStorage.getItem('theme')
            const setStoredTheme = theme => localStorage.setItem('theme', theme)
            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                    return storedTheme
                }
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }
            const setTheme = theme => {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }

            const showActiveTheme = (theme) => {
                const themeToggle = document.querySelector('#theme-toggle')
                const themeIcon = document.querySelector('.theme-icon')
                if (themeToggle && themeIcon) {
                    themeIcon.setAttribute('href', theme === 'dark' ? '#icon-sun' : '#icon-moon')
                    themeToggle.setAttribute('aria-label',
                        `Toggle theme to ${theme === 'dark' ? 'light' : 'dark'} mode`)
                }
            }

            window.addEventListener('DOMContentLoaded', () => {
                const currentTheme = getPreferredTheme()
                setTheme(currentTheme)
                showActiveTheme(currentTheme)

                document.querySelector('#theme-toggle').addEventListener('click', () => {
                    const newTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ?
                        'light' : 'dark'
                    setStoredTheme(newTheme)
                    setTheme(newTheme)
                    showActiveTheme(newTheme)
                })
            })
        })()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
