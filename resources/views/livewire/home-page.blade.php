<style>
    /* Ensure the section has relative positioning */
    section.video-section {
        position: relative;
        overflow: hidden; /* Ensures video stays within the section */
        height: 100vh; /* or any other desired height */
    }

    /* Video background specific to the section */
    .video-section .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    /* Overlay within the section */
    .video-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 0, 0, 0.5)ks; Semi-transparent overlay */
        z-index: 0;
    }

    /* Content styling within the section */
    .video-section .content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div>

    @include('components.Banner')

    <!-- ============================ Our Partners =========================== -->
    <!-- @include('components.Partnership') -->
    <!-- ============================ Our Partners =========================== -->

    <section class="video-section border border-danger">
        <video autoplay muted loop class="video-background">
            <source src="assets/img/bg-vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    
        <!-- Optional: Overlay -->
        <div class="overlay"></div>
    
        <!-- Content on top of the video -->
        <div class="content">
            <div class="container">
                <h1>Welcome to My Website</h1>
                <p>This is a simple video background example using HTML and Bootstrap.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </section>
    <!-- ============================ Features Start ================================== -->
    <section class="border-bottom features_tour text-xl-left">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
                    <div class="featuresBox-wrap">
                        <div class="featuresBox-icons mb-3">
                            <i class="fa-solid fa-sack-dollar fs-1 text-primary"></i>
                        </div>
                        <div class="featuresBox-captions">
                            <h4 class="fw-bold fs-5 lh-base mb-0">Easy Booking</h4>
                            <p class="m-0">Experience hassle-free and convenient booking with our user-friendly platform. We believe in simplifying the booking process to provide you with a seamless and enjoyable experience.</p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
                    <div class="featuresBox-wrap">
                        <div class="featuresBox-icons mb-3">
                            <i class="fa-solid fa-person-walking-luggage fs-1 text-primary"></i>
                        </div>
                        <div class="featuresBox-captions">
                            <h4 class="fw-bold fs-5 lh-base mb-0">Travel Guides</h4>
                            <p class="m-0">Embark on unforgettable journeys with our expertly crafted travel guides. Immerse yourself in destinations curated to perfection, ensuring every adventure is a story waiting to be told.</p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
                    <div class="featuresBox-wrap">
                        <div class="featuresBox-icons mb-3">
                            <i class="fa-solid fa-headset fs-1 text-primary"></i>
                        </div>
                        <div class="featuresBox-captions">
                            <h4 class="fw-bold fs-5 lh-base mb-0">Friendly Support</h4>
                            <p class="m-0">Experience our commitment to your satisfaction with our friendly support team. Just like Kanjay eloquently defended his principles, we stand ready to assist you whenever you need help, ensuring a seamless and enjoyable experience.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Features End ================================== -->

    <!-- ============================ Flexible features End ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-12 position-relative pe-xl-5 pe-lg-4 pe-md-4 pb-xl-5 pb-lg-4 pb-md-4">
                    <div class="position-relative mb-lg-0 mb-4">
                        <img src="{{ asset($homeImage_1->image_path) }}" class="img-fluid rounded-3 position-relative z-1" alt="">
                        <div class="position-absolute bottom-0 start-0 z-index-1 mb-4 mx-5">
                            <div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3 z-2">

                                Connecting Dreams, Crafting Journeys.

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row gy-xl-5 g-4">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="fbxer-wraps">
                                <div class="fbxerWraps-icons mb-3">
                                    <div class="square--70 circle bg-light-primary"><i class="fa-solid fa-handshake text-light fs-3"></i>
                                    </div>
                                </div>
                                <div class="fbxerWraps-caps">
                                    <h5 class="fw-bold fs-6">Get Superb Deals</h5>
                                    <p class="fw-normal fs-7 m-0">Unlock exclusive travel deals for unforgettable journeys. Discover extraordinary destinations at incredible prices!</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="fbxer-wraps">
                                <div class="fbxerWraps-icons mb-3">
                                    <div class="square--70 circle bg-light-info"><i class="fa-solid fa-eye text-info fs-3"></i></div>
                                </div>
                                <div class="fbxerWraps-caps">
                                    <h5 class="fw-bold fs-6">100% Transparency Price</h5>
                                    <p class="fw-normal fs-7 m-0">Explore worry-free with our transparent pricing. No hidden fees, just straightforward and honest costs for your unforgettable travel experiences.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="fbxer-wraps">
                                <div class="fbxerWraps-icons mb-3">
                                    <div class="square--70 circle bg-light-success"><i class="fa-solid fa-check text-success fs-3"></i>
                                    </div>
                                </div>
                                <div class="fbxerWraps-caps">
                                    <h5 class="fw-bold fs-6">Pure Trusted & Free</h5>
                                    <p class="fw-normal fs-7 m-0">Explore with confidence. Our commitment: Pure trust and freedom in every journey.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="fbxer-wraps">
                                <div class="fbxerWraps-icons mb-3">
                                    <div class="square--70 circle bg-light-warning"><i class="fa-solid fa-plane text-warning fs-3"></i>
                                    </div>
                                </div>
                                <div class="fbxerWraps-caps">
                                    <h5 class="fw-bold fs-6">Travel With Confidence</h5>
                                    <p class="fw-normal fs-7 m-0">Explore fearlessly. Our commitment ensures you travel with confidence, creating experiences that speak to your adventurous spirit.</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Flexible features End ================================== -->

    <!-- ============================ Locations Design Start ================================== -->
    <!-- @include('components.Location') -->
    <!-- ============================ Locations Design Start ================================== -->

    <!-- ============================ Explore International tours =========================== -->
    @include('components.Explore')
    <!-- ============================ Explore International tours =========================== -->

    <!-- ============================ Our Reviews Start ================================== -->
    @include('components.Reviews')
    <!-- ============================ Our Reviews End ================================== -->
    <!-- ============================ Call To Action Start ================================== -->
    <livewire:call2-action />
    <!-- ============================ Call To Action End ================================== -->
</div>