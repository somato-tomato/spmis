@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'akademik'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                       <a href="{{ route('akademik.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        <h4 class="card-title"> Akademik</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Nama Akademik
                                </th>
                                <th>
                                    Tahun Jalan
                                </th>
                                <th>
                                    Semester Jalan
                                </th>
                                <th></th>
                                </thead>
                                <tbody>
                                @forelse ($data as $akademiks)
                                    <tr>
                                        <td>{{ $akademiks->namaAkademik }}</td>
                                        <td>{{ $akademiks->tahunJalan }}</td>
                                        <td>{{ $akademiks->semesterJalan }}</td>
                                        <td>
                                        @csrf
                                            <a href="{{ route('akademik.edit', $akademiks->id) }}" class="btn btn-primary">Ubah Data</a>
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
