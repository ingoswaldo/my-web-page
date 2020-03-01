<div id="project__content" class="zoom-anim-dialog">
    <div class="container">
        <!-- Content -->
        <div class="row">
            <div class="col-xs-12 col-sm-8">

                <!--Start slider-->
                <div id="MySlider1" class="carousel slide " data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        @foreach($images as $image)
                            <li data-target="#MySlider1" data-slide-to="{{ $loop->index }}" class="{{ $loop->first? 'active':'' }}"></li>
                        @endforeach
                    </ol>

                    <!--Wrapper for slides-->
                    <div class="carousel-inner" role="listbox">
                        @foreach($images as $image)
                            <div class="item {{ $loop->first? 'active':'' }}">
                                <img src="{{ $image }}" alt="slider" class="full_width">
                            </div>
                        @endforeach
                    </div>

                    <!--Controls-->
                    <a class="left carousel-control" href="#MySlider1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">@lang('pagination.previous')</span>
                    </a>
                    <a class="right carousel-control" href="#MySlider1" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">@lang('pagination.next')</span>
                    </a>
                </div>
                <!--End slider-->

            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>{{ $name }}</h3>
                <ul class="list-unstyled project_info">
                    @if(isset($client))
                        <li><span>@lang('website.sections.works.client') </span>: {{ $client }}</li>
                    @endif

                    @if(isset($date))
                        <li><span>@lang('website.date') </span>: {{ $date }}</li>
                    @endif

                    @if(isset($skills))
                        <li><span>@lang('website.skills') </span>: {{ $skills }}</li>
                    @endif
                </ul>
                <p class="text-justify">@lang('website.sections.works.descriptions.'. $name)</p>
        </div>
    </div>
</div>
