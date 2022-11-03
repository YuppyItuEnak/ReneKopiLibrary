<nav class="navbar sticky-top  navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        @if (Request::url() === 'http://renekopilibrary.test/' ||
            Request::url() === 'http://renekopilibrary.test/#' ||
            Request::url() === 'http://renekopilibrary.test' ||
            Request::url() === 'http://renekopilibrary.test/#product' ||
            Request::url() === 'http://renekopilibrary.test/#about' ||
            Request::url() === 'http://127.0.0.1:8000' ||
            Request::url() === 'http://127.0.0.1:8000/' ||
            Request::url() === 'http://127.0.0.1:8000/#' ||
            Request::url() === 'http://127.0.0.1:8000/#product' ||
            Request::url() === 'http://127.0.0.1:8000/#about')
            <a class="navbar-brand" href="#">
                @else
                    <a class="navbar-brand" href="/">
                        @endif
                        <img src={{ asset('Images/Renekopi3.png') }} alt="Logo" width="30" height="24"
                             class="d-inline-block align-text-top">
                        ReneKopi</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#product" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/coffees">Coffees</a></li>
                                    <li><a class="dropdown-item" href="/noncoffees">Non Coffees</a></li>
                                    <li><a class="dropdown-item" href="/foodnsnacks">Food & Snacks</a></li>
                                </ul>
                            </li>
                            @if (Request::url() === 'http://renekopilibrary.test/' ||
                                Request::url() === 'http://renekopilibrary.test/#' ||
                                Request::url() === 'http://renekopilibrary.test' ||
                                Request::url() === 'http://renekopilibrary.test/#product' ||
                                Request::url() === 'http://renekopilibrary.test/#about' ||
                                Request::url() === 'http://127.0.0.1:8000' ||
                                Request::url() === 'http://127.0.0.1:8000/' ||
                                Request::url() === 'http://127.0.0.1:8000/#' ||
                                Request::url() === 'http://127.0.0.1:8000/#product' ||
                                Request::url() === 'http://127.0.0.1:8000/#about')

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                                </li>
                            @endif
                        </ul>
                    </div>
    </div>
</nav>
