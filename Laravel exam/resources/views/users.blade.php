@extends('partials.template')

@section('title')
@if(Auth::user()->role->id == 1)
Admin - Users
@else 
Users Dashboard
@endif
@endsection

@section('content')

<div class="container w-full mx-auto pt-20">
    @livewire('users-table')
</div>

@endsection