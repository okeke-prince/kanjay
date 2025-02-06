<div class="col-md-7">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Faq's Questions & Answers</h6>
        </div>

        <div class="card-body pt-4 p-3">
            <ul class="list-group">

                @foreach ($faqs as $faq)
                <li class="list-group-item border-0 py-2 px-3 my-2 bg-gray-100 border-radius-lg">

                    <div class="d-flex align-items-center">
                        <h6 class="mb-3 text-sm question"> {{ $faq->question }} </h6>
                    </div>

                    <div class="d-flex flex-column">
                        <span class="mb-2 answer" style="font-size: 13px;"> {{ $faq->answer }} </span>
                    </div>

                    <div class="ms-auto d-flex align-items-center justify-content-end text-end">

                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger text-gradient mb-0" onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                            </button>
                        </form>

                        <button class="btn btn-link text-dark mb-0 edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-faq-id="{{ $faq->id }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>

                    </div>

                </li>
                @endforeach

            </ul>
        </div>

    </div>
</div>