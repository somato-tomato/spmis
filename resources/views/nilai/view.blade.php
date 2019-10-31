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
                        <h4 class="card-title"> Nilai</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Angka
                                </th>
                                <th>
                                    Keterangan
                                </th>
                                </thead>
                                <tbody>
                                @forelse ($find as $sisi)
                                    <tr>
                                        <td>{{ $sisi->angka }}</td>
                                        <td>{{ $sisi->keterangan }}</td>
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
