@extends('layout.app')

@section('title')
Supplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Supplier</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('supplier.store')}}" method="POST">
        @csrf
                        
            <div class="row">   
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{old('nama')}}"
                        class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Telepon</label>
                        <input type="text" name="telepon" id="telepon" value="{{old('telepon')}}"
                        class="form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6" >
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="" id="alamat"></textarea>
                        
                        @error('alamat')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                            
                <div class="modal-footer">
                    <a href="/supplier" class="btn btn-secondary" role="button" py-5>Batal</a>
                    <button type="submit" class="btn btn-primary" py-5>Simpan</button>
                </div>
            </div> 
        </form>
    </div>
</div>
@endsection

