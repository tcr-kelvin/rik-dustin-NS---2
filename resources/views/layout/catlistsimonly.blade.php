@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')

    <main>
        <section class="section top-toestellen">
            <h2 class="section-title">Sim-onlys</h2>
            <div class="row-box">
                @foreach($simonlys as $simonly)
                    <div class="item-box">
                        <h4 class="item-title">{{$simonly->name}}</h4>
                        <div style="height: 50px;"></div>
                        <p class="item-info">{{substr($simonly->description,0,100).'...'}} | <b>{{$simonly->sms}}SMSJES</b> | <b> {{$simonly->data}}MB</b> | <b>{{$simonly->callmins}}MINS</b>|</p>
                        <a class="item-button teleking-button" style="float:inherit;"href="product/{{$simonly->id}}"><strong>€{{$simonly->price}} </strong>- Meer info</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection
