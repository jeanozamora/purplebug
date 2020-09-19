@extends('partials.template')

@section('title')
@if(Auth::user()->role->id == 1)
Admin -- Dashboard
@else
User -- Dashboard
@endif
@endsection

@section('content')

<div class="container w-full mx-auto pt-20">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-grey-darkest leading-normal">
        <div class="flex mb-4">
            @livewire('expenses')
          </div>
    </div>
</div>

<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<script>
    const chart = new Chartisan({
      el: '#chart',
      url: "@chart('expenses_chart')",
      hooks: new ChartisanHooks()
      .colors(['#ECC94B', '#4299E1', '#AAEE11'])
      .title('Total expenses per category')
      .datasets([{ type: 'bar', fill: true }, 'bar']),
    });
  </script>

@endsection