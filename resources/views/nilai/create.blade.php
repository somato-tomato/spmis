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

                        <form method="post" id="add_name" name="add_name" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive">
                                <span id="result"></span>
                                <table class="table" id="dynamic_field">
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
                                            <td><input type="text" readonly name="idSiklus[]" class="form-control" value="{{ $find->id }}"></td>
                                            <td><input type="text" name="keterangan[]" class="form-control" placeholder=" "></td>
                                            <td><select class="form-control" name="angka[]" required="required">
                                                    <option selected>Choose...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add Mode</button> </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3" align="right">&nbsp;</td>
                                        <td>
                                            <input type="button" name="submit" id="submit" class="btn btn-primary" value="Submit" />
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
        $(document).ready(function () {
            var postURL="<?php echo route('nilai.store')?>";
            var i=1;
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('' +
                '<tr id="row'+i+'" class="dynamic-added">' +
                '<td><input type="text" readonly name="idSiklus[]" class="form-control" value="{{ $find->id }}"></td>' +
                '<td><input type="text" name="keterangan[]" class="form-control" placeholder=" "></td>' +
                '<td><select class="form-control" name="angka[]" required="required">' +
                    '<option selected>Choose...</option>' +
                    '<option value="1">1</option>' +
                    '<option value="2">2</option>' +
                    '<option value="3">3</option>' +
                    '<option value="4">4</option>' +
                '</select></td>' +
                ' <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button> </td>' +
                '</tr>');
            });
            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit').click(function () {
                $.ajax({
                    url:postURL,
                    method:"POST",
                    data:$('#add_name').serialize(),
                    type:'json',
                })
            })
        });
    </script>
@endsection
