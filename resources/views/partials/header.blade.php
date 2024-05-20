<header>
    <div class="container-fluid">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
                </a>
                <ul class="d-flex">
                    @foreach($link as $links)
                    <li>
                        <a href="{{$links }}">{{ $links}}</a>
                    </li>
                    
                @endforeach

                </ul>
            </div>
        </nav>
    </div>
</header>