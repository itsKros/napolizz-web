<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Bootstrap Side Modal CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-side-modals.css">
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">

        <title>Napolizz Pizza</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/napolizz-logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/napolizz-logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/combo.php" class="nav-link">Promo / Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Full Menu / Order</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <a class="nav-cart" href="#" id="cartBtn" data-toggle="modal" data-target="#cartView">
                                    <i class='bx bxs-cart'></i>
                                    <span>1</span>
                                </a>
                                <a class="nav-tel" href="" data-toggle="modal" data-target="#loginPop">
                                    Login / Sign up
                                </a>
                                <a class="nav-tel" href="tel:+1123456789">
                                    <i class='bx bxs-phone-call'></i>
                                    +65 6280 8220
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Cart View -->
        <div class="modal right fade" id="cartView" tabindex="-1" role="dialog" aria-labelledby="right_modal_sm">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-fixed">
                        <h5 class="modal-title">View Cart <span class="badge badge-pill badge-info">1</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php for ($i = 1; $i <= 3; $i++) { ?>        
                            <!-- Cart item -->
                            <div class="mcart-item">
                                <div class="item-thumb">
                                    <img src="https://via.placeholder.com/45" alt="">
                                </div>
                                <div class="item-desc">
                                    <p class="item-name">Linguine All Salmone Funghi</p>
                                    <input class="form-control" type="number" min="1" max="9" value="1" id="quantity">
                                </div>
                                <div class="item-price">
                                    <p>x $19.00</p>
                                    <a href=""><i class='bx bxs-x-square'></i></a>
                                </div>
                            </div>
                            <!-- End Cart item -->
                        <?php   } ?>
                        
                    </div>
                    <div class="modal-footer modal-footer-fixed text-center">
                        <a class="cmn-btn" href="#">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart View-->
        

        <!-- Modal -->
        <div class="modal fade" id="loginPop" tabindex="-1" role="dialog" aria-labelledby="loginPopLabel" aria-hidden="true" style="padding-right:0 !important;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                
                    <div class="modal-body">
                        <section class="checkout-area login-pop">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout-item">
                                            <h2>Already Have an Account?</h2>
                                            <div class="checkout-one login">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="E-mail Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    
                                                    <div class="text-left">
                                                        <button type="submit" class="btn cmn-btn">Login</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="checkout-item">
                                            <h2>Create Your Account!</h2>
                                            <div class="checkout-one create">
                                                <form class="row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="email" class="form-control" placeholder="email">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                    <div class="form-group number col-md-6">
                                                        <span>+65</span><input type="text" class="form-control" placeholder="Mobile">
                                                    </div>
                                                    <div class="text-left  col-md-12">
                                                        <button type="submit" class="btn cmn-btn">Register</button>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </section>
                    </div>
                
                </div>
            </div>
        </div>