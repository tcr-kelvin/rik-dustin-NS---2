@extends('layout')

@section('content')

    @include ('layout.partials.header')
    <main>
        <div style="text-align: center" id="top">
            <ul id="show-cart">
                <li>???????</li>
            </ul>
            {{--<div>Je hebt <span id="count-cart">X</span> producten in je mandje</div>--}}
            <div>Totaal: € <span id="total-cart"></span></div>
            <button id="clear-cart">Annuleren</button>

        </div>

        <div class="paralaximg" style="margin: 50px 0">
            <h1>TeleKing</h1>
            <span>Telefoons en Abonnementen</span>
        </div>
        <section class="section top-toestellen">
            <h2 class="section-title">Top Toestellen</h2>
            <div class="row-box">
                @foreach($products->take(4) as $product)
                    <div class="item-box">
                        <h4 class="item-title">{{$product->name}}</h4>
                        <img class="photo-box" src="{{$product->imagepath}}">
                        <p class="item-info">{{substr($product->description,0,100).'...'}}</p>
                        <a class="add-to-cart item-button teleking-button" style="float:inherit;" href="" data-name="{{$product->name}}" data-price="{{$product->price}}">+ Winkelwagen</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    @include ('layout.partials.footer')

    {{--SCRIPTS--}}
    <script type="text/javascript" src="js/shoppingcart.js"></script>
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