<?php

use App\Models\Services;

$service = Services::where('slug', $slug)->first();

?>

<div>

    <livewire:breadcrumb page="{{ $service->title }}" content="" />

    <section class="pt-5 gray-simple">
        <div class="container">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- Overview -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-semibold mb-0"> {{ $service->title }} </h6>
                    </div>

                    <div class="card-body">
                        <p class="mb-0"> {!! $service->details !!} </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

</div>