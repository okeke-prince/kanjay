@extends('layouts.dashboard.app')

@section('content')

<div class="row mt-4">

    @include('components.admin.pages.Pagelist')

    @include('components.admin.pages.PageForm')

</div>

@endsection