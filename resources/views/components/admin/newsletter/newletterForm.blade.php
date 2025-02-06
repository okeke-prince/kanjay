<div class="col-md-7">

    <div class="card" id="basic-info">
        <div class="card-header">
            <h5>Basic Info</h5>
        </div>
        <div class="card-body pt-0">

            <form method="POST" action="{{ route('sendNewsletter') }}">
                @csrf

                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Subject</label>
                        <div class="input-group">
                            <input id="name" name="subject" class="form-control text-xs py-3" type="text" placeholder="Enter Subject" required value="{{ old('subject') }}">
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Content</label>
                        <div class="input-group">
                            <textarea id="editor" name="content" style="height: 300px;">{{ old('content') }}</textarea>
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