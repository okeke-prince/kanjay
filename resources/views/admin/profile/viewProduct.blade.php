@extends('layouts.dashboard.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Product Details</h5>
                <div class="row">

                    <div class="col-xl-5 col-lg-6 text-center">
                        <img height="350" class="w-100 object-cover border-radius-lg shadow-lg mx-auto" src="{{ asset($product->images[0]->image_path) }}" alt="chair">

                        <div class="my-gallery d-flex gap-3 mt-4 pt-2">

                            @foreach($product->images as $image)

                            <figure>
                                <img width="80" height="80" class="border-radius-lg shadow" src="{{ asset($image->image_path) }}" alt="Image description">
                            </figure>

                            @endforeach

                        </div>

                    </div>

                    <div class="col-lg-5 mx-auto">
                        <h3 class="mt-lg-0 mt-4"> {{ $product->name }} </h3>

                        <div class="d-flex align-items-center gap-5 flex-wrap">

                            <div class="">
                                <h6 class="text-sm mb-1 mt-3">Price</h6>
                                <h5 class=""> @currency_format($product->price)</h5>
                            </div>

                            <div class="">
                                <h6 class="text-sm mb-1 mt-3">Weight</h6>
                                <h5 class=""> {{$product->weight}}</h5>
                            </div>

                            <div class="">
                                <h6 class="text-sm mb-1 mt-3">Warranty</h6>
                                <h5 class=""> {{$product->warranty}}</h5>
                            </div>

                        </div>

                        <div class="d-flex align-items-center gap-5 flex-wrap">

                            <div class="">
                                <h6 class="mb-1 text-sm mt-3">Brand</h6>
                                <h5 class=" fw-bold"> {{$product->brand}}</h5>
                            </div>

                            <div class="">
                                <h6 class="text-sm mb-1 mt-3">Manufacturer</h6>
                                <h5 class=""> {{$product->manufacturer}}</h5>
                            </div>

                            <div class="">
                                <h6 class="text-sm mb-1 mt-3">Model</h6>
                                <h5 class=""> {{$product->model}}</h5>
                            </div>

                        </div>


                        <label class="mt-4">Description</label>
                        <ul>
                            <li class=""> {{ $product->description }} </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection