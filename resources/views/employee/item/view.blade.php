@extends('layouts.employee')
@section('content')
    <br>
    <center><a href="{{ route('addItem') }}" class = 'btn btn-info '> Add Item</a></center>
    <table class="table table-striped table-hover table-bordered clickable-row">
        <thead class="thead-dark">
        <tr>
            <th>Item ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Last Update</th>
            <th>Edit/Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($datas as $inventory)

            {{--@if ($inventory->inventoryId > 99)
--}}
                <tr class='clickable-row' data-href={{'/employee/item/'.$inventory->inventoryId}}  >
                    <td>{{$inventory->item[0]->itemId}}</td>
                    <td>{{$inventory->item[0]->name}}</td>
                    <td>${{$inventory->item[0]->price}}</td>
                    <td>{{$inventory->item[0]->category->name}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td>{{$inventory->item[0]->updated_at->diffForHumans()}}</td>

                    <td><a class="btn btn-primary" href={{'/employee/item/'.$inventory->inventoryId.'/edit'}} role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><form  action = "{{'/employee/item/'.$inventory->inventoryId}}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                           <button type="submit"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                           </button>
                        </form>
                    </td>

                </tr>

            {{--@endif--}}
            @endforeach
        </tbody>
    </table>

@endsection