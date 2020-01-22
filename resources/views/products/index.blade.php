@foreach($products as $product)
    <a href="{{route('products.show',['product'=>$product])}}">
        {{$product->name}} - CHF {{$product->price}}
    </a>
    <br>
@endforeach

<br>

<a href="{{route('products.create')}}">{{__('form.create')}}</a>
