@extends('layouts.dashboard.app')

@section('content')

<div class="row mt-4">

    @include('components.admin.newsletter.newsletterList')

    @include('components.admin.newsletter.newletterForm')

</div>

@endsection