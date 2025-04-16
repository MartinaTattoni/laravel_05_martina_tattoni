<nav class="navbar navbar-custom navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">

        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a class="nav-link {{ Route::currentRouteName() == 'homepage' ? 'active' : ''}}" aria-current="page" href="{{route('homepage')}}">Homepage</a>

                </li>


                <li class="nav-item">

                    <a class="nav-link {{ Route::currentRouteName() == 'anime.types' ? 'active' : ''}}" href="{{route('anime.types')}}">Anime</a>

                </li>


                <li class="nav-item">

                    <a class="nav-link {{ Route::currentRouteName() == 'manga.page' ? 'active' : ''}}" href="{{route('manga.page')}}">Manga</a>

                </li>
                

            </ul>

        </div>

    </div>

</nav>