<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $index => $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : null }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
            <div class="carousel-item {{ $index == 0 ? 'active' : null }}">
                <img class="d-block w-100" src="{{ $slider['image_url'] }}" alt="First slide">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-4">

        </div>
        <div class="col-xl-4">
            <div class="rollate mt-4" align="center"><img
                    src="https://design.khmergaming.com/template3/images/roulette.gif" style="max-height: 450px;">
            </div>
        </div>
        <div class="col-xl-4">
            <div class="rollate mt-4" align="center"><img src="{{ asset('/images/image_2.jpg') }}"
                    style="max-height: 250px;" /></div>
        </div>
    </div>
</div>