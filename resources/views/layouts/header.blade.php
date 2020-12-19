@php
$menus = [
[
'icon' => 'fa fa-fw fa-home',
'text' => 'Home',
'route' => 'page.welcome',
],
[
'icon' => 'fa fa-fw
fa-chess-queen',
'text' => 'Live Casino',
'route' => 'casino',
],
['icon' => 'fa fa-fw fa-book', 'text' => 'Sportbooks', 'route' => 'sportbooks'],
['icon' => 'fa fa-fw fa-chess-board', 'text' => 'Kino', 'route' => 'game.kino'],
[
'icon' => 'fa
fa-fw fa-dice-six',
'text' => 'Slot',
'route' => 'game.slot',
],
['icon' => 'fa fa-fw fa-ticket-alt', 'text' => 'Lottery', 'route' => 'game.lottery'],
['icon' => 'fa fa-fw fa-futbol', 'text' => 'Loyalty Program', 'route' => 'page.loyalty'],
['icon' => 'fa fa-fw fa-gift', 'text' => 'Promotions', 'route' => 'page.promotions'],
];

@endphp
<section id="app-top-header" style="background-color: #1e1e1e">
    <div class="container">
        <div class="row py-2">
            <div class="col-sm-12 col-md-2 align-middle">
                <a href="{{ route('home') }}" style="text-decoration: none;">
                    <img src="/images/logo.png" alt="Logo" style="max-height: 74px" />
                </a>
                <img src="/images/qrcode.png" alt="Logo" style="max-height: 68px; margin: 3px 0" />
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('page.terms_conditions') }}">Terms &
                    Conditions</a>
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('page.privacy_policy') }}">Privacy
                    Policy</a>
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('game.baccarat') }}">Game
                    Rules</a>
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('page.responsible_gambling') }}">Resposible
                    Gaming</a>
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('page.about') }}">&nbsp;&nbsp;&nbsp;About
                    Us &nbsp;&nbsp;&nbsp;</a>
                <a class="btn btn-sm btn-gold mb-2" href="{{ route('page.contact') }}">&nbsp;&nbsp;Contact
                    Us&nbsp;</a>
            </div>
            <div class="col-sm-12 col-md-2">
                <button type="submit" class="btn btn-sm btn-gold btn-block mb-2">Doposit</button>
                <button type="submit" class="btn btn-sm btn-gold btn-block mb-2 ">Withdraw</button>
            </div>
            <div class="col-sm-12 col-md-4 ">
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <ul class="nav text-white float-right" id="app-top-navbar">
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn btn-sm btn-gold mb-2 d-inline"
                                style="height: 90%">Register</button>
                        </a>

                        <div class="text-right d-inline mx-2">

                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <div class="input-group input-group-sm mb-2 mr-sm-2">
                                <div class="input-group-prepend" style="background: #ccc;">
                                    <div class="input-group-text" style="background: #ccc;"><i
                                            class="fa fa-fw fa-user-lock"></i></div>
                                </div>
                                <input id="name" type="email" class="form-control @error('name') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email" style="background: #ccc;">
                            </div>

                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <div class="input-group input-group-sm mb-2 mr-sm-2">
                                <div class="input-group-prepend" style="background-color: #ccc">
                                    <div class="input-group-text" style="background: #ccc;"><i
                                            class="fa fa-fw fa-lock"></i>
                                    </div>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="password"
                                    style="background: #ccc;">
                            </div>
                        </div><button id="loginBtn" type="submit"
                            class="btn btn-sm btn-gold mb-2 d-inline">Login</button>
                    </ul>
                </form>
            </div>
        </div>
</section>
<section id="app-navbar" class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black pl-0 pr-0" role="navigation">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 nav-fill">
                    @foreach ($menus as $menu)
                    <li class="nav-item {{ Route::currentRouteName() == $menu['route'] ? 'active' : 'bg-black' }}">
                        <a class="nav-link text-uppercase text-secondary" href="{{ route($menu['route']) }}"><i
                                class="{{ $menu['icon'] }} text-primary"></i>
                            {{ $menu['text'] }}
                            <span class="sr-only">(current)</span></a>
                    </li>
                    @endforeach
                    <div class="dropdown language float-right">
                        <button class="btn btn-gold dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-us"></span> English
                        </button>
                        <div class="dropdown-menu dropdown-menu-right text-left language">
                            <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-us"> </span>
                                English</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-cn">
                                </span>
                                Chinese</a>
                            <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-jp"> </span>
                                Japanese</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ms"> </span>
                                Malay</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-vn"> </span>
                                Vietnamese</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-th"> </span>
                                Thai</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-kr"> </span>
                                Korean</a>
                        </div>
                    </div>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="row bg-danger text-white ml-0 mr-0">

            <div class="col-sm-12 col-md-3"><span id="datetime"></span> (GMT+8)</div>
            <div class="col-sm-12 col-md-9">

                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    Welcome to
                    www.igames789.com! Please have fun.</marquee>
            </div>
        </div>
    </div>
</section>
<section id="app-marquee" class="bg-danger text-white">
    <div class="container">

    </div>

</section>

<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();

</script>