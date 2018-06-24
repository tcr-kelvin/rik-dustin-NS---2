@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
    <main>
        <section class="section">
            <div class="container" style="margin-bottom: 100px;margin-top: 100px;">
                <h1>Support</h1>

                <h2>Vragen</h2>
                <ul>
                    @foreach($questions as $question)
                        <li><a href="{{route('question.show', $question->id)}}">{{$question->title}}</a> </li>
                    @endforeach    
                </ul>
                <a href="question/create" class="teleking-button">Stel een vraag</a>
            </div>

        </section>
    </main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection
