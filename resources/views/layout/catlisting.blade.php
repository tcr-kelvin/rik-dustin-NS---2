@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
<main>
    <section class="section top-toestellen">
        <div class="row">

            <h2 class="section-title">{{$_GET['alias']}}</h2>
            @foreach(array_slice($products->toArray(), 0, 12) as $product)
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">{{$product->name}}</h4>
                    <img class="photo-box" src="{{$product->imagepath}}">
                    <p class="item-info">{{substr($product->description,0,100).'...'}}</p>
                    <a class="item-button teleking-button" style="float:inherit;" href="content">Koop nu voor <strong>€{{$product->price}}</strong></a>

            <h2 class="section-title">Pagina Titel</h2>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Samsung Galaxy S9</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Apple iPhone X</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Samsung Galaxy S8</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">OnePlus 6</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Samsung Galaxy S9</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Apple iPhone X</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Samsung Galaxy S8</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">OnePlus 6</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Apple iPhone X</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">Samsung Galaxy S8</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                </div>
            </div>
            <div class="column-4">
                <div class="item-box">
                    <h4 class="item-title">OnePlus 6</h4>
                    <img class="photo-box" src="photos/phone.png">
                    <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>

                </div>
            </div>

            @endforeach
        </div>
    </section>
</main>
@endsection
