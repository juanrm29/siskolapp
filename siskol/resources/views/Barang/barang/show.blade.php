@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Barang {{ $barang->id }}</h3>
                    @can('view-'.str_slug('Barang'))
                        <a class="btn btn-success pull-right" href="{{ url('/barang') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $barang->id }}</td>
                            </tr>
                            <tr><th> Tanggal </th><td> {{ $barang->tanggal }} </td></tr><tr><th> Nama Barang </th><td> {{ $barang->nama_barang }} </td></tr><tr><th> Kategori </th><td> {{ $barang->kategori }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
</div>
@endsection

