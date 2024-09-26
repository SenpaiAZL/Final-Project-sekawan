@extends('layouts.app')

@section('content')
    <h1>Edit Pakaian</h1>

    <form action="{{ route('pakaian.update', $pakaian->pakaian_id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="pakaian_nama">Nama</label>
            <input type="text" class="form-control" name="pakaian_nama" value="{{ $pakaian->pakaian_nama }}" required>
        </div>

        <div class="form-group">
            <label for="pakaian_harga">Harga</label>
            <input type="text" class="form-control" name="pakaian_harga" value="{{ $pakaian->pakaian_harga }}" required>
        </div>

        <div class="form-group">
            <label for="pakaian_stok">Stok</label>
            <input type="text" class="form-control" name="pakaian_stok" value="{{ $pakaian->pakaian_stok }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Pakaian</button>
    </form>
@endsection
