@extends('lay.app')

@section('main')

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($products as $product)
                    @include('inc.card',compact('product'))
                @endforeach
            </div>
@endsection
