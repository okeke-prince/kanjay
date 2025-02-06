<?php

use App\Models\PopularRoutes;
use App\Models\locations;

$location = PopularRoutes::where('id', $id)->first();

?>

<div>

    <livewire:breadcrumb page="{{ $location->title }}" content="" />

    <section class="pt-5 gray-simple">
        <div class="container px-4">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- Overview -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="">
                            <h3 class="fw-semibold pb-0"> {{ $location->title }} </h3>
                            <p class="pb-0 mb-0"><b>Type:</b> {{ $location->type }} </p>
                            <p class="pb-0 mb-0"><b>Location:</b> {{ $location->location }} </p>
                            @if($location->amount)
                            <p class="pb-0 mb-0"><b>Price:</b> NGN{{ number_format($location->amount) }}</p>
                            @endif

                        </div>
                    </div>

                    <div class="card-body">

                        <div class="flight-thumb-wrapper text-center m-auto mb-4">
                            <div class="popFlights-item-overHidde">
                                <img src="{{ asset('uploads/' . $location->image) }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <p class="mb-0"> {!! $location->details !!} </p>

                        @if($location->document)
                        <div class="text-center m-auto mt-5">
                            <a href="{{ asset('uploads/documents/' .$location->document) }}" download="{{ $location->document }}">
                                <button class="btn btn-primary py-2">Download Document</button>
                            </a>
                        </div>
                        @endif


                    </div>
                </div>
            </div>

        </div>

    </section>

</div>