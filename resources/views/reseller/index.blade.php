@extends('layouts.app')

@section('title', 'Reseller')

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

        <div class="row g-3">

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-cart fs-24 align-self-center text-info me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Total Trx Sukses</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">$27,215k <span class="fs-11 text-muted fw-normal">New
                                        365 Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-cart fs-24 align-self-center text-danger me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Total Trx Gagal</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">190 <span class="fs-11 text-muted fw-normal">Order 365
                                        Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-dollar-circle fs-24 align-self-center text-info me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Nominal Trx Sukses</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">165 <span class="fs-11 text-muted fw-normal">Comp. Order
                                        365 Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div><!--end col-->

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-xmark-circle fs-24 align-self-center text-danger me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Cancled</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">25 <span class="fs-11 text-muted fw-normal">Canc.Order
                                        365 Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-xmark-circle fs-24 align-self-center text-danger me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Cancled</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">25 <span class="fs-11 text-muted fw-normal">Canc.Order
                                        365 Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->

            <div class="col-md-4 col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <i class="iconoir-xmark-circle fs-24 align-self-center text-danger me-2"></i>
                            <div class="flex-grow-1 text-truncate">
                                <p class="text-dark mb-0 fw-semibold fs-13">Cancled</p>
                                <h3 class="mt-1 mb-0 fs-18 fw-bold">25 <span class="fs-11 text-muted fw-normal">Canc.Order
                                        365 Days</span> </h3>
                            </div><!--end media body-->
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->

        </div>

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
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Saldo</th>
                                        <th>Limit Saldo</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Kode Upline</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($resellers as $reseller)
                                        <tr>
                                            <td>{{ $reseller->kode }}</td>
                                            <td>{{ $reseller->nama }}</td>
                                            <td>{{ number_format($reseller->saldo, 0, ',', '.') }}</td>
                                            <td>{{ number_format($reseller->saldo_minimal, 0, ',', '.') }}</td>
                                            <td>{{ $reseller->nama_level ?? '-' }}</td>
                                            <td><span
                                                    class="badge bg-transparent border {{ $reseller->aktif ? 'border-success text-success' : 'border-danger text-danger' }}">
                                                    {{ $reseller->aktif ? 'Aktif' : 'Tidak Aktif' }}
                                                </span></td>
                                            <td>{{ $reseller->kode_upline }}</td>
                                            <td>
                                                <a href="{{ route('reseller.show', $reseller->kode) }}"
                                                    class="btn btn-primary btn-sm">Detail</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Reseller Tidak ditemukan.</td>
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
