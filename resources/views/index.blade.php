@extends('layouts.layouts')

@section('title')
  {{  __('home.sitetitle') }}
@endsection

@section('content')
<div class="container mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>{{  __('home.heading')}}</h1> 
      <p>{{  __('home.headerdesc') }}</p> 
    </div>
  </div>
  @endsection