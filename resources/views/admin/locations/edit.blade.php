@extends('layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-12 col-lg-8 m-auto">

        <form class="multisteps-form__form mb-8" style="height: 408px;" method="POST" action="{{ route('locations.update', $location->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card p-3 border-radius-xl bg-white">
                <h5 class="font-weight-bolder mb-0">Edit Location</h5>
                <p class="mb-0 text-sm">Update information</p>

                <div class="multisteps-form__content">

                    <div class="row mt-3">

                        <div class="col-12 col-sm-6">
                            <label>Title</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Location title" name="title" value="{{ old('title', $location->title) }}">
                        </div>

                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Location</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Location" name="location" value="{{ old('location', $location->location) }}">
                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-12 col-sm-6">
                            <label>Type</label>
                            <input class="multisteps-form__input form-control" type="text" placeholder="Type" name="type" value="{{ old('type', $location->type) }}">
                        </div>

                        <!-- <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Days</label>
                            <input class="multisteps-form__input form-control" type="number" placeholder="Days" name="days" value="{{ old('days', $location->days) }}">
                        </div> -->

                        <div class="col-12 col-sm-6">
                            <label>Amount (Optional) </label>
                            <input class="multisteps-form__input form-control" type="number" placeholder="Amount" name="amount" value="{{ old('amount', $location->amount) }}">
                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Image</label>
                            <input class="multisteps-form__input form-control" type="file" name="image">
                        </div>

                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Document</label>
                            <input class="multisteps-form__input form-control" type="file" name="document" accept=".pdf, .doc, .docx">
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label">Details</label>
                            <div class="">
                                <textarea required id="editor" name="details" style="height: 300px; width: 100%">{{ old('details', $location->details) }}</textarea>
                                @error('details')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="button-row d-flex mt-4">
                        <button type='submit' class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" title="Update">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection