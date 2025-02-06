@extends('layouts.dashboard.app')

@section('content')

<div class="col-12">

    <div class="card">

        <div class="card-header pb-0">
            <div class="d-lg-flex">

                <div>
                    <h5 class="mb-0">All Locations</h5>
                    <p class="text-sm mb-0">

                    </p>
                </div>

                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="{{ route('locations.create') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; New Package</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="card-body px-0 pb-0">

            <div class="table-responsive">
                <table class="table align-items-center mb-0">

                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image & Title </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Days</th> -->
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($locations as $location)

                        <tr>

                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('uploads/' . $location->image) }}" class="avatar avatar-sm me-3" alt="{{ $location->title }}">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm"> {{ $location->title }} </h6>
                                    </div>
                                </div>
                            </td>

                            <td>
                                @if($location->amount)
                                <p class="text-sm text-secondary mb-0">{{ number_format($location->amount) }}</p>
                                @else
                                <p class="text-sm text-secondary mb-0">No Amount</p>
                                @endif
                            </td>

                            <td>
                                <p class="text-secondary mb-0 text-xs">{{ $location->location }}</p>
                            </td>

                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-xs">{{ $location->type }}</p>
                            </td>

                            <!-- <td class="align-middle text-center">
                                <span class="text-secondary text-xs">{{ $location->days }} (Days)</span>
                            </td> -->

                            <td>
                                <div class="d-flex align-items-center gap-2">

                                    <form method="POST" action="{{ route('locations.destroy', $location->id) }}" onsubmit="return confirm('Are you sure you want to delete location?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm px-3">Delete</button>
                                    </form>


                                    <a href="{{ route('locations.edit', $location->id) }}"><button class="btn btn-success btn-sm px-3">Edit</button></a>

                                </div>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>

@endsection