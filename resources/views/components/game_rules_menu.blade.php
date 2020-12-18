@php ($menus = [
['text' => 'Baccarat', 'route' => 'game.baccarat'],
['text' => 'Baccarat Ins', 'route' => 'game.baccarat_ins'],
['text' => 'Dragon Tiger', 'route' => 'game.dragon_tiger'],
['text' => 'Roulette', 'route' => 'game.roulette'],
['text' => 'Xocdia', 'route' => 'game.xocdia'],
['text' => 'Fantan', 'route' => 'game.fantan'],
['text' => 'Belangkai', 'route' => 'game.belangkai'],
])

<ul class="nav text-white nav-justified py-4 bg-danger mb-4">
    @foreach ($menus as $menu)
    <li class="nav-item">
        <a class="nav-link text-white text-uppercase {{  Route::currentRouteName() == $menu['route'] ? 'bg-black' : 'bg-dark' }}"
            href="{{ route($menu['route']) }}">{{ $menu['text'] }}</a>
    </li>
    @endforeach
</ul>