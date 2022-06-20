@extends('layout')
@include('partials._hero')
@include('partials._search')
@section('content')
<div class="lg:grid lg:grid-cols-3 gap-5 space-y-4 md:space-y-0 mx-4">
 @foreach($listings as $listing)
 <x-listing-cards :listing="$listing" /> 
 @endforeach

</div>
 @endsection

