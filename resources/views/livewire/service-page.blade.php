<?php

use App\Models\Services;

$services = Services::latest()->get();

?>

<div>

    <livewire:breadcrumb page="Our Services" content="Explore our range of exceptional services. From unique travel experiences to personalized tour packages, we are dedicated to making your journey unforgettable. Feel free to reach out with any questions or requests. We're here to enhance your travel experience!" />

    <!-- ============================ Services ========================================== -->

    <section>
        <div class="container">

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>Discover Our Services</h2>
                        <p>Explore curated travel experiences for unforgettable journeys. Your satisfaction, our priority.</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center g-4">

                @foreach ($services as $service)

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="serviceGrid-wrap d-flex flex-column h-100">
                        <div class="serviceGrid-pics">
                            <a href="/services/{{ $service->slug }}" class="d-block"><img src="{{ asset($service->image) }}" class="img-fluid rounded" alt="{{ $service->title }}" height="40" width="40"></a>
                        </div>
                        <div class="serviceGrid-caps pt-3">
                            <div class="d-flex align-items-center mb-1"><span class="label text-info bg-light-info"> {{ $service->title }} </span></div>
                            <h4 class="fw-bold fs-6 lh-base"><a href="/services/{{ $service->slug }}" class="text-dark">{{ $service->subtitle }}</a></h4>
                            <a  href="/services/{{ $service->slug }}">
                                <p class="mb-3">{!! \Illuminate\Support\Str::limit($service->details, 150) !!}</p>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>


        </div>
    </section>

    <!-- ============================ Locations Design Start ================================== -->
    <!-- @include('components.Location') -->
    <!-- ============================ Locations Design Start ================================== -->

    <!-- ============================ Explore International tours =========================== -->
    @include('components.Explore')
    <!-- ============================ Explore International tours =========================== -->

    <!-- ============================ Our Reviews Start ================================== -->
    @include('components.Reviews')
    <!-- ============================ Our Reviews End ================================== -->

</div>