@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'siklus'
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

                        <form method="post" action="{{ route('siklus.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nomor</label>
                                <input type="text" name="nomor" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <select type="text" class="form-control" name="tahun" required="required">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">SK</label>
                                <input type="text" name="sk" class="form-control" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="">Tertanggal</label>
                                <div class="date">
                                    <strong>Date : </strong>
                                    <input class="date form-control"  type="text" id="datepicker" name="tanggal">
                                </div>
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
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection
