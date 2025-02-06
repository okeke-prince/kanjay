<div class="col-md-7">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Page Images</h6>
        </div>

        <div class="card-body pt-4 p-3">
            <ul class="list-group">

                @foreach ($images as $image)

                <li class="list-group-item border-0 py-2 px-3 my-2 bg-gray-100 border-radius-lg">

                    <div class="d-flex align-items-center">

                        <div>
                            <img src="{{ asset($image->image_path) }}" class="avatar avatar-xl me-3" alt="{{ $image->section }}">
                        </div>

                        <div class="d-flex align-items-center">
                            <h6 class="text-sm"> {{ $image->section }} </h6>
                        </div>

                    </div>


                </li>

                @endforeach

            </ul>
        </div>

    </div>
</div>