@extends('layouts.dashboard.app')

@section('content')

<div class="row">

    <div class="col-md-5 mb-4">

        <div class="card" id="basic-info">
            <div class="card-header">
                <h5>Basic Info</h5>
            </div>
            <div class="card-body pt-0">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <input id="name" name="name" class="form-control" type="text" placeholder="Alec" required value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com" required value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Select Role</label>
                            <div class="input-group">
                                <select id="" name="role" class="form-control" required>
                                    <option value=""> -- Select Role --</option>
                                    <option value="0">Sub Admin</option>
                                    <option value="1">Super Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <input id="password" name="password" class="form-control" type="password" placeholder="Your password" required>
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

    <div class="col-md-7">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Admin's Information</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">

                    @foreach($users as $user)

                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">{{ $user->name }}</h6>
                            <span class="mb-2 text-sm">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">{{ $user->email }}</span></span>
                            <span class="mb-2 text-sm">Role: <span class="text-dark ms-sm-2 font-weight-bold">
                                    @if ($user->role === 1)
                                    Super Admin
                                    @else
                                    Sub Admin
                                    @endif
                                </span></span>
                        </div>
                        <div class="ms-auto text-end">

                            <form action="{{ route('delete.user', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                                </button>
                            </form>

                            <a href="{{ route('update.password', $user->id) }}">
                                <button type="submit" class="btn btn-success btn-sm px-3 mb-0">
                                    <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Update Password
                                </button>
                            </a>

                        </div>
                    </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>

@endsection