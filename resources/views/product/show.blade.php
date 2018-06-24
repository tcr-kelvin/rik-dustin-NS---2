@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
    <main>
        <section class="section">
            <div class="row">
                <div class="column-2 content-column">
                    <h2 class="content-title pull-left">{{$product->name}}</h2>

                    <div class="content-line"></div>
                    <h4 class="pull-right teleking-fakebutton">€{{$product->price}}</h4>
                    <p class="pull-left content-text">
                        {{$product->description}}
                    </p>
                    <div class="content-button-wrap">
                        <a class="add-to-cart content-button teleking-button pull-right" href="/winkelwagen" data-name="{{$product->name}}" data-price="{{$product->price}}">+ Winkelwagen</a>

                        {{--<a class="content-button teleking-button "href="#">+ Winkelwagen</a>--}}
                        {{--<a class="content-button teleking-button pull-right"href="#">+ Verlanglijstje</a>--}}
                    </div>
                </div>
                <div class="column-2 content-column">
                    <img class="content-img pull-right" src="{{$product->imagepath}}" alt="{{$product->name}}">
                </div>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layout.partials.footer')

    <script type="text/javascript" src="../../js/shoppingcart.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".add-to-cart").click(function(event){
            event.preventDefault();
            var name = $(this).attr("data-name");
            var price = Number($(this).attr("data-price"));
            shoppingCart.addItemToCart(name, price, 1);
            displayCart();
        });
        $("#clear-cart").click(function(event){
            shoppingCart.clearCart();
            displayCart();
        });
        function displayCart() {
            var cartArray = shoppingCart.listCart();
            console.log(cartArray);
            var output = "";
            for (var i in cartArray) {
                output += "<li>"
                    +cartArray[i].name
                    +" <input class='item-count' type='number' data-name='"
                    +cartArray[i].name
                    +"' value='"+cartArray[i].count+"' >"
                    +" x "+cartArray[i].price
                    +" = "+cartArray[i].total
                    +" <button class='plus-item' data-name='"
                    +cartArray[i].name+"'>+</button>"
                    +" <button class='subtract-item' data-name='"
                    +cartArray[i].name+"'>-</button>"
                    +" <button class='delete-item' data-name='"
                    +cartArray[i].name+"'>X</button>"
                    +"</li>";
            }
            $("#show-cart").html(output);
            $("#count-cart").html( shoppingCart.countCart() );
            $("#total-cart").html( shoppingCart.totalCart() );
        }
        $("#show-cart").on("click", ".delete-item", function(event){
            var name = $(this).attr("data-name");
            shoppingCart.removeItemFromCartAll(name);
            displayCart();
        });
        $("#show-cart").on("click", ".subtract-item", function(event){
            var name = $(this).attr("data-name");
            shoppingCart.removeItemFromCart(name);
            displayCart();
        });
        $("#show-cart").on("click", ".plus-item", function(event){
            var name = $(this).attr("data-name");
            shoppingCart.addItemToCart(name, 0, 1);
            displayCart();
        });
        $("#show-cart").on("change", ".item-count", function(event){
            var name = $(this).attr("data-name");
            var count = Number($(this).val());
            shoppingCart.setCountForItem(name, count);
            displayCart();
        });
        displayCart();
    </script>

@endsection

{{--@extends('layout.app')--}}

{{--@section('content')--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-10">--}}
            {{--<div class="">--}}
                {{--<h2> Show Post</h2><br>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-10">--}}
            {{--<div class="form-group">--}}
                {{--<strong>name : </strong>--}}
                {{--{{ $product->name}}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>description : </strong>--}}
                {{--{{ $product->description }}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>image : </strong>--}}
                {{--<img src="../{{ $product->imagepath}}" alt="{{ $product->name}} style="width="150px">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>price : </strong>--}}
                {{--{{ $product->price}}--}}
            {{--</div>--}}
            {{--<br/>--}}
            {{--<a class="btn btn-primary" href="{{ route('product.index') }}"> <i class="fas fa-chevron-right"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

{{--SCRIPTS--}}