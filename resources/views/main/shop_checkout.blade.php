@extends('main.layouts.index')

@section('content')
<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">						
                    <h2 class="page-title text-white">Checkout</h2>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Checkout</li>
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
            <div class="col-md-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Existing customer.</h4>
                    </div>
                    <div class="box-body">							
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-6">
                                  <div class="checkbox ms-5">
                                    <input type="checkbox" id="basic_checkbox_1">
                                    <label for="basic_checkbox_1" class="form-label">Remember Me</label>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                 <div class="fog-pwd text-end">
                                    <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                  <button type="submit" class="btn btn-info w-p100 mt-15">Log In</button>
                                </div>
                                <!-- /.col -->
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">New customer?</h4>
                    </div>
                    <div class="box-body">
                        <button class="btn btn-primary">Check out as a guest</button>
                        <button class="btn btn-success">Create an account</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Billing Address</h4>
                    </div>
                    <div class="box-body pb-0">							
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="First Name">
                                </div>
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="Last Name">
                                </div>
                            </div>								
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Company Name">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Address line 1">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Address line 2">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="City/Town">
                            </div>	
                            <div class="row">
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="email" class="form-control ps-15 bg-transparent" placeholder="Your Email">
                                </div>
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="tel" class="form-control ps-15 bg-transparent" placeholder="Your Phone">
                                </div>
                            </div>	
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Shipping Address</h4>
                    </div>
                    <div class="box-body pb-0">							
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="First Name">
                                </div>
                                <div class="form-field mb-15 col-md-6 col-12">
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="Last Name">
                                </div>
                            </div>								
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Company Name">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Address line 1">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="Address line 2">
                            </div>							
                            <div class="form-field mb-15">
                                <input type="text" class="form-control ps-15 bg-transparent" placeholder="City/Town">
                            </div>							
                            <div class="form-field mb-15">
                                <textarea class="form-control" placeholder="Comment*" rows="3" name="message"></textarea>
                            </div>	
                        </form>
                    </div>
                </div>
            </div>			
            <div class="col-12">
                <div class="box">
                  <div class="box-header">
                    <h4 class="box-title">Product Summary</h4>
                  </div>
                  <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="w-200">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{asset('main_assets/images/front-end-img/product/product-1.png')}}" alt="" width="80"></td>
                                    <td>Product Name Here</td>
                                    <td>3</td>
                                    <td>$270</td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('main_assets/images/front-end-img/product/product-2.png')}}" alt="" width="80"></td>
                                    <td>Product Name Here</td>
                                    <td>3</td>
                                    <td>$270</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="text-end">Total</th>
                                    <th>$1620</th>
                                </tr>
                                <tr>
                                    <td colspan="3" align="right">Coupan Discount</td>
                                    <td>$1620</td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="right">Delivery Charges</td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="right">Tax</td>
                                    <td>$18</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="text-end fs-24 fw-700">Payable Amount</th>
                                    <th class="fs-24 fw-700">$1678</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <h4 class="box-title mb-15">Save Card</h4>
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-primary box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-visa"></i></h1>
                                        <h3>**** **** **** 7009</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Daniel Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-info box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-mastercard"></i></h1>
                                        <h3>**** **** **** 4125</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Ethan Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-warning box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-discover"></i></h1>
                                        <h3>**** **** **** 5124</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Jayden Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-danger box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-amex"></i></h1>
                                        <h3>**** **** **** 9578</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">William Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                    <hr>
                    <h4 class="box-title mb-15">Choose payment Option</h4>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#debit-card" role="tab"><span class="hidden-sm-up"><i class="fa fa-cc"></i></span> <span class="hidden-xs-down">Debit Card</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#paypal" role="tab"><span class="hidden-sm-up"><i class="fa fa-paypal"></i></span> <span class="hidden-xs-down">Paypal</span></a> </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="debit-card" role="tabpanel">
                            <div class="p-30">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-12">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="form-label">CARD NUMBER</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                                    <input type="text" class="form-control" id="exampleInputuname" placeholder="Card Number"> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="form-group">
                                                        <label class="form-label">EXPIRATION DATE</label>
                                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required=""> </div>
                                                </div>
                                                <div class="col-5 pull-right">
                                                    <div class="form-group">
                                                        <label class="form-label">CV CODE</label>
                                                        <input type="text" class="form-control" name="CVC" placeholder="CVC" required=""> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">NAME OF CARD</label>
                                                        <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"> </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-success">Make Payment</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <h3 class="box-title mt-10">General Info</h3>
                                        <h2><i class="fa fa-cc-visa text-info"></i>
                                            <i class="fa fa-cc-mastercard text-danger"></i>
                                            <i class="fa fa-cc-discover text-success"></i>
                                            <i class="fa fa-cc-amex text-warning"></i>
                                        </h2>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="paypal" role="tabpanel">						
                            <div class="p-30">
                                You can pay your money through paypal, for more info <a href="">click here</a><br><br>
                                <button class="btn btn-primary"><i class="fa fa-cc-paypal"></i> Pay with Paypal</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>	
@endsection