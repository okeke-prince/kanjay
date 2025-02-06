@extends('layouts.dashboard.app')

@section('content')

<div class="col-12">

    <div class="card">

        <div class="card-header pb-0">
            <div class="d-lg-flex">

                <div>
                    <h5 class="mb-0">All services</h5>
                    <p class="text-sm mb-0">

                    </p>
                </div>

                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="{{ route('services.create') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Add Service</a>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subtitle</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">details</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($services as $service)

                        <tr>

                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset($service->image) }}" class="avatar avatar-sm me-3" alt="{{ $service->title }}">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm"> {{ $service->title }} </h6>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <p class="text-sm text-secondary mb-0"> {{ $service->subtitle }}
                                </p>
                            </td>
                            <td>
                                <p class="text-secondary mb-0 text-xs">{!! \Illuminate\Support\Str::limit($service->details, 50) !!}</p>

                            </td>

                            <td>
                                <div class="d-flex align-items-center gap-2">

                                    <form method="POST" action="{{ route('services.destroy', $service->id) }}" onsubmit="return confirm('Are you sure you want to delete service?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm px-3">Delete</button>
                                    </form>


                                    <a href="{{ route('services.edit', $service->id) }}"><button class="btn btn-success btn-sm px-3">Edit</button></a>

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