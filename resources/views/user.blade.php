@extends('layout.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
                <h2>user grud</h2>
                <div class="container box">
                    <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
                </div>
                <table class="table table-bordered">
                    <div class="form-group">
                    <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Enter Country Name" />
                        <div id="countryList">

                        </div>
                    </div>
                    <tr>
                        <th style="width: 80px">id</th>
                        <th>name</th>
                        <th>mail</th>
                        <th>password</th>
                        <th>Admin</th>
                        <th style="width: 140px">
                            <a href="{{route('user.create')}}" class="btn btn-succes btn-sm">
                                <i class="fas fa-plus"></i>
                            </a>
                        </th>
                    </tr>
                    <?php $no = 1; ?>
                    @foreach($users as $key => $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>***</td>
                            <td>{{ $value->admin }}</td>
                            <td>
                                <a href="{{route('user.show', $value->id)}}" class="btn btn-info btn-sm">
                                    <i href="" class="fas fa-search"> </i>
                                </a>
                                <a href="{{route('user.edit', $value->id)}}" class="btn btn-primary btn-sm">
                                    <i href="" class="fas fa-pencil-alt"> </i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $value->id],'style'=>'display:inline']) !!}
                                <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $('#country_name').keyup(function(){
                var query = $(this).val();
                if(query != '')
                {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{ route('user.fetch') }}",
                        method:"POST",
                        data:{query:query, _token:_token},
                        success:function(data){
                            $('#countryList').fadeIn();
                            $('#countryList').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){
                $('#country_name').val($(this).text());
                $('#countryList').fadeOut();
            });

        });
    </script>


