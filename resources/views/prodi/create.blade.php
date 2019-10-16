@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'prodi'
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

                        <form method="post" action="{{ route('prodi.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Fakultas</label>
                                <input type="text" name="idFakultas" readonly="readonly" class="form-control" value="{{ $data->id }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Program Studi</label>
                                <input type="text" name="kodeProdi" class="form-control"  placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Program Studi</label>
                                <input type="text" name="namaProdi" class="form-control"  placeholder=" ">
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
