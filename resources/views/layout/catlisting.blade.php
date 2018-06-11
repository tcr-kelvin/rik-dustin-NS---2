@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
<main>
    <section class="section top-toestellen">
        <div class="row">
            <h2 class="section-title">Pagina Titel</h2>
            @foreach($products as $product)
                <div class="column-4">
                    <div class="item-box">
                        <h4 class="item-title">{{$product->name}}</h4>
                        <img class="photo-box" src="{{$product->imagepath}}">
                        <p class="item-info">{{substr($product->description,0,100).'...'}}</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
