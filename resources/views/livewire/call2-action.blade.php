<div>

    <!-- ============================ Call To Action Start ================================== -->
    <div class="position-relative bg-cover py-0 bg-dark" style="background:url(assets/img/bg2.png)no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="calltoAction-wraps position-relative py-5 px-4">
                        <div class="ht-40"></div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

                                <div class="calltoAction-title mb-5">
                                    <h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Special Discount with Kandra
                                    </h4>
                                </div>
                                <div class="newsletter-forms mt-md-0 mt-4">
                                    <form wire:submit.prevent="submitForm">
                                        <div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

                                            <div class="col-xl-9 col-lg-8 col-md-8">
                                                <div class="form-group m-0">
                                                    <input type="email" wire:model="email" required class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4">

                                                <div class="form-group m-0">
                                                    <button wire:loading.attr="disabled" type="submit" class="btn btn-primary fw-medium full-width">
                                                        <span style="margin-right: 6px;" wire:loading wire:target="submitForm" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Submit</button>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="ht-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Call To Action Start ================================== -->

</div>