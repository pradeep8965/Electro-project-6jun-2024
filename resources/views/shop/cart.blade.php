@extends('layouts.common')

@section('common_content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="cart-page">
    @if (auth()->check())
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mb-4">
                <h1 class="text-center">Cart</h1>
            </div>
            <div class="mb-10 cart-table">
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity w-lg-15">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartDatas as $cartData)                
                            <tr class="">
                                <td class="text-center">
                                <form id="delete-form-{{$cartData['product_id']}}" method="POST" action="/shop/cart/{{$cartData['product_id']}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn text-gray-32 font-size-26 delete-button">×</button>
                                </form>
                                </td>
                                
                                <td class="d-none d-md-table-cell">
                                    <a href="#">
                                        @if(isset($cartItem->product->prod_thumbnail_img) && file_exists(public_path('storage/' . $cartItem->product->prod_thumbnail_img)))
                                            <img class="img-fluid max-width-100 p-1 border border-color-1" src="{{ asset('storage/' . $cartItem->product->prod_thumbnail_img) }}" alt="{{ $cartItem->product->name }}">
                                        @else
                                            <img class="img-fluid max-width-100 p-1 border border-color-1" src="{{ asset('storage/default-image.png') }}"   >
                                        @endif
                                    </a>
                                </td>


                                
                                <td data-title="Product">
                                    <a href="#" class="text-gray-90">{{$cartData['product_name']}}</a>
                                </td>

                                <td data-title="Price">
                                    <span class="">${{$cartData['unit_price']}}</span>
                                </td>

                                <td data-title="Quantity">
                                    <span class="sr-only">Quantity</span>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="{{$cartData['qty']}}">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </td>

                                <td data-title="Total">
                                    <span class="">${{$cartData['total']}}</span>
                                </td>
                            </tr> 
                            @endforeach
                            <tr>
                                <td colspan="6" class="border-top space-top-2 justify-content-center">
                                    <div class="pt-md-3">
                                        <div class="d-block d-md-flex flex-center-between">
                                            <div class="mb-3 mb-md-0 w-xl-40">
                                                <!-- Apply coupon Form -->
                                                
                                                    <label class="sr-only" for="subscribeSrEmailExample1">Coupon code</label>
                                                    <div class="input-group">
                                                    <form method="POST" action="#">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="form-row align-items-center">
                                                            <div class="col">
                                                                <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="Coupon code" aria-label="Coupon code" aria-describedby="subscribeButtonExample2" required="">
                                                            </div>
                                                            <div class="col-auto">
                                                                <button class="btn btn-soft-dark px-4" type="submit" id="subscribeButtonExample2">
                                                                    <i class="fas fa-tags d-md-none"></i>
                                                                    <span class="d-none d-md-inline">Apply coupon</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                
                                                <!-- End Apply coupon Form -->
                                            </div>
                                            <div class="d-md-flex">
                                                <button type="button" class="btn btn-soft-danger mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Empty cart</button>
                                                <button type="button" class="btn btn-soft-dark mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Update cart</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>                       
                        </tbody>
                    </table>
            </div>

            <div class="mb-8 cart-total">
 
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                        <div class="border-bottom border-color-1 mb-3">
                            <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Cart totals</h3>
                        </div>
                        <table class="table mb-3 mb-md-0">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="amount">${{$grandTotal}}</span></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        Flat Rate: <span class="amount">$300.00</span>
                                        <div class="mt-1">
                                            <a class="font-size-12 text-gray-90 text-decoration-on underline-on-hover font-weight-bold mb-3 d-inline-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Calculate Shipping
                                            </a>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="amount">${{$grandTotal}}</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right mt-4">
                            <button type="button" class="btn btn-soft-primary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-100 w-md-auto">Proceed to checkout</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="container text-center pb-5 pt-5">
        <img width="300" src="https://rukminim2.flixcart.com/www/800/800/promos/16/05/2019/d438a32e-765a-4d8b-b4a6-520b560971e8.png?q=90" />
        <h5>Missing Cart items?</h5>
        <h5>Login to see the items you added previously</h5>
       
        <a href="#" class="btn btn-warning text-white wishlistButton second">Login</a>
    </div>
    @endif
    
</main>
<!-- ========== END MAIN CONTENT ========== -->
@endsection