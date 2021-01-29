@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>The chips are placed onto the plate and covered with the cup and set onto a table. The plate is picked up
                by
                a dealer a few inches from the table and shaken while covered. Players will take time to place a wager
                on
                several bet choices.</p>
            <ul class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/xocdia.jpg?tdsotm=20170107dy"
                        alt=""></div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/xocdia2.jpg?tdsotm=20170107dy"
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
            <h3 class="text-warning text-underline">Those bets are:</h3>
            <table class="tablerule table table-striped table-dark">
                <tbody>
                    <tr>
                        <td width="350">○○○○ </td>
                        <td width="150">4 White</td>
                    </tr>
                    <tr>
                        <td>○○○● </td>
                        <td>3 White, 1 Red</td>
                    </tr>
                    <tr>
                        <td>○●●● </td>
                        <td>1 White, 3 Red</td>
                    </tr>
                    <tr>
                        <td>●●●● </td>
                        <td>4 Red</td>
                    </tr>
                    <tr>
                        <td>Either 4 White, 2 White And 2 Red, Or 4 Red</td>
                        <td>EVEN</td>
                    </tr>
                    <tr>
                        <td>Either 3 White And 1 Red Or 1 White And 3 Red</td>
                        <td>ODD</td>
                    </tr>
                </tbody>
            </table>
            <p class="clear"></p>
            <ul>
                <li>After the betting period, the cup is removed revealing the number or red chips and the number of
                    white
                    chips.</li>
                <li>Winning bet amounts are calculated according to the following odds:</li>
            </ul>
            <p class="clear"></p>
            <table class="tablerule table table-striped table-dark">
                <thead>
                    <tr class="stitle">
                        <th width="450">Bet type </th>
                        <th>Payout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4 White</td>
                        <td>10.50 </td>
                    </tr>
                    <tr>
                        <td>4 Red</td>
                        <td>10.50 </td>
                    </tr>
                    <tr>
                        <td>1 White, 3 Red</td>
                        <td>3.50 </td>
                    </tr>
                    <tr>
                        <td>3 White, 1 Red</td>
                        <td>3.50 </td>
                    </tr>
                    <tr>
                        <td>EVEN (Either 4 White, 2 White And 2 Red, Or 4 Red) </td>
                        <td>1.97 </td>
                    </tr>
                    <tr>
                        <td>ODD (Either 3 White And 1 Red Or 1 White And 3 Red) </td>
                        <td>1.97 </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection