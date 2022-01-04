<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$service->name}}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>/</li>
                        <li>{{$service->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{asset('assets/img/img-theme/shp.png')}}" class="img-responsive" alt="{{$service->name}}">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-header">
                                            <div class="post-format-icon post-format-standard"
                                                 style="margin-top: -10px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="post-info-wrap">
                                                <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                                          rel="bookmark">{{$service->name}}</a></h2>
                                                <div class="post-meta" style="height: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="single-carousel">
                                            <div class="img-hover">
                                                <img src="{{asset('images/services/')}}/{{$service->image}}" alt=""
                                                     class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post-content">
                                            <h3>{{$service->tagline}}</h3>
                                            <p>: {{$service->description}}</p>
                                            @if($service->advantage)
                                                @php
                                                    $advantages = explode('|', $this->service->advantage);

                                                @endphp
                                                <h4>Advantage</h4>
                                                <ul class="list-styles">
                                                    @foreach($advantages as $advantage)
                                                        <li><i class="fa fa-plus"></i>{{$advantage}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                            @if($service->defective)
                                                @php
                                                    $defectives = explode('|', $this->service->defective);

                                                @endphp
                                                <h4>Exclusion</h4>
                                                <ul class="list-styles">
                                                    @foreach($defectives as $defective)
                                                    <li><i class="fa fa-minus"></i> {{$defective}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Booking Details</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Price</td>
                                                <td style="border-top: none;"><span>&#36;</span> {{$service->price}}</td>
                                            </tr>
                                            <tr>
                                                <td>Quntity</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><span>&#36;</span> {{$service->price}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <form>
                                            <input type="submit" class="btn btn-primary" name="submit"
                                                   value=" Book Now">
                                        </form>
                                    </div>
                                </div>
                            </aside>
                            <aside>
                                <h3>Related Service</h3>
                                <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                     style="max-width: 360px">
                                    <a href="{{route('detail',$related_service->slug)}}">
                                        <div class="img-hover">
                                            <img
                                                src="{{asset('images/services/thumbnails')}}/{{$related_service->image}}"
                                                alt=""
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>
                                                {{$related_service->name}}
                                            </h3>
                                            <hr class="separator">
                                            <p>{{$related_service->tagline}}</p>
                                            <div class="content-btn"><a
                                                    href="{{route('detail',$related_service->slug)}}"
                                                    class="btn btn-warning">View Details</a></div>
                                            <div class="price"><span>&#36;</span><b>From</b>{{$related_service->price}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
