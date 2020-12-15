@php($games = [['text' => 'Baccarat', 'route' => 'game.baccarat'], ['text' => 'Baccarat Ins', 'route' =>
    'game.baccarat_ins'], ['text' => 'Dragon Tiger', 'route' => 'game.dragon_tiger'], ['text' => 'Roulette', 'route' =>
    'game.roulette'], ['text' => 'Xocdia', 'route' => 'game.xocdia'], ['text' => 'Fantan', 'route' => 'game.fantan'],
    ['text' => 'Belangkai', 'route' => 'game.belangkai']])

    @php($casinos = [['text' => 'Live Casino', 'route' => 'game.baccarat'], ['text' => 'Baccarat', 'route' =>
        'game.baccarat_ins'], ['text' => 'Sportbooks', 'route' => 'game.dragon_tiger'], ['text' => 'Kino', 'route' =>
        'game.roulette'], ['text' => 'Slots', 'route' => 'game.xocdia'], ['text' => 'Lottery', 'route' => 'game.fantan']])

        @php($accounts = [['text' => 'Login', 'route' => 'game.baccarat'], ['text' => 'Register', 'route' =>
            'game.baccarat_ins'], ['text' => 'Deposit', 'route' => 'game.roulette'], ['text' => 'Withdraw', 'route' =>
            'game.dragon_tiger']])
            <footer class="page-footer font-small indigo attached-bottom bg-black text-white" id="app-footer">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CONTACT</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-fw fa-lg fa-phone text-danger"></i>
                                    <a href="tel:+840339466132" class="btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-lg fa-envelope text-info"></i>
                                    <a href="mail:support@enrich888.com" class="btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        support@enrich888.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-fw fa-lg fa-globe text-warning"></i>
                                    <a href="http://www.enrich888.com" class="btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        www.enrich888.com</a>
                                </li>
                                <li>
                                    &nbsp;<i class="fab fa-whatsapp text-success" style="font-size: 1.3333333333em;"></i>&nbsp;
                                    <a href="http://www.enrich888.com" class="btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    &nbsp;<i class="fab fa-skype text-primary " style="font-size: 1.3333333333em;"></i>&nbsp;
                                    <a href="http://www.enrich888.com" class="btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        +84 033 946 6132</a>
                                </li>
                                <li>
                                    &nbsp;<i class="fab fa-telegram text-primary" style="font-size: 1.3333333333em;"></i>&nbsp;
                                    <a href="http://www.enrich888.com" class=" btn btn-sm btn-primary mb-2" style="width: 60%;">
                                        +84 033 946 6132</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ENRICH888</h5>

                            <ul class="list-unstyled">

                                @foreach ($casinos as $casino)
                                    <li>
                                        &nbsp;<i class="fas fa-caret-right text-primary "
                                            style="font-size: 1.3333333333em;"></i>&nbsp;
                                        <a href="#!" class="btn btn-sm btn-primary mb-2"
                                            style="width: 60%;">{{ $casino['text'] }}</a>
                                    </li>

                                @endforeach
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ACCOUNT</h5>

                            <ul class="list-unstyled">
                                @foreach ($accounts as $account)
                                    <li>
                                        &nbsp;<i class="fas fa-caret-right text-primary "
                                            style="font-size: 1.3333333333em;"></i>&nbsp;
                                        <a href="#!" class=" btn btn-sm btn-primary mb-2"
                                            style="width: 60%;">{{ $account['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-3 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">GAME RULES</h5>

                            <ul class="list-unstyled">
                                @foreach ($games as $game)
                                    <li class="{{ Route::currentRouteName() == $game['route'] ? 'active' : null }}">
                                        &nbsp;<i class="fas fa-caret-right text-primary "
                                            style="font-size: 1.3333333333em;"></i>&nbsp;
                                        <a href="{{ route($game['route']) }}"
                                            class="font-weight-bold btn btn-sm btn-primary mb-2 {{ Route::currentRouteName() == $game['route'] ? 'active' : null }}"
                                            style="width: 60%;">{{ $game['text'] }}</a>
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
                    <a href="http://enrich888.com" class="text-warning">www.enrich888.com</a>

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