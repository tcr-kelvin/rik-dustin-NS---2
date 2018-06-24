@extends('layout.app')

@section('content')
    <div class="container-full">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="alert alert-success">
                            <p>You are logged in as admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="column-m-10">
                <form action="home/product">
                    <input class="btn btn-success" type="submit" value="Producten" />
                </form>
                <br>
                <form action="home/user">
                    <input class="btn btn-success"  type="submit" value="Gebruikers" />
                </form>
                <form action="home/reviews">
                    <input class="btn btn-success" type="submit" value="Reviews" />
                </form>
                <br>
                <form action="home/questions">
                    <input class="btn btn-success"  type="submit" value="Vragen" />
                </form>
            </div>
        </div>

    </div>
@endsection
