<div class="col-md-5 mb-3">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Subscribers</h6>
        </div>

        <div class="card-body pt-2 p-3">

            <ul class="list-group">

                @if(count($subscribers) > 0)

                <ul class="list-group">
                    @foreach($subscribers as $subscriber)
                    <li class="list-group-item border-0 p-3 mb-2 bg-gray-100 border-radius-lg">

                        <div class="d-flex flex-row align-items-center">
                            <h6 class="mb-2 text-sm">{{ ucfirst(explode('@', $subscriber->email)[0]) }}</h6>
                            <div class="ms-auto text-end">
                                <form action="{{ route('remove-subscriber', $subscriber->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this subscriber?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Remove</button>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex">
                            <span class="mb-1 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"> {{ $subscriber->email }} </span></span>
                        </div>

                    </li>
                    @endforeach
                </ul>

                @else
                <p class="text-center m-auto mb-2 pt-0">No subscribers available.</p>
                @endif

            </ul>

        </div>

    </div>
</div>