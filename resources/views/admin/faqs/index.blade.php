@extends('layouts.dashboard.app')

@section('content')

<div class="row mt-4">

    @include('components.admin.Faq.FaqList')

    @include('components.admin.Faq.FaqForm')

</div>

@include('components.admin.Faq.FaqEditModal')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Script -->
<script>
    $(document).ready(function() {
        // Handle edit button click
        $('.edit-btn').on('click', function() {
            // Get the parent list item
            var listItem = $(this).closest('li');

            // Get the FAQ ID
            var faqId = $(this).data('faq-id');
            $('#faqId').val(faqId);

            // Get the question and answer from the list item
            var question = listItem.find('.question').text().trim();
            var answer = listItem.find('.answer').text().trim();

            // Fill the form with the selected question and answer
            $('#editQuestion').val(question);
            $('#editAnswer').val(answer);

            // Update the form action with the FAQ ID

            var editFormAction = '{{ route("faqs.update", "__FAQ_ID__") }}';
            $('#editForm').attr('action', editFormAction.replace('__FAQ_ID__', faqId));

            $('#editModal').modal('show');
        });

    });
</script>

@endsection