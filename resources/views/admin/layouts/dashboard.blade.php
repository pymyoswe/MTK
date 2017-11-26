@extends('admin.layouts.app')
@section('title')
    Home
    @stop
@section('body')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}"> <span class="fa fa-shopping-cart"></span><b> MTK </b> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out fa-fw"></i> LOGOUT
                    </a>
                </li>
            </ul>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="">
                                <span class="fa fa-user fa-3x"></span> <strong>{{Auth::User()->name}}</strong>
                                <br><p><span class="fa fa-circle" style="color: #00ff00"></span> Online</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-truck"></i> Supplier<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('new_supplier')}}"><span class="fa fa-plus-circle"></span> New Supplier</a>
                                </li>
                                <li>
                                    <a href="{{route('view_supplier')}}"><span class="fa fa-eye"></span> View Suppliers</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-product-hunt"></i> Product Master<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('new_product')}}"><span class="fa fa-plus-circle"></span> New Product</a>
                                </li>
                                <li>
                                    <a href="{{route('view_product')}}"><span class="fa fa-eye"></span> View Products</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> Purchase Order<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('new_purchase')}}"><span class="fa fa-plus-circle"></span> New Purchase Order</a>
                                </li>
                                <li>
                                    <a href="{{route('view_purchase')}}"><span class="fa fa-eye"></span> View Purchase Order</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-dollar"></i> Sale Order<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><span class="fa fa-plus-circle"></span> New Sale Order</a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-eye"></span> View Sale Order</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i> Category<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('new_category')}}"><span class="fa fa-plus-circle"></span> New Product Category</a>
                                </li>
                                <li>
                                    <a href="{{route('view_category')}}"><span class="fa fa-eye"></span> View Product Categories</a>
                                </li>
                                <li>
                                    <a href="{{route('new_brand')}}"><span class="fa fa-plus-circle"></span> New Brand</a>
                                </li>
                                <li>
                                    <a href="{{route('view_brand')}}"><span class="fa fa-eye"></span> View Brands</a>
                                </li>
                                <li>
                                    <a href="{{route('new_measurement')}}"><span class="fa fa-plus-circle"></span> New Unit Measure</a>
                                </li>
                                <li>
                                    <a href="{{route('view_measurement')}}"><span class="fa fa-eye"></span> View Unit Measure</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>





                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@endsection
