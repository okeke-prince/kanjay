<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST">
                    @csrf
                    @method('PATCH')

                    <!-- Hidden input to store FAQ ID -->
                    <input type="hidden" id="faqId" name="faqId">

                    <div class="mb-3">
                        <label for="editQuestion" class="form-label">Question</label>
                        <input type="text" class="form-control" id="editQuestion" name="question" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAnswer" class="form-label">Answer</label>
                        <textarea class="form-control" id="editAnswer" name="answer" rows="8" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


