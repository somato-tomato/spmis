@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'akademik'
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

                        <form method="post" action="{{ route('akademik.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Akademik</label>
                                <input type="text" name="namaAkademik" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tahunJalan" required="required">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="semesterJalan" required="required">
                                    <option value="ganjil">Ganjil</option>
                                    <option value="genap">Genap</option>
                                </select>
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
