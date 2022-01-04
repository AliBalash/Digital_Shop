<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$category->name}}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>/</li>
                        <li>{{$category->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>{{$category->name}}  <span>Services</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        @if($services_category->count() > 0)

            <div class="content_info" style="margin-top: -70px;">
                <div>
                    <div class="container">
                        <div class="portfolioContainer">
                            @foreach($services_category as $service)

                                <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                     style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{route('detail',$service->slug)}}">
                                        <div class="img-hover">
                                            <img width="330" height="200" src="{{asset('images/services')}}/{{$service->image}}"
                                                 alt=""
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
                </div>
            </div>
        @else
            <div style="text-align: center">
            <strong>Oops!</strong><h2>  No Services In Category</h2>

            </div>
        @endif
    </section>

</div>
