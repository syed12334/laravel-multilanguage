@extends('layouts.layouts')

@section('title')
  {{  __('about.sitetitle') }}
@endsection

@section('content')
<div class="container mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>{{  __('about.heading')}}</h1> 
      <p>{{  __('about.headerdesc') }}</p> 
    </div>
  </div>
  @endsection