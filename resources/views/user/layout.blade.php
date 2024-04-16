<!DOCTYPE html>
<html lang="en">

<head>
    <title>MediLife HealthCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="/assetUser/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assetUser/css/magnific-popup.css">
    <link rel="stylesheet" href="/assetUser/css/jquery-ui.css">
    <link rel="stylesheet" href="/assetUser/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assetUser/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assetUser/css/templatemo-kind-heart-charity.css">
    <link rel="stylesheet" href="/assetUser/css/custom-pagination.css">


    {{-- <link rel="stylesheet" href="/assetadmin/css/sb-admin-2.min.css"> --}}


    <!-- <link rel="stylesheet" href="/css/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="//assetUsercss/bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" href="/assetUser/css/aos.css">

    <link rel="stylesheet" href="/assetUser/css/style.css">
    <link rel="stylesheet" href="/assetUser/css/cart.css">

    <link rel="stylesheet" href="/assetUser/css/product-detail.css">
    <link rel="stylesheet" href="/assetUser/css/product-page.css">
    <!-- <link rel="stylesheet" href="/assetUser/css/main.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


</head>

<body>

    <div class="site-wrap">


        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="/home" class="js-logo-clone">MediLife</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block" style="padding-left: 80px;">
                                <li><a href="/home">Trang chủ</a></li>
                                <li><a href="/store">Nhà thuốc</a></li>
                                <li class="has-children">
                                    <a href="#">Tư vấn</a>
                                    <ul class="dropdown">
                                        <li><a href="#">TP chức năng</a></li>
                                        <li class="has-children">
                                            <a href="#">Dinh dưỡng</a>
                                            <ul class="dropdown">

                                                <li><a href="#">Vitamins</a></li>
                                                <li><a href="#">Ăn kiêng &amp; Nutrition</a></li>
                                                <li><a href="#">Trà &amp; Thảo mộc</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Sống khỏe</a></li>
                                        <li><a href="#">Mẹ và bé</a></li>

                                    </ul>
                                </li>
                                <li><a href="contact.html">Liên hệ</a></li>

                                {{-- <li style="margin-left: 200px">Giỏ hàng<a href="/cart"
                                        class="icons-btn d-inline-block bag">
                                        <i class="bi bi-cart" style="font-size: 30px"></i>


                                    </a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="/account/login" class="icons-btn d-inline-block bag"><i class="far fa-user-circle"
                                style="font-size: 28px; margin-top: 5px"></i></a>
                        <a href="/cart" class="icons-btn d-inline-block bag">
                            <i class="bi bi-cart" style="font-size: 28px; margin-top: 5px; padding-left: 20px"></i>


                        </a>
                        <a href="/" class="icons-btn d-inline-block bag">
                            <i class="fas fa-cog" style="font-size: 28px; margin-top: 5px; padding-left: 20px"></i>


                        </a>
                        {{-- <div id="cart-icon" style="margin-top: -55px">
                            Giỏ hàng
                            <a href="/cart" class="icons-btn d-inline-block bag">
                                <i class="bi bi-cart" style="font-size: 28px; margin-top: 5px"></i>


                            </a>
                        </div> --}}


                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                                class="icon-menu"></span></a>
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div id="successAlert" class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            @yield('content')
        </div>

        <div class="site-section bg-secondary bg-image" style="background-image: url('/assetUser/img/bg_2.jpg');">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('/assetUser/img/bg_1.jpg');">
                            <div class="banner-1-inner align-self-center">
                                <h2>Pharma Products</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('/assetUser/img/bg_2.jpg');">
                            <div class="banner-1-inner ml-auto  align-self-center">
                                <h2>Rated by Experts</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                        <div class="block-7">
                            <h3 class="footer-heading mb-4">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio
                                voluptates
                                sed dolorum excepturi iure eaque, aut unde.</p>
                        </div>

                    </div>
                    <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                        <h3 class="footer-heading mb-4">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Supplements</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Diet &amp; Nutrition</a></li>
                            <li><a href="#">Tea &amp; Coffee</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                                <li class="email">emailaddress@domain.com</li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This
                            template is made
                            with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank" class="text-primary">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="/assetUser/js/jquery-3.3.1.min.js"></script>
    <script src="/assetUser/js/jquery-ui.js"></script>
    <script src="/assetUser/js/popper.min.js"></script>
    <script src="/assetUser/js/bootstrap.min.js"></script>
    <script src="/assetUser/js/owl.carousel.min.js"></script>
    <script src="/assetUser/js/jquery.magnific-popup.min.js"></script>
    <script src="/assetUser/js/aos.js"></script>

    <script src="/assetUser/js/main.js"></script>
    <script src="/assetUser/js/script.js"></script>


    <!-- kindHeart -->
    <script src="/assetUser/js/kindHeart/counter.js"></script>
    <script src="/assetUser/js/kindHeart/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- <script type="text/javascript" src="../../front/JS/jquery-3.6.4.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-link').click(function(e) {
                e.preventDefault();
                $(this).next('.dropdown-menu').toggleClass('active');
            });
        });

        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    </script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuItems = document.querySelectorAll(".site-menu a");
            menuItems.forEach(item => {
                item.addEventListener("click", function(event) {
                    menuItems.forEach(item => item.classList.remove("active"));
                    this.classList.add("active");
                    event.preventDefault();
                });
            });
        });
    </script> --}}

</body>

</html>
