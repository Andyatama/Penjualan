@extends('layout.app')

@section('title')
Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Barang</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('barang.update', $b->id)}}" method="POST">
        @csrf
        @method('PUT')
        {{-- Baris Atas Awal--}}
            <div class="row">

                {{-- Kolom Nama Barang --}}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" value="{{$b->nama}}" 
                        class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                {{-- Kolom Nama Barang --}}


                {{-- Kolom Harga --}}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{$b->harga}}" 
                        class="form-control" @error('harga') is-invalid @enderror">
                        @error('harga')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                {{-- Kolom Harga --}}
                
            </div>
        {{-- Baris Atas Akhir --}}

{{-- ________________________________Batas Baris_________________________________________________}}

        {{-- Baris Bawah Awal --}}
            <div class="row">

                {{-- Kolom Stock --}}
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stok" id="stok" value="{{$b->stok}}" 
                        class="form-control @error('stok') is-invalid @enderror">
                        @error('stok')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                {{-- Kolom Stock --}}

                {{-- Kolom Supplier --}}
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <select name="supplier_id" id="supplier_id" value="{{old('supplier')}}" 
                        class="form-control @error('supplier') is-invalid @enderror">
                            @error('supplier')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <option value="{{$b->supplier_id}}" selected>{{$b->supplier->nama}}</option>
                            @foreach ($supplier as $s)
                                <option value="{{$s->id}}">{{$s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Kolom Supplier --}}

                {{-- Kolom Kategori --}}
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="kategori_">Kategori</label>
                        <select name="kategori_id" id="kategori_id"
                        class="form-control @error('kategori') is-invalid @enderror">
                        @error('kategori')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                        <option value="{{$b->kategori_id}}" selected>{{$b->kategori->nama}}</option>
                        @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Kolom Kategori --}}

            </div>
        {{-- Baris Bawah Akhir --}}

        <div class="modal-footer mt-5">
            <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Update </button>

        </div>
    </form>
    </div>
</div>

@endsection

