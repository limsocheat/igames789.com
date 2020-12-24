<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($ben1 as $index => $slide)
                    <li data-target="#carousel1_indicator" data-slide-to="{{ $index }}"
                        class="{{ $index!=0 ? 'active' : null }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($ben1 as $index => $slide)
                    <div class="carousel-item {{ $index==0 ? 'active' : null }} ">
                        <a href="#">
                            <img src="{{ asset($slide->image) }}" class="py-1 w-100" alt="{{ $slide->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div id="carousel3_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($promotion1 as $index => $slide)
                    <li data-target="#carousel3_indicator" data-slide-to="{{ $index }}"
                        class="{{ $index!=0 ? 'active' : null }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($promotion1 as $index => $slide)
                    <div class="carousel-item {{ $index==0 ? 'active' : null }} ">
                        <a href="#">
                            <img src="{{ asset($slide->image) }}" class="py-1 w-100" alt="{{ $slide->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel3_indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carousel3_indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div id="carousel6_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($ben2 as $index => $slide)
                    <li data-target="#carousel6_indicator" data-slide-to="{{ $index }}"
                        class="{{ $index!=0 ? 'active' : null }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($ben2 as $index => $slide)
                    <div class="carousel-item {{ $index==0 ? 'active' : null }} ">
                        <a href="#">
                            <img src="{{ asset($slide->image) }}" class="py-1 w-100" alt="{{ $slide->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel6_indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel6_indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div id="carousel7_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($promotion2 as $index => $slide)
                    <li data-target="#carousel7_indicator" data-slide-to="{{ $index }}"
                        class="{{ $index!=0 ? 'active' : null }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($promotion2 as $index => $slide)
                    <div class="carousel-item {{ $index==0 ? 'active' : null }} ">
                        <a href="#">
                            <img src="{{ asset($slide->image) }}" class="py-1 w-100" alt="{{ $slide->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel7_indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carousel7_indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>