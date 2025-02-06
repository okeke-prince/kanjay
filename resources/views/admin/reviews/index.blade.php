@extends('layouts.dashboard.app')

@section('content')

<div class="row mt-4">

    @include('components.admin.reviews.ReviewList')

    @include('components.admin.reviews.ReviewForm')

</div>

@include('components.admin.reviews.ReviewEditModal')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Script -->
<script>
    $(document).ready(function() {
        // Handle edit button click
        $('.edit-btn').on('click', function() {
            // Get the parent list item
            var listItem = $(this).closest('li');

            // Get the FAQ ID
            var reviewId = $(this).data('review-id');
            $('#reviewId').val(reviewId);

            // Get the question and answer from the list item
            var name = listItem.find('.name').text().trim();
            var location = listItem.find('.location').text().trim();
            var comment = listItem.find('.comment').text().trim();

            // Fill the form with the selected question and answer
            $('#editName').val(name);
            $('#editLocation').val(location);
            $('#editComment').val(comment);

            // Update the form action with the FAQ ID

            var editFormAction = '{{ route("reviews.update", "__REVIEW_ID__") }}';
            $('#editForm').attr('action', editFormAction.replace('__REVIEW_ID__', reviewId));

            $('#editModal').modal('show');
        });

    });
</script>

@endsection