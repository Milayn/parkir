@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Edit Adminstrator</h3></div>
            <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                <strong>Maaf Error</strong>, Nilai yang anda masukkan salah!!!<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
              @include('admins.fieldsEdit')
            </div>
        </div>
    </div>

</div>
@endsection