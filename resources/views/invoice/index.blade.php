@extends('layouts.app')

@section('title', 'Invoice')

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
                    <h4 class="page-title">Invoice</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12">
                @php
                    \Carbon\Carbon::setLocale('id');
                @endphp

                <div class="card">
                    <div class="card-body">
                        <div class="row row-cols-3 d-flex justify-content-md-between">
                            <div class="col-md-3 d-print-flex align-self-center">
                                <address class="fs-13">
                                    <strong class="fs-14">Invoice To :</strong><br>
                                    {{ Auth::user()->kode_reseller }} - {{ Auth::user()->name }} <br>
                                    Hari & Tanggal - {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}<br>
                                </address>
                            </div>
                        </div><!--end row-->

                        <hr>

                        @isset($message)
                            <div class="alert alert-info">{{ $message }}</div>
                        @endisset

                        @if ($resellers->isNotEmpty())
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    <th>Saldo</th>
                                                    <th>Level</th>
                                                    <th>Upline</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($resellers as $reseller)
                                                    <tr>
                                                        <td>{{ $reseller->kode }}</td>
                                                        <td>{{ $reseller->nama }}</td>
                                                        <td>{{ number_format($reseller->saldo, 0, ',', '.') }}</td>
                                                        <td>{{ $reseller->nama_level }}</td>
                                                        <td>{{ $reseller->kode_upline }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- table-responsive -->
                                </div> <!-- col -->
                            </div> <!-- row -->
                        @endif

                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="mt-4">Terms And Condition :</h5>
                                <ul class="ps-3">
                                    <li><small class="fs-12">All accounts are to be paid within 7 days from receipt of
                                            invoice.
                                        </small></li>
                                    <li><small class="fs-12">To be paid by cheque or credit card or direct payment
                                            online.</small>
                                    </li>
                                    <li><small class="fs-12"> If account is not paid within 7 days the credits details
                                            supplied as
                                            confirmation of work undertaken will be charged the agreed quoted fee noted
                                            above.</small></li>
                                </ul>
                            </div> <!--end col-->
                        </div><!--end row-->

                    </div> <!-- card-body -->
                </div> <!-- card -->

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                        <div class="text-center"><small class="fs-12">Thank you very much for doing business with
                                us.</small></div>
                    </div><!--end col-->
                    <div class="col-lg-12 col-xl-4">
                        <div class="float-end d-print-none mt-2 mt-md-0">
                            <a href="javascript:window.print()" class="btn btn-info">Print</a>
                            <a href="#" class="btn btn-primary">Submit</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </div> <!-- end col -->
@endsection

@section('footer')
    @include('footer')
@endsection
