@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sisi'
])

@section('content')
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
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

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive">
                                <span id="result"></span>
                                <table class="table" id="dynamicTable">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th width="5%">Kode</th>
                                        <th>Keterangan</th>
                                        <th>Nilai</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" readonly name="addmore[0][idIsi]" class="form-control" value="{{ $find->id }}"></td>
                                            <td><input type="text" name="addmore[0][keterangan]" class="form-control" placeholder=" "></td>
                                            <td><select class="form-control" name="addmore[0][angka]" required="required">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3" align="right">&nbsp;</td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        var i = 0;

        $("#add").click(function(){

            ++i;

            $("#dynamicTable").append('<tr>' +
                '<td><input type="text" readonly name="addmore['+i+'][idIsi]" class="form-control" value="{{ $find->id }}"></td>' +
                '<td><input type="text" name="addmore['+i+'][keterangan]" class="form-control" placeholder=" "></td>' +
                '<td><select class="form-control" name="addmore['+i+'][angka]" required="required">' +
                '<option selected>Choose...</option>' +
                '<option value="1">1</option>' +
                '<option value="2">2</option>' +
                '<option value="3">3</option>' +
                '<option value="4">4</option>' +
                '</select></td>' +
                '<td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>' +
                '</tr>');
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parents('tr').remove();
        });

    </script>
@endsection
