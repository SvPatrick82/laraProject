<div class="card text-center ms-2" style="width: 18rem; ">
    <img src="{{$product->img}}" class="card-img-top" alt="{{$product->name}}">
    <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p>Cost :<span>{{$product->price}}  $</span></p>
        <a href="#" class="btn btn-primary">Buy</a>
    </div>
</div>
