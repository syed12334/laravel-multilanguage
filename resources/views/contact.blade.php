@extends('layouts.layouts')

@section('title')
@lang('contact.sitetitle')
@endsection

@section('content')
<div class="container mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>{{  __('contact.heading')}}</h1> 
      <p>{{  __('contact.headerdesc') }}</p> 
    </div>
  </div>
  @endsection