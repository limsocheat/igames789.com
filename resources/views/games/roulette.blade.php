@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>Roulette was first played in France back in the 17th century. It is now one of the most popular European
                gambling games and&nbsp;Monte Carlo&nbsp;in Monaco is a well known and famous casino centre for playing
                roulette.</p>
            <ul class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/roulette1.jpg?tdsotm=20170107dy"
                        alt="Roulette">
                </div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/roulette2.jpg?tdsotm=20170107dy"
                        alt="Roulette">
                </div>
            </ul>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>

            <h3 class="text-warning text-underline">Roulette straight-up bet</h3>
            <p>Roulette straight-up bet or single number bet. Pays 35 to 1</p>
            <h3 class="text-warning text-underline">Roulette split bet</h3>
            <p>A two-number bet, called split bet. Pays 17 to 1. (Place bet on the line between 2 numbers)</p>
            <h3 class="text-warning text-underline">Roulette street bet</h3>
            <p>A three-number bet, called street bet, pays 11 to 1.</p>
            <h3 class="text-warning text-underline">Roulette square bet</h3>
            <p>A four-number bet, called Square bet and corner bet. Pays 8 to 1</p>
            <h3 class="text-warning text-underline">Roulette Line bets</h3>
            <p>Six numbers bet Line Bet. Pays 5 to 1</p>
            <h3 class="text-warning text-underline">Roulette Low or High Bet</h3>
            <p>1 to 18 = Low and 19 to 36 = High. Pays 1 to 1.</p>
            <h3 class="text-warning text-underline">Roulette Black or Red</h3>
            <p>Black or Red bet. Pays 1 to 1</p>
            <h3 class="text-warning text-underline">Roulette Odd or Even</h3>
            <p>Odd and Even bet. Pays 1 to 1</p>
            <h3 class="text-warning text-underline">Roulette Collum Bet</h3>
            <p>12 number bets. The above example is the 3rd collum. Pays 2 to 1</p>
            <h3 class="text-warning text-underline">Roulette Dozens Bet</h3>
            <p>Another 12 number bet. The above example is 1st Dozen. Pays 2 to 1</p>
            <p>0&nbsp;is neither Black or Red, Odd or Even, Low or High, Dozen and Collum therefore if&nbsp;0&nbsp;is
                the
                winning number then all outside bets lose.</p>
        </section>
    </div>
</div>
@endsection