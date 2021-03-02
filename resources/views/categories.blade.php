@extends('lay.app')
@section('title')Категории@endsection
@section('title-block')Категории@endsection

@section('main')
<main class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    @foreach($categories as $category)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <a href="{{route('category',$category->code)}}">
                            <button type="button" class="w-100 btn btn-lg btn-primary">{{$category->name}}</button>
                        </a>
                    </div>
                </div>
            </div>
    @endforeach
</main>
@endsection
