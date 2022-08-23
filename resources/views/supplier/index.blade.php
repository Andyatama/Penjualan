@extends('layout.app')

@section('title')
    Supplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Supplier</h5>

            <button type"button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
            data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <div class="card-body">
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th style="width: 5%">No.</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th style="width: 10%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Mediatek</td>
                <td>031-343334</td>
                <td>Jl. Raya Gubeng 14</td>                
                <td>
                    <a href="#" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
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
        mohon diisi...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
@endsection