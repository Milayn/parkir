@extends('layouts.app')
@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Data Kategori</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../home"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Kategori</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Kategori</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              @include('categories.table')
            </div>
        </div>
    </div>
</div>

@endsection
