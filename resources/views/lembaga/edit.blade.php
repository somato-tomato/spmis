@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'lembaga'
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

                        <form method="post" action="{{ route('lembaga.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">Nama Lembaga</label>
                                <input type="text" name="namaLembaga" readonly="readonly" class="form-control" value="{{ $data->namaLembaga }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Lembaga</label>
                                <input type="text" name="alamatLembaga" readonly="readonly" class="form-control" value="{{ $data->alamatLembaga }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">Daerah Lembaga</label>
                                <input type="text" name="kotkabLembaga" class="form-control" value="{{ $data->kotkabLembaga }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">Telpon Lembaga</label>
                                <input type="text" name="notelpLembaga" class="form-control" value="{{ $data->notelpLembaga }}" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
