@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
    <main>
        <section class="section">
            <div class="container">
                <h1>Support</h1>

                <h2>FAQ</h2>
                <ul>
                    <li>Hebben jullie gratis telefoons</li>
                    <li>Mijn telefoon is stuk. Wat nu?</li>
                    <li>Er is teveel geld afgeschreven</li>
                </ul>
            </div>

        </section>
    </main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection
