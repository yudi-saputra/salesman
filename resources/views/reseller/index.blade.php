@extends('layouts.app')

@section('title', 'Downlines')

@section('navbar')
    @include('navbar')
@endsection

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Reseller</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Reseller</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Reseller Details</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table datatable table-hover" id="datatable_1">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Saldo</th>
                                        <th>Limit Saldo</th>
                                        <th>Kode Level</th>
                                        <th>Kode Upline</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($resellers as $reseller)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $reseller->kode }}</td>
                                            <td>{{ $reseller->nama }}</td>
                                            <td>{{ number_format($reseller->saldo, 0, ',', '.') }}</td>
                                            <td>{{ number_format($reseller->saldo_minimal, 0, ',', '.') }}</td>
                                            <td>{{ $reseller->nama_level ?? '-' }}</td>
                                            <td>{{ $reseller->kode_upline }}</td>
                                            <td>Aksi</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada downline ditemukan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->

    </div>
@endsection

@section('footer')
    @include('footer')
@endsection

