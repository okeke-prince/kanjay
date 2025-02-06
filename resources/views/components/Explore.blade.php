<?php

use App\Models\PopularRoutes;

$locations = PopularRoutes::latest()->get();

?>

@if($locations->isNotEmpty())

<section class="pt-5">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                <div class="secHeading-wrap text-center mb-5">
                    <h2>Popular International Routes</h2>
                    <p>Discover extraordinary destinations as we guide you through a world of travel possibilities. </p>
                </div>

            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="main-carousel cols-4 dots-full">

                    @foreach ($locations as $location)
                    <div class="carousel-cell">
                        <div class="pop-touritem mb-4">
                            <a href="/location/{{$location->id}}" class="card rounded-3 shadow-wrap h-100 m-0">
                                <div class="flight-thumb-wrapper">
                                    <div class="popFlights-item-overHidden">
                                        <img src="{{ asset('uploads/' . $location->image) }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="touritem-middle position-relative p-3">
                                    <div class="touritem-flexxer">
                                        <h4 class="city fs-6 m-0 fw-bold">
                                            <span> {{ $location->title }} </span>
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z" fill="currentColor" />
                                                    <path opacity="0.3" d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span> {{ $location->location }} </span>
                                        </h4>
                                        <p class="detail ellipsis-container">
                                            <span class="ellipsis-item__normal"> <b>Type:</b> {{ $location->type }} </span>
                                            {{-- <span class="separate ellipsis-item__normal"></span>  --}}
                                        </p>
                                    </div>
                                    <p> {!! \Illuminate\Support\Str::limit($location->details, 100) !!} </p>
                                    {{-- <div class="flight-foots">
                                        <h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price"> NGN{{ number_format($location->amount) }} </span></h5>
                                    </div>  --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>
</section>

@endif