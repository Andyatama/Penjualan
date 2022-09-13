@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
<div class="row g-2 text-center">
    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3">{{$barang->count()}} Barang <i class="fa fa-boxes"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3">{{$kategori->count()}} Kategori <i class="fa fa-tag"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3">{{$supplier->count()}} Supplier <i class="fa fa-truck"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3">{{$pembeli->count()}} Member <i class="fa fa-users"></i>  </div>
    </div>
      @endsection