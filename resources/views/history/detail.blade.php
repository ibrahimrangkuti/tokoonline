@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left">Kembali</i></a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('history') }}">History</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($pesanan->status == 1)
                    <h2>Pesanan Selesai</h2>
                    <h5>Terima kasih sudah berbelanja di toko kami!</h5>
                    @else
                    <h2>Pesanan Belum Selesai</h2>
                    <h5>Harap selesaikan pembayaran anda ke rekening <br> <strong>Bank BRI : 5812 - 333512 - 125</strong> <br> Dengan nominal : <strong>Rp. {{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</strong></h5>
                    @endif
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"> Detail Pemesanan</i></h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                <td>{{ $pesanan_detail->jumlah }} Kain</td>
                                <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="right"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right"><strong>Kode Unik :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
