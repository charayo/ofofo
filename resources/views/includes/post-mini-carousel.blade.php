@if (count($posts)>0)
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-danger p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[0]['image'] .'')}}" alt="First slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[0]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[0]['post_details'])>50)
                                            {{substr($posts[0]['post_details'],0,50) .'...'}}
                                        @endif        
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-danger p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[1]['image'] .'')}}" alt="First slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[1]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[1]['post_details'])>50)
                                        {{substr($posts[1]['post_details'],0,50) .'...'}}
                                        @endif                                 
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-danger p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[2]['image'] .'')}}" alt="First slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[2]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[2]['post_details'])>50)
                                        {{substr($posts[2]['post_details'],0,50) .'...'}}
                                    @endif                                  
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-dark p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[3]['image'] .'')}}" alt="2nd slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[3]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[3]['post_details'])>50)
                                        {{substr($posts[3]['post_details'],0,50) .'...'}}
                                    @endif                                 
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-dark p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[4]['image'] .'')}}" alt="2nd slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[4]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[4]['post_details'])>50)
                                        {{substr($posts[4]['post_details'],0,50) .'...'}}
                                    @endif                                  
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-dark p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[5]['image'] .'')}}" alt="2nd slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[5]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[5]['post_details'])>50)
                                        {{substr($posts[5]['post_details'],0,50) .'...'}}
                                    @endif                                  
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-success p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[6]['image'] .'')}}" alt="Third slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    <h6>{{$posts[6]['post_title']}}</h6>
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[6]['post_details'])>50)
                                        {{substr($posts[6]['post_details'],0,50) .'...'}}
                                    @endif                                  
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-success p-0 m-0 p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[7]['image'] .'')}}"  alt="Third slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    @if (count($posts)>7)
                                        <h6>{{$posts[7]['post_title']}}</h6>
                                    @endif
                                    
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[7]['post_details'])>50)
                                        {{substr($posts[7]['post_details'],0,50) .'...'}}
                                    @endif                                 
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-4 m-2" style="font-size: small">
                        <div class="row">
                            <div class="col-md-5 bg-success p-0 m-0">
                                <img class=" img-thumbnai border-0" width="100%" height="100%" src="{{asset('images/'. $posts[8]['image'] .'')}}" alt="Third slide">
                            </div>
                            <div class="col-md-7">
                                <div class="title-block">
                                    @if (count($posts)>8)
                                    <h6>{{$posts[8]['post_title']}}</h6>
                                @endif
                                </div>
                                <div class="post-block">
                                    <p>
                                        @if (strlen($posts[8]['post_details'])>50)
                                        {{substr($posts[8]['post_details'],0,50) .'...'}}
                                    @endif                                  
                                    </p>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-dark bg-transparent text-dark" style="font-size: small">Read more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
    </div>


    <!-- Slider buttons -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@else
    <div class="container p-3 bg-light">
        <h3>Loading Post Carousel...</h3>
    </div>
@endif