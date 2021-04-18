@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Edit Barang #{{ $barang->id }}</h3>
                    @can('view-'.str_slug('Barang'))
                        <a class="btn btn-success pull-right" href="{{ url('/barang') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($barang, [
                        'method' => 'PATCH',
                        'url' => ['/barang', $barang->id],
                        'files' => true
                    ]) !!}

                    @include ('Barang.barang.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
        </div>
        @include('layouts.partials.footer')
    </div>
@endsection
