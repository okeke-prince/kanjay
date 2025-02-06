@extends('layouts.dashboard.app')

@section('content')

<div class="row">

    <div class="col-md-6 mb-4">

        <div class="card" id="basic-info">
            <div class="card-header">
                <h5>Change Password</h5>
            </div>
            <div class="card-body pt-0">

                <form method="POST" action="{{ route('password.user') }}">
                    @csrf

                    <div class="row">

                        <div class="col-12 mb-3">
                            <label class="form-label">Current Password</label>
                            <div class="input-group">
                                <input id="current_password" name="current_password" class="form-control" type="password" placeholder="Your current password" required>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">New Password</label>
                            <div class="input-group">
                                <input id="new_password" name="new_password" class="form-control" type="password" placeholder="Your new password" required>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Confirm New Password</label>
                            <div class="input-group">
                                <input id="confirm_password" name="confirm_password" class="form-control" type="password" placeholder="Confirm new password" required>
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


</div>

@endsection