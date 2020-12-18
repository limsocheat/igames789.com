@extends('layouts.app')

@section('content')
    <div class="container text-white py-5">
        <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
        @include('components.game_rules_menu')

        <section class="box_rule">
            <p>Baccarat Players acquire 2 cards all, and neighboring to 9&nbsp; wins. If the initial 2 cards treated
                entirety 8
                or 9 that is acknowledged as a "Natural" and wins without delay, except another baccarat player also has a
                normal, which of itinerary makes it a Tie. If no naturals area strained, supplementary cards are dealt.</p>
            <div class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat3.jpg?tdsotm=20170107dy"
                        alt="Baccarat">
                </div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat4.jpg?tdsotm=20170107dy"
                        alt="Baccarat">
                </div>
            </div>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <h3 class="text-warning text-underline">Rule Details:</h3>
            <ul>
                <li><strong>For Player</strong>
                    <ul>
                        <li>If Player have Narural 8 or 9 points, no more cards will be drawn for either side.</li>
                        <li>If the player's total is less than or equal to 5 the player's hand draws a third card.</li>
                        <li>If Player's total is 6 or 7 then no more card will be drawn.</li>
                    </ul>
                </li>
                <li><strong>For Banker</strong>
                    <ul>
                        <li>If Banker have Natural 8 or 9 points, no more cards will be drawn for either side.</li>
                        <li>If the bank's total is 2 or less then bank draws a card, regardless of what the players
                            third
                            card
                            is.</li>
                        <li>If the banks total is 3 then the bank draws a third card unless the players third card was
                            an 8.
                        </li>
                        <li>If the banks total is 4 then the bank draws a third card unless the players third card was a
                            0,
                            1,
                            8, or 9.</li>
                        <li>If the banks total is 5 then the bank draws a third card if the players third card was 4, 5,
                            6,
                            or
                            7.</li>
                        <li>If the banks total is 6 then the bank draws a third card if the players third card was a 6
                            or 7.
                        </li>
                        <li>If the banks total is 7 then the bank stands.</li>
                        <li>Big bets win when 1 or 2 supplementary card is needed. Total 5 or 6 cards.</li>
                    </ul>
                </li>
            </ul>
            <p class="clear"></p>
            <table class="tablerule">
                <thead>
                    <tr class="stitle">
                        <th>Bet type</th>
                        <th>Payout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><span>Banker</span></td>
                        <td>Pays 1 to 1, unless Banker win on 6 points which pays only 50%, if it is Super 6 table.</td>
                    </tr>
                    <tr>
                        <td>Pays 0.95 to 1 if it is a commission table</td>
                    </tr>
                    <tr class="bg_dark">
                        <td><span>PLAYER</span></td>
                        <td>1 to 1</td>
                    </tr>
                    <tr>
                        <td><span>TIE</span></td>
                        <td>8 to 1</td>
                    </tr>
                    <tr class="bg_dark">
                        <td><span>Banker Pair</span></td>
                        <td>11 to 1</td>
                    </tr>
                    <tr>
                        <td><span>Player Pair</span></td>
                        <td>11 to 1</td>
                    </tr>
                    <tr class="bg_dark">
                        <td><span>Big</span></td>
                        <td>1 To 0.54</td>
                    </tr>
                    <tr>
                        <td><span>Small</span></td>
                        <td>1 to 1.5</td>
                    </tr>
                </tbody>
            </table>
            <p class="clear"><br>
            </p>
            <div class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat2.jpg?tdsotm=20170107dy"
                        alt="Baccarat">
                </div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/baccarat1.jpg?tdsotm=20170107dy"
                        alt="Baccarat">
                </div>
            </div>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <div class="info_rule">
                <h3 class="text-warning text-underline">Rules:</h3>
                <ul class="ul_last">
                    <li>Cards must be Burnt on every new shoe. The first card face value will determine how many
                        cards
                        will
                        be
                        burnt.</li>
                    <li>The shoe will be considered invalid if the dealer forgets to burn cards. A new shoe will be
                        replaced
                        under this situation.</li>
                    <li>1 Card will be burn in between every hand.</li>
                    <li>When dealer pulls out a card without needing to draw, that card will be consider the next
                        burn
                        card
                        for
                        the next hand. Win/loss of current hand will be base on normal gaming rules; the result will
                        not
                        be
                        affected.</li>
                    <li>When dealer pulls out 2 cards without needing to draw, under the supervision of the floor
                        supervisor,
                        the first card will be considered the next burn card and the second card will be the first
                        card
                        for
                        Player side.</li>
                    <li>If the dealer accidentally pulls out 2 cards during the dealing process, under the
                        supervision
                        of
                        the
                        floor supervisor, the upper card will be considered the 1st card, the lower card will be
                        considered
                        2nd
                        card. Results will not be affected.</li>
                    <li>If the dealer accidentally pulls out 3 cards during the dealing process, under the
                        supervision
                        of
                        the
                        floor supervisor, the upper card will be considered the 1st card, the middle card will be
                        considered
                        as
                        2nd card, the lower card will be considered as 3rd card. Results will not be affected.</li>
                    <li>If dealer wrongfully place the order of the first 4 cards on the Banker and Player, the
                        supervisor
                        will
                        correct it immediately, and the results will not be affected.</li>
                </ul>
            </div>
        </section>
    </div>
@endsection
