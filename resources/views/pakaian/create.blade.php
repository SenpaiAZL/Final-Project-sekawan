@extends('layouts.app')

@section('content')
    <h1>Add New Pakaian</h1>

    <form action="{{ route('pakaian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pakaian_nama">Nama</label>
            <input type="text" class="form-control" name="pakaian_nama" required>
        </div>

        <div class="form-group">
            <label for="pakaian_harga">Harga</label>
            <input type="text" class="form-control" name="pakaian_harga" required>
        </div>

        <div class="form-group">
            <label for="pakaian_stok">Stok</label>
            <input type="text" class="form-control" name="pakaian_stok" required>
        </div>

        <button type="submit" class="btn btn-success">Add Pakaian</button>
    </form>
@endsection