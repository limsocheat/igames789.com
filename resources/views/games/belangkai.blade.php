@extends('layouts.app')

@section('content')
<div class="container text-black py-5">
    <h1 class="text-center pb-5 text-uppercase text-primary text-underline font-weight-bold">Game Rules</h1>
    @include('components.game_rules_menu')

    <div class="box_content full-width">
        <section class="box_rule">
            <p>The game Belangkai, named from the Malay "Belangkas" meaning the King Crab. It is much favoured by
                Chinese
                ladies in particular, but others also often play it including Boyans.</p>
            <ul class="row">
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/balangkai.jpg"
                        alt="Belangkai"></div>
                <div class="col-sm-12 col-md-6"><img
                        src="https://www.coin178.com/Content/themes/MemberLayout/images/rules/balangkai1.jpg"
                        alt="Belangkai"></div>
            </ul>
            <p class="clear"><br>
            </p>
            <div class="text-center">
                <button class="btn btn-primary text-center" class="bt_playrule btn_gen" target="_blank" href="#">TRY
                    NOW</button>
            </div>
            <p class="clear"><br>
            </p>
            <h3 class="text-warning text-underline">The game rules are:</h3>
            <ul>
                <li><strong>Betting Area</strong>
                    <ul>
                        <li>A King Crab.</li>
                        <li>A Flower of Star.</li>
                        <li>A Fish.</li>
                        <li>A Prawn</li>
                    </ul>
                </li>
                <li><strong>Gaming tool</strong>
                    <ul>
                        <li>A layout devided into four rectangles, each rerctangle marked with the above mention Picture
                            signs.</li>
                        <li>A saucer or small plate in which to spin the Top on.</li>
                        <li>A bowl to cover the top while spinning.</li>
                    </ul>
                </li>
            </ul>
            <p class="clear"></p>
            <table class="tablerule table table-dark">
                <thead>
                    <tr class="stitle">
                        <th></th>
                        <th>Payout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text_align_left"><span>King Crab</span></td>
                        <td>1 To 2.9</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Flower</span></td>
                        <td>1 To 2.9</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish</span></td>
                        <td>1 To 2.9</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn</span></td>
                        <td>1 To 2.9</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>King Crab Or Prawn</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>King Crab Or Flower</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn Or Fish</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish Or Flower</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn Or Flower</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish Or King Crab</span></td>
                        <td>1 To 0.95</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>King Crab Win, Prawn Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn Win, King Crab Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn Win, Fish Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish Win, Prawn Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish Win, Flower Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Flower Win, Fish Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Flower Win, King Crab Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>King Crab Win, Flower Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>King Crab Win, Fish Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Fish Win, King Crab Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Prawn Win, Flower Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                    <tr>
                        <td class="text_align_left"><span>Flower Win, Prawn Tie</span></td>
                        <td>1 To 1.90</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection