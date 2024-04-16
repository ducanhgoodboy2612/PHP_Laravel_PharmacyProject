@extends('user.layout')

@section('content')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Store</strong></div>
            </div>
        </div>
    </div>

    <div class="flexbox" style="width: 100%; height: 100px;margin-top: 20px;">

        <div class="dropdown custom-dropdown">
            <a href="#" style="width: 130px;" data-toggle="dropdown" class="dropdown-link" aria-haspopup="true"
                aria-expanded="false"> <span class="icon-dashboard2 mr-2"></span>
                Category <i class="fas fa-angle-right"></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 200px">


                <!-- <a class="dropdown-item" href="#">Dashboard 1</a>
                                                                                          <a class="dropdown-item" href="#">Dashboard 2</a>
                                                                                          <a class="dropdown-item" href="#">Dashboard 3</a>
                                                                                          <a class="dropdown-item" href="#">Dashboard 4 <span>New</span></a>
                                                                                          <a class="dropdown-item" href="#">Dashboard 5 <span>New</span></a> -->
                @foreach ($cates as $cate)
                    <a class="dropdown-item" href="/store/category/{{ $cate->Cate_id }}">{{ $cate->Cate_name }}</a>
                @endforeach



            </div>
        </div>
        <div class="search" style="width: 80%;">

            <div class="box">
                <form class="sbox" action="{{ URL::to('/store/search') }}" method="post">
                    @csrf
                    <input class="stext" type="text" name="find" placeholder="Tìm kiếm ...">
                    <button class="sbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>

    <div class="heading-section text-center" style="text-align: center; margin-top: -15px;    padding-left: 250px;">
        <h2>
            NHÀ THUỐC MEDILIFE
        </h2>
    </div>

    <!-- <nav class="menu" style="width: 100%;">
        <ul>
            <li><a href="#row1" class="active" onclick="selectMenuItem(this)">ĐƯỢC YÊU THÍCH</a></li>
            <li><a href="#row2" onclick="selectMenuItem(this)">MÓN MỚI</a></li>
            <li><a href="#row3" onclick="selectMenuItem(this)">GÀ HỘI AN</a></li>
            <li><a href="#row4" onclick="selectMenuItem(this)">GÀ CHIÊN MẮM</a></li>
            <li><a href="#row5" onclick="selectMenuItem(this)">CÁC MÓN KHÁC</a></li>
            <li><a href="#row6" onclick="selectMenuItem(this)">ĂN KÈM VÀ NƯỚC UỐNG</a></li>
        </ul>
        </nav> -->
    <div class="custom-row" style="height: 200px; margin-top: 100px;">
        <div id="cate1" class="link-btn">

            <img src="/assetUser/img/cate1.png">
            <p>Ưu đãi đặc biệt</p>
        </div>
        <div id="cate2" class="link-btn">

            <img src="/assetUser/img/cate2.png">
            <p>Được tin dùng</p>
        </div>
        <div id="cate3" class="link-btn">
            <img src="/assetUser/img/cate4.png">

            <p>Tủ thuốc gia đình</p>
        </div>
        <div id="cate4" class="link-btn">

            <img src="/assetUser/img/cate7.png">
            <p>Chăm sóc sức khỏe</p>
        </div>
        <div id="cate5" class="link-btn">

            <img src="/assetUser/img/cate5.png">
            <p>TP chức năng</p>
        </div>
        <div id="cate6" class="link-btn">

            <img src="/assetUser/img/cate6.png">
            <p>Mẹ và bé</p>
        </div>
        <div id="cate7" class="link-btn">
            <img src="/assetUser/img/cate3.png">

            <p>Vệ sinh cá nhân</p>
        </div>

        <div id="cate8" class="link-btn">

            <img src="/assetUser/img/cate8.png">
            <p>Thiết bị y tế</p>
        </div>


    </div>

    <div class="site-section">
        <div class="container">

            {{-- <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
                <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
                    data-toggle="dropdown">Reference</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">Relevance</a>
                    <a class="dropdown-item" href="#">Name, A to Z</a>
                    <a class="dropdown-item" href="#">Name, Z to A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Price, low to high</a>
                    <a class="dropdown-item" href="#">Price, high to low</a>
                </div>
            </div>
        </div> --}}
            @isset($cate_prod)
                <div class="row">

                    @foreach ($cate_prod as $item)
                        <div class="col-sm-4 col-lg-3 text-center item mb-5 card-hover">
                            <!-- <span class="tag">Sale</span> -->
                            <a href="shop-single.html"> <img src="/assetUser{{ $item['Image'] }}" alt="Image"
                                    style="width: 75%"></a>
                            <div style=" height: 90px">
                                <h3 class="text-dark"><a href="/user/{{ $item['Product_Id'] }}/detail"
                                        style="font-size: 20px; font-weight: lighter; font-family: 'Roboto', sans-serif;">{{ $item['Product_Name'] }}</a>
                                </h3>
                            </div>
                            {{-- <p class="price" style="font-size: 24px; font-weight: normal;">{{ $item['Unit_Price'] }}</p> --}}
                            <div class="price-and-icons d-flex justify-content-center align-items-center">
                                <p class="price" style="font-size: 22px; font-weight: normal;">
                                    {{ number_format($item['Unit_Price'], 0, ',', '.') }} đ</p>

                            </div>

                            <button type="button" class="btn add-to-cart" data-product-id="{{ $item['Product_Id'] }}">
                                <a href="/cart/add/{{ $item['Product_Id'] }}">
                                    Add to Cart
                                </a>
                            </button>

                            <div style="margin-top: -25px" class="icons d-flex justify-content-center align-items-center">
                                <div class="icon-container d-flex justify-content-center align-items-center ml-2 mt-4"
                                    style="margin-top: 30px">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="icon-container d-flex justify-content-center align-items-center ml-2 mt-4">
                                    <i class="fas fa-heart" style="color: rgb(91, 194, 174);"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            @endisset
            @isset($ds)
                <div class="row">

                    @foreach ($ds as $item)
                        <div class="col-sm-4 col-lg-3 text-center item mb-5 card-hover">
                            <!-- <span class="tag">Sale</span> -->
                            <a href="shop-single.html"> <img src="/assetUser{{ $item['Image'] }}" alt="Image"
                                    style="width: 75%"></a>
                            <div style=" height: 90px">
                                <h3 class="text-dark"><a href="/user/{{ $item['Product_Id'] }}/detail"
                                        style="font-size: 20px; font-weight: lighter; font-family: 'Roboto', sans-serif;">{{ $item['Product_Name'] }}</a>
                                </h3>
                            </div>
                            {{-- <p class="price" style="font-size: 24px; font-weight: normal;">{{ $item['Unit_Price'] }}</p> --}}
                            <div class="price-and-icons d-flex justify-content-center align-items-center">
                                <p class="price" style="font-size: 22px; font-weight: normal;">
                                    {{ number_format($item['Unit_Price'], 0, ',', '.') }} đ</p>

                            </div>

                            <button type="button" class="btn add-to-cart" data-product-id="{{ $item['Product_Id'] }}">
                                <a href="/cart/add/{{ $item['Product_Id'] }}">
                                    Add to Cart
                                </a>
                            </button>

                            <div style="margin-top: -25px" class="icons d-flex justify-content-center align-items-center">
                                <div class="icon-container d-flex justify-content-center align-items-center ml-2 mt-4"
                                    style="margin-top: 30px">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="icon-container d-flex justify-content-center align-items-center ml-2 mt-4">
                                    <i class="fas fa-heart" style="color: rgb(91, 194, 174);"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            @endisset

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="shop.html" class="btn btn-primary px-4 py-3">View All Products</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                        <div class="banner-1-inner align-self-center">
                            <h2>Pharma Products S</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                        <div class="banner-1-inner ml-auto  align-self-center">
                            <h2>Rated by Experts</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                                voluptatem.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}




@endsection
