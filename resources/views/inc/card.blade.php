 <div class="col">
    <div class="card shadow-sm">
        <img src="/storage/{{$product->image}}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$product->name}}</text></img>
        <div class="card-body">
            <p class="card-text">{{$product->description}}<br>{{$product->category->name}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <form action="{{route('basket_add', $product)}}" method="post">
                <div class="btn-group">
                    @csrf
                    <a href="{{route('product',[$product->category->code,$product->code])}}"><button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button></a>
                    <button type="submit" class="btn btn-sm btn-outline-secondary">В корзину</button>
                </div>
                </form>
                <small class="text-muted">{{$product->prise}} Бел.руб</small>
            </div>
        </div>
    </div>
 </div>
