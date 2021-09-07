<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?php echo e(asset('assets/img/favicon.ico')); ?>" rel="icon">

        <!-- Google Fonts -->
        <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap')); ?>" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="<?php echo e(asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/lib/slick/slick.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/lib/slick/slick-theme.css')); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/product-list" class="nav-item nav-link">Products</a>
                            <a href="/cart" class="nav-item nav-link">Cart</a>
                            <a href="/checkout" class="nav-item nav-link">Checkout</a>
                            <a href="my-account.html" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                                    <?php if(Route::has('login')): ?>
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if(Auth::user()->utype==='ADM'): ?>
                                                <li class="menu-item menu-item-has-children parent">
                                                    <a title="My Account" href="" class="fa fa-angle-down"aria-hidden="true">My Account (<?php echo e(Auth::user()->name); ?>)</a>
                                                    <ul class="submenu currency">
                                                        <li class="menu-item">
                                                            <a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                                        </li>
                                                        <li class="menu-item">
                                                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                            </li>
                                                        <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                        </form>
                                                    </ul>
                                                </li>
                                            <?php else: ?>
                                                <li class="menu-item menu-item-has-children parent">
                                                    <a href="#" class="fa fa-angle-down"aria-hidden="true">My Account(<?php echo e(Auth::user()->name); ?>)</a>
                                                <ul class="submenu currency">
                                                    <li class="menu-item">
                                                            <a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                    </form>
                                                </ul>
                                            </li>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
                                        <?php endif; ?> 
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="/cart" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        <?php echo e($slot); ?>          
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="<?php echo e(asset('assets/img/payment-method.png')); ?>" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="<?php echo e(asset('assets/img/godaddy.svg')); ?>" alt="Payment Security" />
                            <img src="<?php echo e(asset('assets/img/norton.svg')); ?>" alt="Payment Security" />
                            <img src="<?php echo e(asset('assets/img/ssl.svg')); ?>" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="<?php echo e(asset('https://code.jquery.com/jquery-3.4.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/lib/easing/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/lib/slick/slick.min.js')); ?>"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\wamp64\www\ecommerce\resources\views/layouts/base.blade.php ENDPATH**/ ?>