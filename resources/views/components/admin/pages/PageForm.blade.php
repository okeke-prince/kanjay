<div class="col-md-5 mt-md-0 mt-4">
    <div class="card h-100 mb-4">

        <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="mb-0 text-sm">Upload / Update Page section Images</h6>
                </div>
            </div>
        </div>

        <div class="card-body pt-3">

            <form method="POST" action="{{ route('images.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Section</label>
                        <div class="input-group">
                            <select id="name" name="section" class="form-control text-xs py-3" type="text" placeholder="Section" required value="{{ old('section') }}">
                                <option value="" selected disabled> -- Select section -- </option>
                                @foreach(\App\Models\PageImage::$sections as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Image</label>
                        <div class="input-group">
                            <input type="file" name="image" required class="form-control">
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