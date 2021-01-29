@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>Dragon &amp; Tiger is a game that bets who has the higher points of card.</p>
            <ul class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/dt2.jpg?tdsotm=20170107dy"
                        alt=""></div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/dt1.jpg?tdsotm=20170107dy"
                        alt=""></div>
            </ul>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <h3 class="text-warning text-underline"> Game Instructions:</h3>
            <ul>
                <li>Player will place their bet at their choices from "Dragon" or "Tiger" or "Tie".</li>
                <li>Dealer will distribute one card, each at "Dragon" &amp; "Tiger".</li>
                <li>To determine the winner, the one ("Dragon" or "Tiger") who has the highest points will be the
                    winner. If
                    the "Dragon" &amp; "Tiger" got the same points, it is a "TIE" game (regardless of the suit).</li>
                <li>K is the highest point &amp; A is the lowest point.</li>
                <li>K, Q, J, 10, 9, 8, 7, 6, 5, 4, 3, 2, A</li>
                <li>Win 1:1 Tie 1:8</li>
                <li>No matter "Dragon" or "Tiger" win, there will be no commission charge on either side. However, if
                    there
                    was a "Tie", the bet amounts on "Dragon" or "Tiger" will be deducted by 50% as commission charge.
                    The
                    remained balance will be returned to all "Dragon" and "Tiger" players.</li>
            </ul>
        </section>
    </div>
</div>
@endsection