@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Detail Admin</h3></div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$user->name}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$user->email}}</li>
                    <li class="list-group-item"><b>Foto: </b><img class="ml-3" width="50%"
                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('storage/images/default.png') }}"
                        alt="{{ $user->avatar }}"></li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('user.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection