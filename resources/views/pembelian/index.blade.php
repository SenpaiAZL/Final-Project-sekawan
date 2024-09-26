@extends('layouts.app')

@section('content')
    <h1>Pakaian List</h1>
    <a href="{{ route('pakaian.create') }}" class="btn btn-primary">Add New Pakaian</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pakaian as $item)
                <tr>
                    <td>{{ $item->pakaian_id }}</td>
                    <td>{{ $item->pakaian_nama }}</td>
                    <td>{{ $item->pakaian_harga }}</td>
                    <td>{{ $item->pakaian_stok }}</td>
                    <td>
                        <a href="{{ route('pakaian.edit', $item->pakaian_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pakaian.destroy', $item->pakaian_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection