@extends('layout.template')

@section('body')
    <br>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($items as $item)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-header">
                    {{ $item->itemName }}
                </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->itemName }}</h5>
                    <p class="card-text text-success">{{ $item->itemStatus }}</p>
                    <p class="card-text">{{ $item->itemPrice }}</p>
                    <p class="card-text">{{ $item->itemQuantity }}</p>

                    <div class="d-flex">
                        <a type="submit" class="btn btn-danger mx-4" href="#">Purchase</a>
                    </div>
                    </div>
            </div>
        @endforeach

    </div>
@endsection