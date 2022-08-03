@extends('main.layouts.index')

@section('content')
<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">						
                    <h2 class="page-title text-white">Cart</h2>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
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
              <div class="box-header bg-primary">
                <h4 class="box-title"><strong>YOUR CART (6 ITEMS)</strong></h4>
              </div>

              <div class="box-body">
                <div class="table-responsive">
                    <table class="table product-overview">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product info</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th style="text-align:center">Total</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-1.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td width="70">
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td width="100" align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-2.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td>
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-3.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td>
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-4.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td>
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-5.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td>
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('main_assets/images/front-end-img/product/product-6.png')}}" alt="" width="80"></td>
                                <td>
                                    <h5>Product Name Here</h5>
                                    <p>Lorem Ipsum available the majority have suffered alteration in some.</p>
                                </td>
                                <td>$270</td>
                                <td>
                                    <input type="number" class="form-control" placeholder="1" min="0" max="5">
                                </td>
                                <td align="center" class="fw-900">$270</td>
                                <td align="center"><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
                            </tr>							
                        </tbody>
                    </table>
                    <button class="btn btn-success pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                    <button class="btn btn-info"><i class="fa fa-arrow-left"></i> Continue shopping</button>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="box">
              <div class="box-header bg-success">
                <h4 class="box-title"><strong>Discount</strong></h4>
              </div>
              <div class="box-body">
                <p>If you have any discount vouchers/coupans, apply here.<br> If you don't have any, click <a href="javascript:void(0);" class="text-link">here</a> to get one.</p>
                <form class="form-inline mt-20">
                    <div class="input-group w-p100">
                        <input type="text" class="form-control">
                        <button type="button" class="btn btn-danger">Apply</button>
                    </div>
                </form>

              </div>
            </div>
            <div class="box">
              <div class="box-header bg-dark">
                <h4 class="box-title"><strong>Support</strong></h4>
              </div>

              <div class="box-body">
                <h4 class="fw-800"><i class="ti-mobile"></i> +1800 123 1234 <span class="text-info">(Toll Free)</span></h4>
                <p>Contact us for any queries. We are avalible 24x7x365.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="box">
              <div class="box-header bg-info">
                <h4 class="box-title"><strong>Cart Summary</strong></h4>
              </div>

              <div class="box-body py-0">
                <div class="table-responsive">
                    <table class="table simple mb-0">
                        <tbody>
                            <tr>
                                <td>Total</td>
                                <td class="text-end fw-700">$3240</td>
                            </tr>
                            <tr>
                                <td>Coupan Discount</td>
                                <td class="text-end fw-700"><span class="text-danger me-15">50%</span>-$1620</td>
                            </tr>
                            <tr>
                                <td>Delivery Charges</td>
                                <td class="text-end fw-700">$50</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td class="text-end fw-700">$18</td>
                            </tr>
                            <tr>
                                <th class="bt-1">Payable Amount</th>
                                <th class="bt-1 text-end fw-900 fs-18">$1688</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
              <div class="box-footer">	
                <button class="btn btn-danger">Cancel Order</button>
                <button class="btn btn-primary pull-right">Place Order</button>
              </div>
            </div> 
          </div>
        </div>
    </div>
</section>	
@endsection