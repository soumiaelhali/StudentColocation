<header class="main_menu home_menu">
    <div class="container " style="background-color: aliceblue">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <!--<img src="img/logo.png" alt="logo"> -->
                        <h1>Student Coloco</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('showlist')}}">Offers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('listdemand')}}">Demands</a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                            </li>
                            @endauth
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Login & register</a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    <div class="btn_1 d-none d-lg-block">
                        <a href="{{url('/offer')}}" class="float-right">Submit property</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
