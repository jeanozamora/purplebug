@extends('partials.template')

@section('title')
@if(Auth::user()->role->id == 1)
Admin - Categories
@else 
User - Categories
@endif
@endsection

@section('content')

<div class="container w-full mx-auto pt-20">
    @livewire('categories-table')
</div>

@endsection