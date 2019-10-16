@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'siklus'
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

                        <form method="post" action="{{ route('akademik.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" class="form-control">
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
                                <select class="form-control" name="tahun" required="required">
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
                                    <input type="text" class="form-control" id="datepicker" placeholder="DD/MM/YYYY">
                                </div>
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
    <script type="text/javascript">
        $('#datepicker').datepicker();
    </script>
@endsection
