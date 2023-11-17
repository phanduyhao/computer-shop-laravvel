@extends('layouts.layout')
@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Danh sách {{$title}}</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="/">Trang chủ</a></li>
                    <li>Danh sách {{$title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Items Listing Grid -->
<section class="category-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="category-sidebar">
                    <!-- Start Single Widget -->
                    <div class="single-widget search">
                        <h3>Tìm kiếm</h3>
                        <form action="#">
                            <input type="text" placeholder="Tiếm kiếm...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget">
                        <h3>All Categories</h3>
                        <ul class="list">
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-dinner"></i> Hotel & Travels<span>15</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-control-panel"></i> Services <span>20</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-bullhorn"></i> Marketing <span>55</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-home"></i> Real Estate<span>35</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-bolt"></i> Electronics <span>60</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-tshirt"></i> Dress & Clothing <span>55</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-diamond-alt"></i> Jewelry & Accessories
                                    <span>45</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget range">
                        <h3>Price Range</h3>
                        <input type="range" class="form-range" name="range" step="1" min="100" max="10000"
                               value="10" onchange="rangePrimary.value=value">
                        <div class="range-inner">
                            <label>$</label>
                            <input type="text" id="rangePrimary" placeholder="100" />
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget condition">
                        <h3>Condition</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label" for="flexCheckDefault1">
                                All
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                New
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">
                                Used
                            </label>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget banner">
                        <h3>Advertisement</h3>
                        <a href="javascript:void(0)">
                            <img src="assets/images/banner/banner.jpg" alt="#">
                        </a>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="category-grid-list">
                    <div class="row">
                        <div class="col-12">
                            <div class="category-grid-topbar">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        @if(count($products) > 0)
                                            <h3 class="title">Hiển thị {{count($products)}} sản phẩm</h3>
                                        @else
                                            <h3 class="title">Hiển thị 0 sản phẩm</h3>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-grid-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-grid" type="button"
                                                        role="tab" aria-controls="nav-grid" aria-selected="true"><i
                                                        class="lni lni-grid-alt"></i></button>
                                                <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-list" type="button" role="tab"
                                                        aria-controls="nav-list" aria-selected="false"><i
                                                        class="lni lni-list"></i></button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                     aria-labelledby="nav-grid-tab">
                                    <div class="row">
                                        @if(count($products) > 0)
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <!-- Start Single Item -->
                                                    <div class="single-item-grid">
                                                        <div class="image">
                                                            <a href="{{ route('products.details', ['slug' =>$product->slug]) }}"><img src="/temp/images/product/{{$product->thumb}}" alt="{{$product->title}}"></a>
                                                            <i class=" cross-badge lni lni-bolt"></i>
                                                            @if($product->discount > 0)
                                                                <span class="flat-badge sale">Sale</span>
                                                            @endif
                                                        </div>
                                                        <div class="content">
                                                            <a href="javascript:void(0)" class="tag">{{$category->title}}</a>
                                                            <h3 class="title">
                                                                <a href="{{ route('products.details', ['slug' =>$product->slug]) }}">{{$product->Title}}</a>
                                                            </h3>
                                                            <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                                                                    </i>Nghệ An</a></p>
                                                            <ul class="info">
                                                                @if($product->discount > 0)
                                                                    <li class="discount text-dark text-decoration-line-through">{{ number_format($product->price) }} VNĐ</li>
                                                                    <li class="price">{{ number_format($product->discount) }} VNĐ</li>
                                                                @else
                                                                    <li class="price">{{ number_format($product->price) }} VNĐ</li>
                                                                @endif
                                                                <li class="like"><a href="javascript:void(0)"><i
                                                                            class="lni lni-heart"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Item -->
                                                </div>
                                            @endforeach
                                        @else
                                            <h1 class="mt-3">Chưa có sản phẩm!</h1>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Pagination -->
                                            <div class="pagination mt-4 pb-4">
                                                {{ $products->links() }}
                                            </div>
                                            <!--/ End Pagination -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                     aria-labelledby="nav-list-tab">
                                    <div class="row">
                                     @if(count($products) > 0)
                                        @foreach($products as $product)
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Item -->
                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="{{ route('products.details', ['slug' =>$product->slug]) }}"><img src="/temp/images/product/{{$product->thumb}}" alt="{{$product->Title}}"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">{{$category->title}}</a>
                                                                <h3 class="title">
                                                                    <a href="{{ route('products.details', ['slug' =>$product->slug]) }}">{{$product->Title}}</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                                                                        </i>Nghệ An</a></p>
                                                                <ul class="info">
                                                                    @if($product->discount > 0)
                                                                        <li class="discount text-dark text-decoration-line-through">{{ number_format($product->price) }} VNĐ</li>
                                                                        <li class="price">{{ number_format($product->discount) }} VNĐ</li>
                                                                    @else
                                                                        <li class="price">{{ number_format($product->price) }} VNĐ</li>
                                                                    @endif
                                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Item -->
                                            </div>
                                        @endforeach
                                     @else
                                         <h1 class="mt-3">Chưa có sản phẩm!</h1>
                                     @endif
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Pagination -->
                                            <div class="pagination mt-4 pb-4">
                                                {{ $products->links() }}
                                            </div>
                                            <!--/ End Pagination -->
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
<!-- End Items Listing Grid -->
@endsection
