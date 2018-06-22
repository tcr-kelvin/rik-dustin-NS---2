@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')

    <main>

        <section class="section top-toestellen">
            <h2 class="section-title">Top Toestellen</h2>
            <div class="row-box">
                @foreach($products->take(4) as $product)
                    <div class="item-box">
                        <h4 class="item-title">{{$product->name}}</h4>
                        <img class="photo-box" src="{{$product->imagepath}}">
                        <p class="item-info">{{substr($product->description,0,100).'...'}}</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="product/{{$product->id}}"><strong>€{{$product->price}} </strong>- Meer info</a>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="paralaximg">
            <h1>TeleKing</h1>
            <span>Telefoons en Abonnementen</span>
        </div>
    </main>

    {{--footer--}}
    @include ('layout.partials.footer')

    <script src="js/app.js"></script>
@endsection