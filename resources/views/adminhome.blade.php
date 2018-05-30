@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                            <table class="pull-left admin-table">
                                <tbody>
                                <tr>
                                    <td class="bold">id</td>
                                    <td class="bold">name</td>
                                    <td class="bold">email</td>
                                    <td class="bold">update</td>
                                    <td class="bold">delete</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Dustin</td>
                                    <td>info@duckerdie.com</td>
                                    <td> <button class="table-button" type="button" name="button">update</button> </td>
                                    <td> <button class="table-button" type="button" name="button">delete</button> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rik</td>
                                    <td>rik@gmail.com</td>
                                    <td> <button class="table-button" type="button" name="button">update</button> </td>
                                    <td> <button class="table-button" type="button" name="button">delete</button> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Annas</td>
                                    <td>annas@hotmail.com</td>
                                    <td> <button class="table-button" type="button" name="button">update</button> </td>
                                    <td> <button class="table-button" type="button" name="button">delete</button> </td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
