@extends('layout.app')

@section('title')
Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Pembelian</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('pembelian.store')}}" method="POST">
        @csrf

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="barang">Barang</label>
                        <select name="barang_id" id="barang_id" value="{{old('barang')}}"
                            class="form-control @error('barang') is-invalid @enderror">
                            @error('barang')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                            @foreach ($barang as $b)
                                <option value="{{$b->id}}">{{$b->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" value="{{old('jumlah')}}"
                        class="form-control @error('jumlah') is-invalid @enderror">
                        @error('jumlah')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6" >
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <textarea name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="" id="harga"></textarea>
                        
                        @error('harga')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                            
                <div class="modal-footer">
                    <a href="/pembelian" class="btn btn-secondary" role="button" py-5>Batal</a>
                    <button type="submit" class="btn btn-primary" py-5>Simpan</button>
                </div>
            </div> 
        </form>
    </div>
</div>
@endsection

