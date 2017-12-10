@extends('employee.item.create')

@section('editName',$inventory->item[0]->name)
@section('editId',$inventory->inventoryId)
@section('pageCommand','Edit Item')
@section('editDescription',$inventory->item[0]->description)
@section('editPrice',$inventory->item[0]->price)

@section('editType',$inventory->item[0]->type)
@section('editQuantity',$inventory->quantity)

@section('editMethod')
    {{method_field('PUT')}}

@endsection