 <div class="col">
        <div class="card shadow-sm">
            <img src="{{$product->image}}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$product->name}}</text></img>
            <div class="card-body">
                <p class="card-text">{{$product->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('product',$product->code)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button></a>
                        <a href="{{route('basket')}}"><button type="button" class="btn btn-sm btn-outline-secondary">В корзину</button></a>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
