@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')

    <main>
        <section class="section top-toestellen">
            <div class="row">
                <h2 class="section-title">Top Toestellen</h2>
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
<<<<<<< HEAD
                        <img class="photo-box" src="photos/phone.png">
=======
                        <img class="photo-box" src="photos/phone2.png">
>>>>>>> Dustin
                        <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                    </div>
                </div>
                <div class="column-4">
                    <div class="item-box">
                        <h4 class="item-title">Samsung Galaxy S8</h4>
<<<<<<< HEAD
                        <img class="photo-box" src="photos/phone.png">
=======
                        <img class="photo-box" src="photos/phone3.png">
>>>>>>> Dustin
                        <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                    </div>
                </div>
                <div class="column-4">
                    <div class="item-box">
                        <h4 class="item-title">OnePlus 6</h4>
<<<<<<< HEAD
                        <img class="photo-box" src="photos/phone.png">
=======
                        <img class="photo-box" src="photos/phone4.png">
>>>>>>> Dustin
                        <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="content">Meer info</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{--footer--}}
    @include ('layout.partials.footer')

    <script src="js/app.js"></script>
@endsection