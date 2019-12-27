@extends('layouts.master')
@section('content')
    <!-- image for background area -->
    <div class="breadcrumb-area pt-205  pb-210" style="background-image: {{asset('public/assets/img/bg/shop.jpg')}}">
        <div class="container">
{{--            <div class="breadcrumb-content text-center">--}}
{{--                <h2>shop grid 3 column</h2>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">home</a></li>--}}
{{--                    <li>shop grid 3 column</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- Side nav area begins -->
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar mr-50">
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Search Services</h3>
                            <div class="sidebar-search">
                                <form action="#">
                                    <input placeholder="Search Products..." type="text">
                                    <button><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">Filter by Price</h3>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price"/>
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-45">
                            <h3 class="sidebar-title">Categories</h3>
                            @foreach($category as $subgroup)
                                <div class="sidebar-categories">
                                    <ul>
                                        <li><a href="#">{{$subgroup->name}} <span>4</span></a></li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Top rated services</h3>
                            <div class="sidebar-top-rated-all">
                                @foreach($top_service as $top)
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">

                                                <a href="#"><img src="{{asset("storage/".$top->picture)}}" alt="" width="100" height="80"></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">{{$top->name}}</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <span>{{$top->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side nav area ends -->
                <!-- Main Area begin -->
                <div class="col-lg-9">
                    <div class="shop-product-wrapper res-xl">
                        <div class="shop-bar-area">
                            <div class="shop-bar pb-60">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>23</span> Product Found of <span>50</span></p>
                                    </div>
                                    <div class="shop-selector">
                                        <label>Sort By : </label>
                                        <select name="select">
                                            <option value="">Default</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop-filter-tab">
                                    <div class="shop-tab nav" role=tablist>
                                        <a class="active" href="#grid-sidebar3" data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="ti-layout-grid4-alt"></i>
                                        </a>
                                        <a href="#grid-sidebar4" data-toggle="tab" role="tab" aria-selected="true">
                                            <i class="ti-menu"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-product-content tab-content">
                                <div id="grid-sidebar3" class="tab-pane fade active show">
                                    <div class="row">
                                        @foreach($data as $datum)
                                            <div class="col-md-6 col-xl-4">
                                                <div class="product-wrapper mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="312" height="400">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                            <a class="animate-left" title="Wishlist" href="#">
                                                                <i class="pe-7s-like2"></i>
                                                            </a>
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#myModal{{$loop->index}}" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"> {{$datum->name}} </a></h4>
                                                        <span>GHC {{$datum->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal view details begins here -->
                                            <!-- modal -->
                                            <div class="modal fade" id="myModal{{$loop->index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span class="pe-7s-close" aria-hidden="true"></span>
                                                </button>
                                                <div class="modal-dialog modal-quickview-width" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="qwick-view-left">
                                                                <div class="quick-view-learg-img">
                                                                    <div class="quick-view-tab-content tab-content">
                                                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="300" height="320">
                                                                        </div>
                                                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="300" height="320">
                                                                        </div>
                                                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt=""  width="300" height="320">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="quick-view-list nav" role="tablist">
                                                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                    <a href="#modal2" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                    <a href="#modal3" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="qwick-view-right">
                                                                <div class="qwick-view-content">
                                                                    <h3>{{$datum->name}}</h3>
                                                                    <div class="price">
                                                                        <span class="new">GHC {{$datum->price}}</span>
{{--                                                                        <span class="old">$120.00  </span>--}}
                                                                    </div>
                                                                    <div class="rating-number">
                                                                        <div class="quick-view-rating">
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                        </div>
                                                                        <div class="quick-view-number">
                                                                            <span>2 Ratting (S)</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>{{$datum->service_description}}</p>
                                                                    <div class="quickview-plus-minus">
{{--                                                                        <div class="cart-plus-minus">--}}
{{--                                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">--}}
{{--                                                                        </div>--}}
                                                                        <div class="quickview-btn-cart">
                                                                            <a class="btn-hover-black" href="#">Contact</a>
                                                                        </div>
                                                                        <div class="quickview-btn-wishlist">
                                                                            <a class="btn-hover" href="#"><i class="pe-7s-like2"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="grid-sidebar4" class="tab-pane fade">
                                    <div class="row">
                                        @foreach($data as $datum)
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="{{asset("storage/".$datum->picture)}}" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal{{$loop->index}}" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#"> {{$datum->name}}</a></h4>
                                                            <span>GHC{{$datum->price}}</span>
                                                            <p>{{$datum->service_description}}</p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">Contact</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal view details begins here -->
                                            <!-- modal -->
                                            <div class="modal fade" id=exampleModal{{$loop->index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span class="pe-7s-close" aria-hidden="true"></span>
                                                </button>
                                                <div class="modal-dialog modal-quickview-width" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="qwick-view-left">
                                                                <div class="quick-view-learg-img">
                                                                    <div class="quick-view-tab-content tab-content">
                                                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="320" height="380">
                                                                        </div>
                                                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="320" height="380">
                                                                        </div>
                                                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                                                            <img src="{{asset('storage/'.$datum->picture)}}" alt=""  width="320" height="380">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="quick-view-list nav" role="tablist">
                                                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                    <a href="#modal2" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                    <a href="#modal3" data-toggle="tab" role="tab">
                                                                        <img src="{{asset('storage/'.$datum->picture)}}" alt="" width="100" height="80">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="qwick-view-right">
                                                                <div class="qwick-view-content">
                                                                    <h3>{{$datum->name}}</h3>
                                                                    <div class="price">
                                                                        <span class="new">{{$datum->price}}</span>
                                                                        <span class="old">$120.00  </span>
                                                                    </div>
                                                                    <div class="rating-number">
                                                                        <div class="quick-view-rating">
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                            <i class="pe-7s-star"></i>
                                                                        </div>
                                                                        <div class="quick-view-number">
                                                                            <span>2 Ratting (S)</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>{{$datum->service_description}}</p>
                                                                    <div class="quickview-plus-minus">
                                                                        {{--                                                                        <div class="cart-plus-minus">--}}
                                                                        {{--                                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">--}}
                                                                        {{--                                                                        </div>--}}
                                                                        <div class="quickview-btn-cart">
                                                                            <a class="btn-hover-black" href="#">Contact</a>
                                                                        </div>
                                                                        <div class="quickview-btn-wishlist">
                                                                            <a class="btn-hover" href="#"><i class="pe-7s-like2"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-style mt-50 text-center">
                        <ul>
                            <li><a href="#"><i class="ti-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">19</a></li>
                            <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Main area ends here -->

            </div>
        </div>
    </div>



{{--    <!-- Modal view details begins here -->--}}
{{--    <!-- modal -->--}}
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--            <span class="pe-7s-close" aria-hidden="true"></span>--}}
{{--        </button>--}}
{{--        <div class="modal-dialog modal-quickview-width" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="qwick-view-left">--}}
{{--                        <div class="quick-view-learg-img">--}}
{{--                            <div class="quick-view-tab-content tab-content">--}}
{{--                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">--}}
{{--                                    <img src="assets/img/quick-view/l1.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="modal2" role="tabpanel">--}}
{{--                                    <img src="assets/img/quick-view/l2.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="modal3" role="tabpanel">--}}
{{--                                    <img src="assets/img/quick-view/l3.jpg" alt="">--}}
{{--                                 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="quick-view-list nav" role="tablist">--}}
{{--                            <a class="active" href="#modal1" data-toggle="tab" role="tab">--}}
{{--                                <img src="assets/img/quick-view/s1.jpg" alt="">--}}
{{--                            </a>--}}
{{--                            <a href="#modal2" data-toggle="tab" role="tab">--}}
{{--                                <img src="assets/img/quick-view/s2.jpg" alt="">--}}
{{--                            </a>--}}
{{--                            <a href="#modal3" data-toggle="tab" role="tab">--}}
{{--                                <img src="assets/img/quick-view/s3.jpg" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="qwick-view-right">--}}
{{--                        <div class="qwick-view-content">--}}
{{--                            <h3>{{$datum->name}}</h3>--}}
{{--                            <div class="price">--}}
{{--                                <span class="new">{{$datum->price}}</span>--}}
{{--                                <span class="old">$120.00  </span>--}}
{{--                            </div>--}}
{{--                            <div class="rating-number">--}}
{{--                                <div class="quick-view-rating">--}}
{{--                                    <i class="pe-7s-star"></i>--}}
{{--                                    <i class="pe-7s-star"></i>--}}
{{--                                    <i class="pe-7s-star"></i>--}}
{{--                                    <i class="pe-7s-star"></i>--}}
{{--                                    <i class="pe-7s-star"></i>--}}
{{--                                </div>--}}
{{--                                <div class="quick-view-number">--}}
{{--                                    <span>2 Ratting (S)</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>{{$datum->service_description}}</p>--}}
{{--                            <div class="quickview-plus-minus">--}}
{{--                                <div class="cart-plus-minus">--}}
{{--                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">--}}
{{--                                </div>--}}
{{--                                <div class="quickview-btn-cart">--}}
{{--                                    <a class="btn-hover-black" href="#">Contact</a>--}}
{{--                                </div>--}}
{{--                                <div class="quickview-btn-wishlist">--}}
{{--                                    <a class="btn-hover" href="#"><i class="pe-7s-like2"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- modal -->--}}
{{--    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <span class="pe-7s-close" aria-hidden="true"></span>--}}
{{--        </button>--}}
{{--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--        <div class="modal-dialog modal-compare-width" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <form action="#">--}}
{{--                        <div class="table-content compare-style table-responsive">--}}
{{--                            <table>--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th></th>--}}
{{--                                    <th>--}}
{{--                                        <a href="#">Remove <span>x</span></a>--}}
{{--                                        <img src="assets/img/cart/4.jpg" alt="">--}}
{{--                                        <p>Blush Sequin Top </p>--}}
{{--                                        <span>$75.99</span>--}}
{{--                                        <a class="compare-btn" href="#">Add to cart</a>--}}
{{--                                    </th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>Description </h4></td>--}}
{{--                                    <td class="compare-dec compare-common">--}}
{{--                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>Sku </h4></td>--}}
{{--                                    <td class="product-none compare-common">--}}
{{--                                        <p>-</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>Availability  </h4></td>--}}
{{--                                    <td class="compare-stock compare-common">--}}
{{--                                        <p>In stock</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>Weight   </h4></td>--}}
{{--                                    <td class="compare-none compare-common">--}}
{{--                                        <p>-</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>Dimensions   </h4></td>--}}
{{--                                    <td class="compare-stock compare-common">--}}
{{--                                        <p>N/A</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>brand   </h4></td>--}}
{{--                                    <td class="compare-brand compare-common">--}}
{{--                                        <p>HasTech</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>color   </h4></td>--}}
{{--                                    <td class="compare-color compare-common">--}}
{{--                                        <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"><h4>size    </h4></td>--}}
{{--                                    <td class="compare-size compare-common">--}}
{{--                                        <p>XS, S, M, L, XL, XXL </p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="compare-title"></td>--}}
{{--                                    <td class="compare-price compare-common">--}}
{{--                                        <p>$75.99 </p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
@push('scripts')
{{--    <script>--}}
{{--        window.onload = function(){--}}
{{--            $.ajax({--}}
{{--                type:'GET',--}}
{{--                url:'{{route('all_categories')}}',--}}


{{--            });--}}
{{--        };--}}
{{--    </script>--}}
    @endpush
