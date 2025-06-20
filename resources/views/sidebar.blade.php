@extends('layouts.app')

@section('sidebar')
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span class="">
                    <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Navigation</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                                <span class="badge text-bg-warning ms-auto">08</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reseller.index') }}">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Reseller</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="menu-label mt-2">
                            <span>Master Data</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCluster" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCluster">
                                <i class="iconoir-reports menu-icon"></i>
                                <span>Cluster</span>
                            </a>
                            <div class="collapse " id="sidebarCluster">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="cluster-customers.html" class="nav-link ">Jaktim</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="cluster-reports.html" class="nav-link ">Bekasi</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="cluster-reports.html" class="nav-link ">Bogor</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="cluster-reports.html" class="nav-link ">Tangkot</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="cluster-reports.html" class="nav-link ">Tangsel</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarEcommerce">
                                <i class="iconoir-cart-alt menu-icon"></i>
                                <span>Ecommerce</span>
                            </a>
                            <div class="collapse " id="sidebarEcommerce">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-products.html">Products</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-customers.html">Customers</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-customer-details.html">Customer
                                            Details</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-orders.html">Orders</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-order-details.html">Order Details</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-refunds.html">Refunds</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div>
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="apps-chat.html">
                                <i class="iconoir-chat-bubble menu-icon"></i>
                                <span>Chat</span>
                            </a>
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="apps-contact-list.html">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Contact List</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="apps-calendar.html">
                                <i class="iconoir-calendar menu-icon"></i>
                                <span>Calendar</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="apps-invoice.html">
                                <i class="iconoir-paste-clipboard menu-icon"></i>
                                <span>Invoice</span>
                            </a>
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->

                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div>
@endsection
