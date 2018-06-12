@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header'))
<main>
    <section class="section">
        <div class="row">
            <div class="column-2 content-column">
                <h2 class="content-title pull-left">Samsung Galaxy S9</h2>
                <div class="content-line"></div>
                <p class="pull-left content-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="content-button-wrap">
                    <a class="content-button teleking-button pull-right"href="#">+ Winkelwagen</a>
                    <a class="content-button teleking-button pull-right"href="#">+ Verlanglijstje</a>
                </div>
            </div>
            <div class="column-2 content-column">
                <img class="content-img pull-right" src="photos/phone.png" alt="Samsung Galaxy S9">
            </div>
        </div>
    </section>
</main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection
