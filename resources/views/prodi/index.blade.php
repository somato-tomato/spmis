@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'fakultas'
])

@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">

                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <div class="col-md-12">
                                    <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                </div>
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nama Fakultas') }}</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($data as $prodis)
                                    <tr>
                                        <td>{{ $prodis->namaFakultas }}</td>
                                        <td>
                                            @csrf
                                            <a href="{{ url('/prodi/' . $prodis->id . '/buat') }}" class="btn btn-primary">Ubah Data</a>
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
