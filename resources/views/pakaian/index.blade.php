@extends('layouts.app')

@section('content')
    <h1>Pembelian List</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelian as $item)
                <tr>
                    <td>{{ $item->pembelian_id }}</td>
                    <td>{{ $item->pembelian_user_id }}</td>
                    <td>{{ $item->pembelian_tanggal }}</td>
                    <td>{{ $item->pembelian_total_harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection