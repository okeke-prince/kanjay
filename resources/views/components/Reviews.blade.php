<?php

use App\Models\Review;

$reviews = Review::latest()->get();

?>

<section class="gray">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                <div class="secHeading-wrap text-center mb-5">
                    <h2>Reviews By Our Clients</h2>
                    <p>We are delighted to share some of the glowing reviews and heartfelt testimonies from our satisfied clients. Their experiences speak volumes about the quality of our service and dedication to customer satisfaction.</p>

                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3 ">

            @foreach ($reviews as $reviews)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                <div class="card border-0 rounded-3">
                    <div class="card-body">
                        
                        <div class="position-absolute top-0 end-0 mt-3 me-3"><span class="square--40 circle text-light bg-light-primary"><i class="fa-solid fa-quote-right"></i></span></div>
                        <div class="d-flex align-items-center flex-thumbes">
                            <div class="revws-caps ps-3">
                                <h6 class="fw-bold fs-6 m-0"> {{ $reviews->name }} </h6>
                                <p class="text-muted-2 text-md m-0"> {{ $reviews->location }} </p>
                            </div>
                        </div>
                        <div class="revws-desc mt-3">
                            <p class="m-0 text-md"> {{ $reviews->comment }} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>