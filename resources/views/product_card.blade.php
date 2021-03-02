@extends('lay.app')
@section('title'){{$product->name}}@endsection
@section('title-block'){{$product->name}}@endsection

@section('main')
    <div class="container">
        <div class="starter-template">
            <h1>{{$product->name}}</h1>
            <h2>{{$product->category_id}}</h2>
            <p>Цена: <b>{{$product->prise}}</b></p>
            <img src="{{$product->image}}" width="250px">
            <p>{{$product->description}}</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
                <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

                <input type="hidden" name="_token" value="KbGW1Wqj6boaDyCUzQ1JWqVi8xQsocedhrZ3EhL3">        </form>
        </div>
    </div>
@endsection
