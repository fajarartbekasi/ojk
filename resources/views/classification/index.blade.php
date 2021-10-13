@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Classification</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="pt-3 pb-3">
                        <a href="{{route('classification.create')}}" class="btn btn-outline-info">Tambah classification</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Uraian</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($classifications as $classification)
                                <tr>
                                    <td>{{$classification->kode}}</td>
                                    <td>{{$classification->uraian}}</td>
                                    <td><a href="{{route('classification.edit', $classification->id)}}" class="btn btn-outline-info btn-sm">Edit Kode</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Maaf data belum tersedia</td>
                                </tr>

                            @endforelse
                        </tbody>
                    </table>
                    {{$classifications->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection