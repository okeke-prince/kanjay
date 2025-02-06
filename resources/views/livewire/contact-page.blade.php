<div>

    <livewire:breadcrumb page="Contact Us" content="For Inquiries, feedback, or special requests, our team is here to assist you. Please fill out the following fields, and we'll get back to you promptly" />

    <section class="gray-simple">
        <div class="container">

            <div class="row align-items-center justify-content-between g-4">

                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="contactForm">
                        <form wire:submit.prevent="submitForm">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="touch-block d-flex flex-column mb-4">
                                        <h2>Drop Us a Line</h2>
                                        <p>Get in touch via the form below, and we will reply as soon as we can.</p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" wire:model="name" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" wire:model="email" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone No.</label>
                                        <input type="tel" wire:model="phone" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subject</label>
                                        <input type="text" wire:model="Mailsubject" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea wire:model="message" required class="form-control ht-120"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">

                                    <div class="form-group mb-0">
                                        <button wire:loading.attr="disabled" type="submit" class="btn fw-medium btn-primary">
                                            <span style="margin-right: 6px;" wire:loading wire:target="submitForm" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12">

                    <div class="card p-4 rounded-4 text-center mb-3">
                        <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
                        </div>
                        <div class="crds-desc">
                            <h5>Drop a Mail</h5>
                            <p class="text-md lh-2 mb-0">info@kanjay.ng</p>
                        </div>
                    </div>

                    <div class="card p-4 rounded-4 text-center mb-3">
                        <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="crds-desc">
                            <h5>Call Us</h5>
                            <p class="text-md lh-2 mb-0">+234 701 714 5916</p>
                        </div>
                    </div>

                    <div class="card p-4 rounded-4 text-center">
                        <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="crds-desc">
                            <h5>Connect with Social</h5>
                            <p class="text-md lh-2 pb-2">Connect with us on various social media platforms to stay updated on the latest travel trends, exclusive offers, and captivating destinations. Follow us on:</p>
                            <ul class="list-inline mb-0">

                                <li class="list-inline-item"> <a class="square--40 circle gray-simple color--facebook" target="_blank" href="https://web.facebook.com/profile.php?id=61552349611152"><i class="fa-brands fa-facebook-f"></i></a> </li>

                                <li class="list-inline-item">
                                    <a class="square--40 circle gray-simple color--instagram" target="_blank" href="https://www.instagram.com/Kanjay_travelsandtours/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>


                                <li class="list-inline-item"> <a class="square--40 circle gray-simple color--linkedin" target="_blank" href="https://www.linkedin.com/company/Kanjay-travels-and-tours/"><i class="fa-brands fa-linkedin"></i></a> </li>

                                <li class="list-inline-item"> <a class="square--40 circle gray-simple color--twitter" target="_blank" href="https://twitter.com/KanjayTandT"><i class="fa-brands fa-twitter"></i></a> </li>
                                <!-- <li class="list-inline-item"> <a class="square--40 circle gray-simple color--googleplus" href="#"><i class="fa-brands fa-youtube"></i></a> </li> -->
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <iframe class="full-width ht-400 grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070397.079050278!2d3.3747885913201485!3d9.006741251887354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1704743164233!5m2!1sen!2sng" height="400" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

        </div>
    </section>

</div>