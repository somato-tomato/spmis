@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sisi'
])

@section('content')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Produk</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('sisi.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="idSiklus" readonly="readonly" class="form-control" value="{{ $data->id }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">nama Siklus</label>
                                <input type="text" readonly="readonly" class="form-control" value="{{ $data->nama }}" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="judulIsi"  class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <textarea type="text" name="isi" class="form-control" placeholder=" "></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
