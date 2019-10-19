@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'prodi'
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

                        <select>
                        @foreach ($data as $siklus)
                          <option>{{ $siklus->nama }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
