<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css"
        integrity="sha512-byErQdWdTqREz6DLAA9pCnLbdoGGhXfU6gm1c8bkf7F51JVmUBlayGe2A31VpXWQP+eiJ3ilTAZHCR3vmMyybA=="
        crossorigin="anonymous" />
</head>

<body>

    <div id="app">
        <section class="hero is-link is-fullheight">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
                <header class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item">
                                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_White.png"
                                    alt="Logo">
                            </a>
                            <span class="navbar-burger" data-target="navbarMenuHeroC">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div id="navbarMenuHeroC" class="navbar-menu">
                            <div class="navbar-end">
                                <span class="navbar-item">
                                    <a class="button is-dark is-inverted">
                                        <span>Cookies</span>
                                    </a>
                                </span>
                                <span class="navbar-item">
                                    <a class="button is-dark">
                                        <span>Session</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <p class="title is-size-1">
                        Spotify fake
                    </p>
                    <Solution solution="Cookies" />
                </div>
            </div>

            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
                <nav class="tabs is-boxed is-fullwidth">
                    <div class="container">
                        <ul class="is-size-4">
                            <li><a>ITEM</a></li>
                            <li><a>ITEM</a></li>
                            <li><a>ITEM</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <Modal />
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
