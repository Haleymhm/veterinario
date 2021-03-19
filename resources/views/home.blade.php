@extends('layouts.app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="text-center">
      <h3 class="text-gray-800 font-weight-bold">{{__("messages.namesystem")}}</h3>
    </div>
</div>
@include('partials.cards')
@endsection
