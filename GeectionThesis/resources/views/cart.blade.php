@extends('layout.mainlayout')

@section('content')
    <main role="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Ongkos Kirim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>NamaBarang1</td>
                    <td>Rp HargaBarang</td>
                    <td>Rp OngkosKirim</td>
                </tr>
            </tbody>
        </table>
    </main>
@endsection