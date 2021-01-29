@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>Casinos in Asia offer insurance bets in baccarat after four or five cards have been dealt. These are
                generally made to protect a stronger hand against losing, or in the case of a 9, a tie.</p>
            <div class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat_ins2.jpg?tdsotm=20170107dy"
                        alt="Baccarat Ins"></div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat_ins4.jpg?tdsotm=20170107dy"
                        alt="Baccarat Ins"></div>
            </div>
            <p class="clear"><br></p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <h3 class="text-warning text-underline">Game rules:</h3>
            <ul>
                <li>Please refer to Baccarat for game rules.</li>
                <li>All players shall play against the House. Players may choose to wager on any one or more of the
                    following:
                    <ul>
                        <li>Player</li>
                        <li>Banker</li>
                        <li>Tie</li>
                        <li>Player Pair</li>
                        <li>Banker Pair</li>
                    </ul>
                    Any Player may bet on the "Player Pair" and/or "Banker Pair" and/or "Tie" without having to place a
                    bet
                    on "Player" or "Banker".
                </li>
                <li>After the initial 4 cards are dealt, the Player may decide to bet on “Baccarat Insurance”, as the
                    situation arises, in accordance with the Baccarat Insurance Pay Table, provided always that:
                    <ul>
                        <li>Baccarat Insurance for the Player’s hand ("Player Insurance Bet") is applicable to two (2)
                            or
                            three (3) cards situations which are subject to 3rd card rules. Baccarat Insurance for the
                            Banker’s hand ("Banker Insurance Bet") is only applicable to a two (2) cards situation.</li>
                        <li>The total insurance payout on the initial and any subsequent insurance wager may not exceed
                            the
                            original bet placed on the Player or the Banker.</li>
                    </ul>
                </li>
            </ul>
            <p class="clear"></p>

            <h3 class="text-warning text-underline">Baccarat Insurance Pay Table</h3>
            <table class="tablerule table table-dark table-striped">
                <thead>
                    <tr class="stitle">
                        <th colspan="2" class="text-danger font-weight-bold text-underline">After Four Cards Exposed
                        </th>
                        <th>Banker Insurance Bets</th>
                    </tr>
                    <tr class="mtitle">
                        <th>Banker Points Is:</th>
                        <th>Player Points Is:</th>
                        <th>Odds (When Banker’s Hand)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>0 - 4</td>
                        <td>2 To 1</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>0 - 5</td>
                        <td>3 To 1</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>0 - 5</td>
                        <td>4 To 1</td>
                    </tr>
                </tbody>
            </table>
            <table class="tablerule table table-dark table-striped">
                <thead>
                    <tr class="stitle">
                        <th colspan="2" class="text-danger font-weight-bold text-underline">After Four Cards Exposed
                        </th>
                        <th>Player Insurance Bets</th>
                    </tr>
                    <tr class="mtitle">
                        <th>Player Points Is:</th>
                        <th>Banker Points Is:</th>
                        <th>Odds (When Player’s Hand Loses)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>0 - 5</td>
                        <td>3 To 1</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>0 - 5</td>
                        <td>4 To 1</td>
                    </tr>
                </tbody>
            </table>

            <table class="tablerule table table-dark table-striped">
                <thead>
                    <tr class="stitle">
                        <th colspan="2" class="text-danger font-weight-bold text-underline">After Player’s 3rd Card:
                        </th>
                        <th>Player Insurance Bets</th>
                    </tr>
                    <tr class="mtitle">
                        <th>Player Points Is:</th>
                        <th>Banker Points Is:</th>
                        <th>Odds (When Player’s Hand Loses)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0 - 3</td>
                        <td>4</td>
                        <td>1.5</td>
                    </tr>
                    <tr>
                        <td>0 - 4</td>
                        <td>5</td>
                        <td>2 To 1</td>
                    </tr>
                    <tr>
                        <td>0 - 5</td>
                        <td>6</td>
                        <td>3 To 1</td>
                    </tr>

                    <tr>
                        <td>0 - 6</td>
                        <td>7</td>
                        <td>4 To 1</td>
                    </tr>
                    <tr>
                        <td>0 - 6</td>
                        <td>8</td>
                        <td>8 To 1</td>
                    </tr>
                    <tr>
                        <td>0 - 6</td>
                        <td>9*</td>
                        <td>9 To 1*</td>
                    </tr>
                    <tr>
                        <td colspan="3">* Where A Player Insurance Bet Is Placed On The Player At 9 Points (After The
                            3rd
                            Card Rule),&nbsp;and The Banker Subsequently Obtains 9 Points (After The 3rd Card Rule),
                            Resulting In A Tie.</td>
                    </tr>
                </tbody>
            </table>
            <p class="clear"></p>

        </section>
    </div>
</div>
@endsection