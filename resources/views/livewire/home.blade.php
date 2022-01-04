<div wire:ignore>

    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                @foreach($sliders as $slider)
                    @if($slider->status ==true)
                        <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                            data-saveperformance="off" data-title="Slide">
                            <img src="{{asset('images/slide/')}}/{{$slider->image}}" alt="fullslide1"
                                 data-bgposition="center center"
                                 data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                                 data-bgfitend="100" data-bgpositionend="right center">
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title" style="top: 150px">
            <div class="filter-header">
                <input type="text" id="q" wire:model="search" name="q" required="required"
                       placeholder="What Services do you want?"
                       class="input-large typeahead" autocomplete="off">
                <input type="submit" name="submit"  value="Search" wire:click.prevent="search()">

            </div>
        </div>
    </section>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach($categories as $category)
                                <li data-toggle="tooltip" title="{{$category->name}}"
                                    data-original-title="{{$category->name}}">
                                    <a href="{{route('category',$category->slug)}}"><img
                                            src="{{asset('images/categories')}}/{{$category->image}}" height="100"
                                            width="100" alt="{{$category->name}}"></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{asset('assets/img/img-theme/shp')}}.png" class="" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>SurfsideMedia <span>Choice</span> of Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach($last_services as $last_service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                 style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{route('detail',$last_service->slug)}}">
                                    <div class="img-hover">
                                        <img src="{{asset('images/services/')}}/{{$last_service->image}}"
                                             alt="{{$last_service->name}}" width="275" height="190"
                                        >
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{$last_service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$last_service->tagline}}</p>
                                        <div class="content-btn"><a href="service-details/ac-dry-servicing.html"
                                                                    class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>{{$last_service->price}}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>WELCOME TO DIVERSIFIED</h2>
                                <p class="lead">
                                    Book best services at one place.
                                    <span class="line"></span>
                                </p>

                                <p>Find a wide variety of home services.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">
                                @foreach($best_categories as $cat)
                                    <li>
                                        <a href="{{route('category',$cat->slug)}}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                                   src="{{asset('images/categories')}}/{{$cat->image}}"
                                                                   alt="{{$cat->name}}" width="100" height="80"></i>
                                                <h5>{{$cat->name}}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>Appliance</span>Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                @foreach($services as $service)
                    <div>
                        <a class="g-list" href="{{route('detail',$service->slug)}}">
                            <div class="img-hover">
                                <img width="275" height="190" src="{{asset('images/services/')}}/{{$service->image}}"
                                     alt="{{$service->name}}"
                                     class="">
                            </div>

                            <div class="info-gallery">
                                <h3>{{$service->name}}</h3>
                                <hr class="separator">
                                <p>{{$service->tagline}}</p>
                                <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                                            class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>{{$service->price}}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
