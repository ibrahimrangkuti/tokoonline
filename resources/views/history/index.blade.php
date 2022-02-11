@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left">Kembali</i></a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"> History</i></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jumlah Harga</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($pesanans as $pesanan)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</td>
                                @if ($pesanan->status == 1)
                                <td><span class="badge bg-success">Sudah dibayar</span></td>
                                @else
                                <td><span class="badge bg-danger">Belum dibayar</span></td>
                                @endif
                                <td>
                                    <a href="{{ route('history-detail', $pesanan->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
