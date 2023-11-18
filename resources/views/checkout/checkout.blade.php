@extends('layouts.layout')
@section('content')
   <div class="container mt-5">
       <table>
           <thead>
           <tr>
               <th>Thumb</th>
               <th>Title</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Subtotal</th>
           </tr>
           </thead>
           <tbody>
           @foreach($cart as $product)
               <tr>
                   <td><img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}" width="50"></td>
                   <td>{{ $product['title'] }}</td>
                   <td>{{ $product['price'] }}</td>
                   <td>{{ $product['quantity'] }}</td>
                   <td>{{ $product['subtotal'] }}</td>
               </tr>
           @endforeach
           </tbody>
       </table>
   </div>
{{--    <div class="breadcrumbs">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6 col-md-6 col-12">--}}
{{--                    <div class="breadcrumbs-content">--}}
{{--                        <h1 class="page-title">{{$title}}</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6 col-12">--}}
{{--                    <ul class="breadcrumb-nav">--}}
{{--                        <li><a href="/">Trang chủ</a></li>--}}
{{--                        <li>{{$title}}</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container my-5">--}}
{{--        <h3>Nhập thông tin địa chỉ</h3>--}}
{{--        <form class="row mt-4">--}}
{{--            <div class="mb-3 col-md-3 col-12">--}}
{{--                <label for="" class="form-label fw-bold text-dark fs-6">Đất nước</label>--}}
{{--                <input type="text" name="Country" class="form-control" id="" aria-describedby="emailHelp">--}}

{{--            </div>--}}
{{--            <div class="mb-3 col-md-3 col-12">--}}
{{--                <label for="" class="form-label fw-bold text-dark fs-6">Tỉnh / Thành phố</label>--}}
{{--                <input type="text" name="province" class="form-control" id="" aria-describedby="emailHelp">--}}

{{--            </div>--}}
{{--            <div class="mb-3 col-md-3 col-12">--}}
{{--                <label for="" class="form-label fw-bold text-dark fs-6">Quận / Huyện</label>--}}
{{--                <input type="text" name="district" class="form-control" id="" aria-describedby="emailHelp">--}}

{{--            </div>--}}
{{--            <div class="mb-3 col-md-3 col-12">--}}
{{--                <label for="" class="form-label fw-bold text-dark fs-6">Xã / Phường</label>--}}
{{--                <input type="text" name="wards" class="form-control" id="" aria-describedby="emailHelp">--}}

{{--            </div>--}}
{{--            <div class="col-12">--}}
{{--                <label for="" class="form-label fw-bold text-dark fs-6">Thôn / Xóm / Đường / Số nhà</label>--}}
{{--                <input type="text" name="address" class="form-control" id="" aria-describedby="emailHelp">--}}

{{--            </div>--}}
{{--        </form>--}}
{{--        <div class="dashboard-block mt-0">--}}
{{--            <h3 class="block-title">Giỏ hàng</h3>--}}
{{--            <nav class="list-nav">--}}
{{--                <ul>--}}
{{--                    <li class="active"><a href="javascript:void(0)">Số lượng <span>{{count($carts)}}</span></a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <!-- Start Items Area -->--}}
{{--            <form class="" action="">--}}

{{--            </form>--}}
{{--            <div class="my-items">--}}
{{--                <!-- Start List Title -->--}}
{{--                <div class="item-list-title">--}}
{{--                    <div class="row align-items-center text-center">--}}
{{--                        <div class="col-1 ">--}}
{{--                            <p>STT</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1 col-12">--}}
{{--                            <p>Ảnh</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 col-12">--}}
{{--                            <p>Tên sản phẩm</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 col-12 ">--}}
{{--                            <p>Giá</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 col-12 ">--}}
{{--                            <p>Số lượng</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 col-12 ">--}}
{{--                            <p>Tổng</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 col-12 ">--}}
{{--                            <p>Xóa</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End List Title -->--}}
{{--                <!-- Start Single List -->--}}
{{--                @foreach($carts as $cart)--}}
{{--                    <div class="single-item-list text-center">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-1">{{ $loop->iteration }}</div>--}}
{{--                            <div class="col-md-1 col-12">--}}
{{--                                <img class="w-100" src="{{$cart->thumb}}" alt="{{$cart->nameProduct}}">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-12">--}}
{{--                                <h6 class="title text-start"><a href="{{ route('products.details', ['slug' =>$cart->Product->slug]) }}">{{$cart->nameProduct}}</a></h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-12">--}}
{{--                                <span class="price">{{ number_format($cart->price) }} VNĐ</span>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-12 product-infor form-add-to-cart" id="form-add-to-cart-{{$cart->id}}">--}}
{{--                                <div class="number mx-auto">--}}
{{--                                    <button type="button " class="decreaseButton" id="decreaseButton">-</button>--}}
{{--                                    <input name="quanity" class="quantity numberInput" type="number" inputmode="numeric" id="numberInput" data-cart-id="{{ $cart->id }}"--}}
{{--                                           value="{{ $cart->quanity }}" min="0">--}}
{{--                                    <button type="button " class="increaseButton" id="increaseButton">+</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-12">--}}
{{--                                <span id="subtotal-{{ $cart->id }}" class="subtotal">{{ number_format($cart->subtotal) }} VNĐ</span>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-12 align-right">--}}
{{--                                <form method="post" action="{{ route('carts.destroy', ['id' => $cart->id]) }}" class="action-btn text-center">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <li>--}}
{{--                                        <button type="submit" class="border-0 bg-transparent">--}}
{{--                                            <i class="lni lni-trash"></i>--}}
{{--                                        </button>--}}
{{--                                    </li>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <div class="d-flex justify-content-between  mt-3">--}}
{{--                    <a href="" id="updateCartButton" class="btn btn-success">Cập nhật</a>--}}
{{--                    <a href="" id="buy-products" class="btn btn-info">Mua hàng</a>--}}
{{--                </div>--}}

{{--                <!-- End Single List -->--}}
{{--                <!-- Pagination -->--}}
{{--                <div class="pagination left">--}}
{{--                    <div class="pagination mt-4 pb-4">--}}
{{--                        {{ $carts->links() }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/ End Pagination -->--}}
{{--            </div>--}}
{{--            <!-- End Items Area -->--}}
{{--        </div>--}}

{{--    </div>--}}
@endsection