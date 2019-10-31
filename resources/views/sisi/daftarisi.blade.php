@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sisi'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        @foreach ($ids as $sisi)
                        <a href="{{ url('/sisi/' . $sisi->id . '/buat') }}" class="card-title btn btn-primary btn-sm float-right">Tambah Data</a>
                        @endforeach
                        <h4 class="card-title"> Standard Isi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Nama Siklus
                                </th>
                                <th>
                                    Nama Standard
                                </th>
                                <th>
                                    Keterangan Standard
                                </th>
                                <th></th>
                                </thead>
                                <tbody>
                                @forelse ($find as $sisi)
                                    <tr>
                                        <td>{{ $sisi->nama }}</td>
                                        <td>{{ $sisi->judulIsi }}</td>
                                        <td>{{ $sisi->keterangan }}</td>
                                        <td>
                                            @csrf
                                            <a href="{{ url('/sisi/isi/' . $sisi->id ) }}" class="btn btn-primary">Lihat Standard</a>
                                            <a href="{{ url('/nilai/' . $sisi->id . '/tambahnilai' ) }}" class="btn btn-primary">Tambah Nilai</a>
                                            <a href="{{ url('/nilai/view/' . $sisi->id) }}" class="btn btn-primary">Lihat Nilai</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6">Tidak ada data</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
