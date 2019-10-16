@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'lembaga'
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
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nama Lembaga') }}</th>
                                    <th scope="col">{{ __('Alamat') }}</th>
                                    <th scope="col">{{ __('Kota') }}</th>
                                    <th scope="col">{{ __('No Telp') }}</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $lembagas)
                                    <tr>
                                        <td>{{ $lembagas->namaLembaga }}</td>
                                        <td>{{ $lembagas->alamatLembaga }}</td>
                                        <td>{{ $lembagas->kotkabLembaga }}</td>
                                        <td>{{ $lembagas->notelpLembaga }}</td>
                                        <td>
                                            @csrf
                                            <a href="{{ route('lembaga.edit', $lembagas->id) }}" class="btn btn-primary">Ubah Data</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
