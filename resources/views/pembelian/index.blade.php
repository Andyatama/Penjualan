@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Pembelian</h5>

            <a class="btn btn-success btn-sm float-end" href="{{route('pembelian.create')}}">
              <i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="card-body">
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th style="width: 5%">No.</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th style="width: 10%">Aksi</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($pembelian as $item)
              
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->barang->nama}}</td>             
            <td>{{$item->jumlah}}</td>             
            <td>{{$item->harga}}</td>
            <td>
              <a href="/pembelian/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
              <a href="/pembelian/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
        <button type="button" class="btn-batal" data-bs-dismiss="modal" aria-label="Batal"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('pembelian.store')}}" method="POST">
          @csrf
          <div class="form-gorup">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection