@extends('layouts.employee')
@section('content')
    @if(session()->has('message'))
        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
        @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Employee Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            Hi {{Auth::user()->firstName }}
                            <div class="div">
                                <a href="{{ route('addItem') }}"><button type="button" class="btn btn-primary">Add Items</button></a>
                                <a href="{{ route('viewAll') }}"><button type="button" class="btn btn-primary">View All items</button></a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
