<div class="col-md-5 mt-md-0 mt-4">
        <div class="card h-100 mb-4">

            <div class="card-header pb-0 px-3">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="mb-0 text-sm">Create Client Reviews</h6>
                    </div>
                </div>
            </div>

            <div class="card-body pt-3">

                <form method="POST" action="{{ route('reviews.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12 mb-3">

                            <label class="form-label">Customer Name</label>
                            <div class="input-group">
                                <input id="name" name="name" class="form-control text-xs py-3" type="text" placeholder="Enter Client Name" required value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Location</label>
                            <div class="input-group">
                                <input id="location" name="location" class="form-control text-xs py-3" type="text" placeholder="Enter Location" required value="{{ old('location') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Comment</label>
                            <div class="input-group">
                                <textarea name="comment" class="form-control" required value="{{ old('comment') }}" id="" cols="30" rows=8"></textarea>
                            </div>
                        </div>

                        <div class="input-group mt-3">
                            <button type="submit" class="btn w-100 btn-secondary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>