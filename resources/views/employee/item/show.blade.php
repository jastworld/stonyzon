@extends('layouts.employee')

@section('content')
    @isset($inventory)
    <div class="col-lg-4 col-lg-offset-4">
        <p>{{$inventory->item[0]->itemId}}</p>
        <p>{{$inventory->item[0]->name}}</p>
        <p>{{$inventory->item[0]->price}}</p>
        <p>{{$inventory->item[0]->category->name}}</p>
        <p>{{$inventory->item[0]->description}}</p>
        <p>{{$inventory->quantity}}</p>
        <p>{{$inventory->item[0]->updated_at}}</p>
    </div>
    @endisset


    @endsection