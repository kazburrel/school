@extends('main.layouts.index')

@section('content')
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Orders</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Orders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->

    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="productorder" class="table table-hover no-wrap product-order"
                                    data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Order ID</th>
                                            <th>Photo</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-1.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>17</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-2.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>12</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-3.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>15</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-4.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>19</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-danger">Failed</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-5.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>24</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-success">Pending</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-6.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>

                                            <td>04</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-danger">Failed</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-7.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>10</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-8.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>11</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-9.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>13</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-10.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>34</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-11.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>22</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-danger">Failed</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maical Roy</td>
                                            <td>#12485791</td>
                                            <td><img src="{{asset('main_assets/images/front-end-img/product/product-12.png')}}" alt="product"
                                                    width="80"></td>
                                            <td>Product Title</td>
                                            <td>12</td>
                                            <td>24-01-2018</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><a href="javascript:void(0)" class="text-info me-10"
                                                    data-bs-toggle="tooltip" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-danger"
                                                    data-original-title="Delete" data-bs-toggle="tooltip">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
