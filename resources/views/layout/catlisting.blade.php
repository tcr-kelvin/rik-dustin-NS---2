@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')

<main>
    <section class="section top-toestellen">
        <h2 class="section-title">Toestellen</h2>
            <div class="row-box">
            @foreach($products as $product)
                <div class="item-box" >
                    <h4 class="item-title">{{$product->name}}</h4>
                    <img class="photo-box" src="{{$product->imagepath}}">
                    <p class="item-info">{{substr($product->description,0,100).'...'}}</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="product/{{$product->id}}"><strong>€{{$product->price}} </strong>- Meer info</a>
                </div>
            @endforeach
            </div>
    </section>
</main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection
