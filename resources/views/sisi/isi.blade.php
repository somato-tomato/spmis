@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sisi'
])

@section('content')
    <div class="content">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('password_status'))
            <div class="alert alert-success" role="alert">
                {{ session('password_status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 text-center">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{ __('Isi Standar') }}</h5>
                    </div>
                    @foreach($find as $isi)
                    <div class="card-body">
                        <div class="row text-left">
                            <p class="col-md-3 h6">{{ __('Nama') }}</p>
                            <div class="col-md-9">
                                <p class="h6 text-left">{{ $isi->nama }}</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row text-left">
                            <p class="col-md-3 h6">{{ __('Judul Isi') }}</p>
                            <div class="col-md-9">
                                <p class="h6">{{ $isi->judulIsi }}</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row text-left">
                            <p class="col-md-3 h6">{{ __('Keterangan') }}</p>
                            <div class="col-md-9">
                                <p class="h6 text-left">{{ $isi->keterangan }}</p>
                            </div>
                        </div>
                        <br/>
                        <div class="row text-left">
                            <p class="col-md-3 h6">{{ __('Isi') }}</p>
                            <div class="col-md-9">
                                <p class="h6 text-justify ">{{ $isi->isi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12 text-left">
                            @csrf
                            &nbsp&nbsp&nbsp&nbsp<a href="{{ route('sisi.edit', $isi->id) }}" class="btn btn-info btn-round">Ubah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
