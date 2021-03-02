@extends('lay.app')
@section('title')Категория@endsection
@section('title-block')Категория@endsection

@section('main')
<div class="container">
    <div class="album py-5 bg-light">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($products as $product)
                    @include('inc.card')
                @endforeach
            </div>
    </div>
</div>
@endsection
