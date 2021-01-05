@php($games = [['text' => 'Baccarat', 'route' => 'game.baccarat'], ['text' => 'Baccarat Ins', 'route' =>
    'game.baccarat_ins'], ['text' => 'Dragon Tiger', 'route' => 'game.dragon_tiger'], ['text' => 'Roulette', 'route' =>
    'game.roulette'], ['text' => 'Xocdia', 'route' => 'game.xocdia'], ['text' => 'Fantan', 'route' => 'game.fantan']])

    @php($casinos = [['text' => 'Live Casino', 'route' => 'game.baccarat'], ['text' => 'Baccarat', 'route' =>
        'game.baccarat_ins'], ['text' => 'Sportbooks', 'route' => 'game.dragon_tiger'], ['text' => 'Kino', 'route' =>
        'game.roulette'], ['text' => 'Slots', 'route' => 'game.xocdia'], ['text' => 'Lottery', 'route' => 'game.fantan']])

        @php($accounts = [['text' => 'Login', 'route' => 'login'], ['text' => 'Register', 'route' => 'register'], ['text' =>
            'Deposit', 'route' => 'game.roulette'], ['text' => 'Withdraw', 'route' => 'game.dragon_tiger'], ['text' => 'Gifts',
            'route' => 'game.gifts'], ['text' => 'Loyalty Points', 'route' => 'game.loyalty_points']])
            <footer class="page-footer font-small indigo attached-bottom bg-black text-white" id="app-footer">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <div class="col-md-4 col-sm-12 text-md-left text-sm-center mb-2">
                            <img src="{{ asset('images/let-play.jpg') }}" alt="Let's Play" style="max-height: 120px">
                        </div>

                        <div class="col-md-4 col-sm-12 text-center mb-2">
                            <img src="{{ asset('images/big-win.jpg') }}" alt="Big Win" style="max-height: 120px">
                        </div>

                        <div class="col-md-4 col-sm-12 text-md-right text-sm-center mb-2">
                            <img src="{{ asset('images/play-to-win.jpg') }}" alt="Play to win" style="max-height: 120px">
                        </div>

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: red">CONTACT</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-fw fa-lg fa-phone text-danger"></i>
                                    <a href="tel:+840339466132" class="btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-lg fa-envelope text-info"></i>
                                    <a href="mail:support@igames789.com" class="btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        support@igames789.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-lg fa-globe text-warning"></i>
                                    <a href="http://www.igames789.com" class="btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        www.igames789.com</a>
                                </li>
                                <li>
                                    <i class="fab fa-whatsapp text-success" style="font-size: 1.3333333333em;"></i>
                                    <a href="http://www.igames789.com" class="btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    <i class="fab fa-skype text-primary " style="font-size: 1.3333333333em;"></i>
                                    <a href="http://www.igames789.com" class="btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    <i class="fab fa-telegram text-primary" style="font-size: 1.3333333333em;"></i>
                                    <a href="http://www.igames789.com" class=" btn btn-sm btn-gold mb-2"
                                        style="width: 153px; max-width:100%;">
                                        +84 033 946 6132</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto text-center">

                            <!-- Links -->
                            <div style="margin-right:33px;" class="igames789">
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: red">IGAMES789</h5>

                                <ul class="list-unstyled">

                                    @foreach ($casinos as $casino)
                                        <li>
                                            <i class="fas fa-caret-right text-primary " style="font-size: 1.3333333333em;"></i>
                                            <a href="#!" class="btn btn-sm btn-gold mb-2"
                                                style="width: 153px; max-width:100%; max-width:100%;">{{ $casino['text'] }}</a>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto text-center ">

                            <!-- Links -->
                            <div style="margin-left:34px;" class="account">
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: red">ACCOUNT</h5>

                                <ul class="list-unstyled">
                                    @foreach ($accounts as $account)
                                        <li>
                                            <i class="fas fa-caret-right text-primary " style="font-size: 1.3333333333em;"></i>
                                            <a href="#!" class=" btn btn-sm btn-gold mb-2"
                                                style="width: 153px; max-width:100%;">{{ $account['text'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto text-md-right">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: red">GAME RULES</h5>

                            <ul class="list-unstyled">
                                @foreach ($games as $game)
                                    <li class="{{ Route::currentRouteName() == $game['route'] ? 'active' : null }}">
                                        <i class="fas fa-caret-right text-primary " style="font-size: 1.3333333333em;"></i>
                                        <a href="{{ route($game['route']) }}"
                                            class="font-weight-bold btn btn-sm btn-gold mb-2 {{ Route::currentRouteName() == $game['route'] ? 'active' : null }}"
                                            style="width: 153px; max-width:100%;">{{ $game['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 text-warning" id="app-copyright"
                    style="border-top: 0.5px solid #666;">
                    <img src="{{ asset('/images/18.png') }}" style="max-height: 30px;" /><br>© 2019 Copyright:
                    <a href="http://igames789.com" class="text-warning">www.igames789.com</a>

                </div>
                <!-- Copyright -->

            </footer>


            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk.to/5d887d0ec22bdd393bb73c65/default';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();

            </script>
            <!--End of Tawk.to Script-->
