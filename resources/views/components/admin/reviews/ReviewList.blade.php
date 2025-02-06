<div class="col-md-7">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Reviews Lists</h6>
        </div>

        <div class="card-body pt-4 p-3">
            <ul class="list-group">

                @foreach ($reviews as $review)
                <li class="list-group-item border-0 py-2 px-3 my-2 bg-gray-100 border-radius-lg">

                    <div class="mb-3">
                        <h6 class="mb-0 text-sm name"> {{ $review->name }} </h6>
                        <span class="mb-2 fw-bold location" style="font-size: 13px;">{{ $review->location }} </span>
                    </div>

                    <div class="d-flex flex-column">
                        <span class="mb-2 comment" style="font-size: 13px;"> {{ $review->comment }} </span>
                    </div>

                    <div class="ms-auto d-flex align-items-center justify-content-end text-end">

                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger text-gradient mb-0" onclick="return confirm('Are you sure you want to delete this Review?')">
                                <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                            </button>
                        </form>

                        <button class="btn btn-link text-dark mb-0 edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-review-id="{{ $review->id }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>

                    </div>

                </li>
                @endforeach

            </ul>
        </div>

    </div>
</div>