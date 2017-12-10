@extends('layouts.employee')

@section('content')


     {{--   {{!! Form::open(['routes'=>'product.store','method'=>'post','files'=>true]) !!}}

        {{!! Form::close() !!}}--}}

    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">

            <h4>@yield('pageCommand','Add Item')</h4>
        <form action="/employee/item/@yield('editId')" method="post">
            {{csrf_field()}}
            @section('editMethod')
                @show
            <div class="form-group">

                <label for="name">enter item name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="name" placeholder="item name" value="@yield('editName')">
            </div>

            <div class="form-group">

                <label for="description">enter item description</label>
                <input type="description" name="description" class="form-control" id="description" aria-describedby="description" placeholder="item description" value="@yield('editDescription')">
            </div>
            <div class="form-group">

                <label for="price">enter item price</label>
                <input type="price" name="price" class="form-control" id="price" aria-describedby="price" placeholder="item price" value="@yield('editPrice')">
            </div>
            <div class="form-group inline">


                <label for="type">enter item type</label>
                <input type="type" name="type" class="form-control" id="type" aria-describedby="type" placeholder="item type" value="@yield('editType')">
            </div>

            <div class="form-group inline">


                <label for="type">enter item quantity</label>
                <input type="quantity" name="quantity" class="form-control" id="quantity" aria-describedby="quantity" placeholder="item quantity" value="@yield('editQuantity')">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    @endsection