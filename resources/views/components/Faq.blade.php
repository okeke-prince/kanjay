		<!-- ============================ FAQ's Section ================================== -->

		<?php

		use App\Models\Faq;

		$faqs = Faq::latest()->get();

		?>

		<section id="faq" class="gray-simple">
			<div class="container">

				<div class="row mb-4">
					<div class="col-12 text-center">
						<h2>Your Journey, Your Questions Answered</h2>
						<p class="mb-0">Embark on your travel adventure with confidence. Explore our frequently asked questions to enhance your experience with Kanjay Travels And Tours.</p>
					</div>

				</div>

				<div class="row align-items-start">
					<div class="col-xl-12 col-lg-12 col-md-12 mt-4">

						<div class="accordion accordion-flush" id="accordionFlushExample">

							@foreach($faqs as $faq)
							<div class="accordion-item rounded-3">
								<h2 class="accordion-header rounded-2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{ $faq->id }}" aria-expanded="false" aria-controls="flush-{{ $faq->id }}">
										{{ $faq->question }}
									</button>
								</h2>
								<div id="flush-{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										{{ $faq->answer }}
									</div>
								</div>
							</div>
							@endforeach

						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- ============================ FAQ's Section End ================================== -->