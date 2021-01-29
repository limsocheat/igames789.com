@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>An Ancient Chinese game form the village, popular in the latter half of 19th century. Tables design with
                a
                box in the center, the betting area are labeled with number 1,2,3,4. Dealer will open the cover and
                scoop a
                bunch of buttons/beads with a cup. The dealer will devide the beads 4 by 4 with a small stick. The
                objective
                of this game is to bet the last remaining number of Bead(s) between the 1 to 4 will be the winning
                number.
                Ex: If left 1 bead then winning number is 1, left 2 beads then winning number is 2, left 3 beads then
                winning number is 3 and if left 4 beads then winning number is 4.</p>
            <ul class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/fantan1.jpg?tdsotm=20170107dy"
                        alt="Fantan"></div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/fantan2.jpg?tdsotm=20170107dy"
                        alt="Fantan"></div>
            </ul>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <h3 class="text-warning text-underline">Rule Details:</h3>
            <table class="tablerule table table-dark">
                <tbody>
                    <tr>
                        <td>White Represents</td>
                        <td>1 </td>
                    </tr>
                    <tr>
                        <td>Green Represents</td>
                        <td>2 </td>
                    </tr>
                    <tr>
                        <td>Yellow Represents</td>
                        <td>3 </td>
                    </tr>
                    <tr>
                        <td>Red Represents</td>
                        <td>4 </td>
                    </tr>
                </tbody>
            </table>

            <p class="clear"><br>
            </p>
            <h4 class="text-warning text-underline">Fan (Single number bets)</h4>
            <p>A bet on single number. Pays 1: 2.85</p>
            <h4 class="text-warning text-underline">Read:</h4>
            <p>A bet on two numbers, one of which is indicated as a push. Such as the idea to bet 4,3 then if the
                remaining
                number is 4 then win, if the remaining number is 3, then its a push. If the remaining number is 1 or 2,
                then
                lose. Other 1 read 2 read 3 and so on, meaning the same. Pays 1: 1.9</p>
            <h4 class="text-warning text-underline">Angle:</h4>
            <p>A bet on two numbers, both numbers win. Pays 1 : 0.95</p>
            <h4 class="text-warning text-underline">Through:</h4>
            <p>A bet on three numbers, one of which is indicated as a push. Pays 2 : 0.95</p>
            <h4 class="text-warning text-underline">Three:</h4>
            <p>A bet on three numbers, all of which win. Pays 3 : 0.95</p>

        </section>
    </div>
</div>
@endsection