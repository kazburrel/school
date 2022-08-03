@extends('main.layouts.index')

@section('content')
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Shop Details</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Shop Details</li>
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
                    <div class="box mb-0">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="box box-body b-1 text-center no-shadow">
                                        <img src="{{asset('main_assets/images/front-end-img/product/product-6.png')}}" id="product-image"
                                            class="img-fluid" alt="" />
                                    </div>
                                    <div class="pro-photos">
                                        <div class="photos-item item-active">
                                            <img src="{{asset('main_assets/images/front-end-img/product/product-6.png')}}" alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="{{asset('main_assets/images/front-end-img/product/product-7.png')}}" alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="{{asset('main_assets/images/front-end-img/product/product-8.png')}}" alt="">
                                        </div>
                                        <div class="photos-item">
                                            <img src="{{asset('main_assets/images/front-end-img/product/product-9.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <h2 class="box-title mt-0">Product Title</h2>
                                    <div class="list-inline">
                                        <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                        <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                        <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                        <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                        <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                    </div>
                                    <h1 class="pro-price mb-0 mt-20">&#36;270
                                        <span class="old-price">&#36;540</span>
                                        <span class="text-danger">50% off</span>
                                    </h1>
                                    <hr>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly believable. but
                                        the majority have suffered alteration in some form, by injected humour</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h6>Color</h6>
                                            <div class="input-group">
                                                <ul class="icolors">
                                                    <li class="bg-danger rounded-circle"></li>
                                                    <li class="bg-info rounded-circle"></li>
                                                    <li class="bg-primary rounded-circle active"></li>
                                                </ul>
                                            </div>
                                            <h6 class="mt-20">Available Size</h6>
                                            <p class="mb-0">
                                                <span class="badge badge-pill badge-lg badge-default">S</span>
                                                <span class="badge badge-pill badge-lg badge-default">M</span>
                                                <span class="badge badge-pill badge-lg badge-default">L</span>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-inline-block">
                                        <button class="btn btn-success me-10 mb-10"><i class="mdi mdi-shopping"></i> Buy
                                            Now!</button>
                                        <button class="btn btn-primary me-10 mb-10"><i class="mdi mdi-cart-plus"></i> Add To
                                            Cart</button>
                                        <button class="btn btn-info me-10 mb-10"><i class="mdi mdi-compare"></i>
                                            Compare</button>
                                        <button class="btn btn-danger me-10 mb-10"><i class="mdi mdi-heart"></i>
                                            Wishlist</button>
                                    </div>
                                    <h4 class="box-title mt-20 d-block">Key Highlights</h4>
                                    <ul class="list list-unstyled mb-30">
                                        <li><i class="fa fa-check text-danger float-none"></i> Party Wear</li>
                                        <li><i class="fa fa-check text-danger float-none"></i> Nam libero tempore, cum
                                            soluta nobis est</li>
                                        <li><i class="fa fa-check text-danger float-none"></i> Omnis voluptas as placeat
                                            facere possimus omnis voluptas.</li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs customtab2" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home7"
                                                role="tab">Detail</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile7"
                                                role="tab">Specification</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#messages7"
                                                role="tab">Review</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home7" role="tabpanel">
                                            <div class="px-15 pt-30">
                                                <h4 class="fw-500">Sed commodo volutpat finibus</h4>
                                                <p>The best way is to develop and follow a plan. Start with your goals in
                                                    mind and then work backwards to develop the plan. What steps are
                                                    required to get you to the goals? Make the plan as detailed as possible.
                                                    Try to visualize and then plan for, every possible setback. Commit the
                                                    plan to paper and then keep it with you at all times. Review it
                                                    regularly and ensure that every step takes you closer to your Vision and
                                                    Goals. If the plan doesn’t support the vision then change it!</p>

                                                <p>Quisque at neque sodales, viverra nisi eu, facilisis velit. Nam tristique
                                                    et tellus interdum laoreet. Quisque fringilla sem eros, non ultricies
                                                    est pellentesque id. Nulla sodales in libero viverra porta. Donec
                                                    egestas orci id ornare malesuada. Vestibulum ante ipsum primis in
                                                    faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vel
                                                    fermentum dui, id feugiat sem. Curabitur sit amet erat dolor. Integer ut
                                                    facilisis dolor, sit amet mattis risus. Proin fringilla eget velit non
                                                    maximus. Praesent vitae augue sapien.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel">
                                            <div class="px-15 pt-30">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="390">Brand</td>
                                                                <td> Brand Name </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Delivery Condition</td>
                                                                <td> Lorem Ipsum </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Type</td>
                                                                <td> Party Wear </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Style</td>
                                                                <td> Modern </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Number</td>
                                                                <td> FG1548952 </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages7" role="tabpanel">
                                            <div class="px-15 pt-30">
                                                <div class="card card-body no-border no-shadow mb-0 p-0">
                                                    <div class="card-courses-list-bx">
                                                        <ul class="card-courses-view">
                                                            <li class="card-courses-user">
                                                                <div class="card-courses-user-pic bg-primary-light">
                                                                    <img src="{{asset('main_assets/images/avatar/avatar-1.png')}}"
                                                                        alt="">
                                                                </div>
                                                                <div class="card-courses-user-info">
                                                                    <h5>Reviewer</h5>
                                                                    <h4>Keny White</h4>
                                                                </div>
                                                            </li>
                                                            <li class="card-courses-review">
                                                                <h5>3 Review</h5>
                                                                <ul class="cours-star">
                                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                            </li>
                                                            <li class="card-courses-categories">
                                                                <h5>Date</h5>
                                                                <h4>10/12/2019</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="row card-courses-dec">
                                                        <div class="col-md-12">
                                                            <h6 class="mb-10">Best Quality Product</h6>
                                                            <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae,
                                                                pro detracto disputando reformidans at, ex vel suas eripuit.
                                                                Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit
                                                                te possit senserit, eam alia veritus maluisset ei, id cibo
                                                                vocent ocurreret per. Te qui doming doctus referrentur, usu
                                                                debet tamquam et. Sea ut nullam aperiam, mei cu tollit
                                                                salutatus delicatissimi. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Related Product</h2>
                    <hr>
                </div>
            </div>
            <div class="row fx-element-overlay">
                <div class="col-12 col-xl-3 col-md-6">
                    <div class="box box-default">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1 mb-0"> <img
                                    src="{{asset('main_assets/images/front-end-img/product/product-1.png')}}" alt="user">
                                <div class="fx-overlay scrl-up">
                                    <ul class="fx-info">
                                        <li><a class="btn btn-outline image-popup-vertical-fit"
                                                href="{{asset('main_assets/images/front-end-img/product/product-1.png')}}">Quick View</a></li>
                                        <li><a class="btn btn-outline" href="javascript:void(0);">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fx-card-content text-start mb-0">
                                <div class="product-text">
                                    <h4 class="box-title mb-0">Product Name</h4>
                                    <p class="text-muted my-5">Lorem Ipsum Dummy Text</p>
                                    <ul class="cours-star mb-5">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="pro-price text-blue">$22.00<small class="ms-5"><del>$24.99</del></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6">
                    <div class="box box-default">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1 mb-0"> <img
                                    src="{{asset('main_assets/images/front-end-img/product/product-2.png')}}" alt="user">
                                <div class="fx-overlay scrl-up">
                                    <ul class="fx-info">
                                        <li><a class="btn btn-outline image-popup-vertical-fit"
                                                href="{{asset('main_assets/images/front-end-img/product/product-2.png')}}">Quick View</a></li>
                                        <li><a class="btn btn-outline" href="javascript:void(0);">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fx-card-content text-start mb-0">
                                <div class="product-text">
                                    <h4 class="box-title mb-0">Product Name</h4>
                                    <p class="text-muted my-5">Lorem Ipsum Dummy Text</p>
                                    <ul class="cours-star mb-5">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="pro-price text-blue">$22.00<small class="ms-5"><del>$24.99</del></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6">
                    <div class="box box-default">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1 mb-0"> <img
                                    src="{{asset('main_assets/images/front-end-img/product/product-3.png')}}" alt="user">
                                <div class="fx-overlay scrl-up">
                                    <ul class="fx-info">
                                        <li><a class="btn btn-outline image-popup-vertical-fit"
                                                href="{{asset('main_assets/images/front-end-img/product/product-3.png')}}">Quick View</a></li>
                                        <li><a class="btn btn-outline" href="javascript:void(0);">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fx-card-content text-start mb-0">
                                <div class="product-text">
                                    <h4 class="box-title mb-0">Product Name</h4>
                                    <p class="text-muted my-5">Lorem Ipsum Dummy Text</p>
                                    <ul class="cours-star mb-5">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="pro-price text-blue">$22.00<small class="ms-5"><del>$24.99</del></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6">
                    <div class="box box-default">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1 mb-0"> <img
                                    src="{{asset('main_assets/images/front-end-img/product/product-4.png')}}" alt="user">
                                <div class="fx-overlay scrl-up">
                                    <ul class="fx-info">
                                        <li><a class="btn btn-outline image-popup-vertical-fit"
                                                href="{{asset('main_assets/images/front-end-img/product/product-4.png')}}">Quick View</a></li>
                                        <li><a class="btn btn-outline" href="javascript:void(0);">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fx-card-content text-start mb-0">
                                <div class="product-text">
                                    <h4 class="box-title mb-0">Product Name</h4>
                                    <p class="text-muted my-5">Lorem Ipsum Dummy Text</p>
                                    <ul class="cours-star mb-5">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4 class="pro-price text-blue">$22.00<small class="ms-5"><del>$24.99</del></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
