@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header'))
<main>
    <section class="section">
        <div class="row">
            @foreach(array_slice($products->toArray(), 0, 1) as $product)
            <div class="column-2 pull-left content-column">
                <h2 class="content-title pull-left">{{$product->name}}</h2>
                <div class="content-line"></div>
                <h4 class="pull-left">Prijs {{$product->price}}</h4>
                <p class="pull-left content-text">
                    {{$product->description}}
                </p>
                <div class="content-button-wrap">
                    <a class="content-button teleking-button pull-right"href="#">+ Winkelwagen</a>
                    <a class="content-button teleking-button pull-right"href="#">+ Verlanglijstje</a>
                </div>
            </div>
            <div class="column-2 pull-right content-column">
                <img class="content-img" src="{{$product->imagepath}}" alt="{{$product->name}}">
            </div>
            @endforeach

        </div>
    </section>
</main>
@endsection
