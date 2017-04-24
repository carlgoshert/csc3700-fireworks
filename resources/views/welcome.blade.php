@extends('layouts/app')
@section('content')
<div class="container">
  <ul class="nav nav-tabs col-md-offset-1 col-md-9">
    <li class="active"><a href="#tab1" data-toggle="tab">Products</a></li>
    <li><a href="#tab2" data-toggle="tab">Orders</a></li>
  </ul>
  <div class="tab-content col-md-offset-1 col-md-9" id="TabContents">
    <div class="tab-pane fade active in" id="tab1">
      @include("partials/products", ["products" => App\Product::all(), "dashboard" => true])
    </div>
    <div class="tab-pane fade" id="tab2">
      <p>Here is some other stuff for Tab 2</p>
    </div>
</div>
@endsection
