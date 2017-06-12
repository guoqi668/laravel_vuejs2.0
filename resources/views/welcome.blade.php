@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Vuejs2.0</div>

                    <div class="panel-body">
                        <h1>@{{ message }}</h1>
                        <button class="btn btn-success" @click="reverseMessage">逆转消息</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <demo></demo>
@endsection
