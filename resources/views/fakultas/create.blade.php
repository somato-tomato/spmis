@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'fakultas'
])

@section('content')
    <div align="right">
        <a href="{{ route('akademik.index') }}" class="btn btn-default">Back</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Akademik</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('fakultas.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Fakultas</label>
                                <input type="text" name="namaFakultas" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
