@extends('layout.app')

@section('content')

    @include ('layout.partials.header')

    <main>
        <section class="section top-toestellen">
            <div class="row">
                <h2 class="section-title">Top Toestellen</h2>
                @foreach($simonlys as $simonly)
                    <div class="column-4">
                        <div class="item-box">
                            <h4 class="item-title">{{$simonly->name}}</h4>
                            <p class="item-info">{{substr($simonly->description,0,100).'...'}}</p>
                            <p class="item-price">{{$simonly->price}}</p></div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    @include ('layout.partials.footer')

