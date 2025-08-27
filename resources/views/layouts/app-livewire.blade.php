<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} | HTML Template | Home Page 01</title>
    
    <!-- Stylesheets -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @livewireStyles
</head>

<body>
    <div class="page-wrapper home1">
        
        <div class="pointer" id="pointer"></div>

        <!-- Preloader -->
        <div class="loading">
            <div class="loading-text">
                <span class="loading-text-words">L</span>
                <span class="loading-text-words">O</span>
                <span class="loading-text-words">A</span>
                <span class="loading-text-words">D</span>
                <span class="loading-text-words">I</span>
                <span class="loading-text-words">N</span>
                <span class="loading-text-words">G</span>
            </div>
        </div>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <a href="{{ route('index') }}" title="">
                            <h4>{{ env('APP_NAME')}}</h4>
                        </a>
                    </div>
                    <ul class="menu-other-links">
                        <li>
                            <a href="#" title="" class="cart-btn" onclick="toggleCart()">
                                <img src="{{ asset('images/cart.png') }}" alt="" /> 
                                <span class="cart-number">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="menu" style="margin-top: 1px;">
                        <div class="menu-btn">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Cart Sidebar -->
        <div class="cart-sidebar">
            <div class="cart-sidebar-header">
                <h3>shopping cart</h3>
                <a href="#" title="" class="cls-btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6657 11.7242C12.926 11.9846 12.926 12.4067 12.6656 12.667C12.4052 12.9274 11.9831 12.9274 11.7228 12.667L7.99931 8.94285L4.27551 12.6666C4.01518 12.927 3.59304 12.927 3.33271 12.6666C3.07238 12.4063 3.07238 11.9842 3.33271 11.7238L7.05658 7.99998L3.33298 4.27573C3.07271 4.01535 3.07271 3.59325 3.33311 3.33292C3.59344 3.07259 4.01558 3.07263 4.27591 3.333L7.99944 7.05718L11.7233 3.33332C11.9836 3.07297 12.4057 3.07297 12.6661 3.33332C12.9264 3.59367 12.9264 4.01578 12.6661 4.27613L8.94211 8.00005L12.6657 11.7242Z" fill="white"/>
                    </svg>
                </a>
            </div>
            <div class="cart-body">
                <ul class="cart-tabs">
                    <li class="active">
                        <a href="#" title="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3617 20.625H5.63672C3.36797 20.625 1.51172 18.7687 1.51172 16.5V16.3625L1.92422 5.3625C1.99297 3.09375 3.84922 1.375 6.04922 1.375H15.9492C18.1492 1.375 20.0055 3.09375 20.0742 5.3625L20.4867 16.3625C20.5555 17.4625 20.143 18.4937 19.3867 19.3188C18.6305 20.1438 17.5992 20.625 16.4992 20.625C16.4992 20.625 16.4305 20.625 16.3617 20.625ZM6.04922 2.75C4.53672 2.75 3.36797 3.91875 3.29922 5.3625L2.88672 16.5C2.88672 18.0125 4.12422 19.25 5.63672 19.25H16.4992C17.2555 19.25 17.943 18.9062 18.4242 18.3563C18.9055 17.8062 19.1805 17.1187 19.1805 16.3625L18.768 5.3625C18.6992 3.85 17.5305 2.75 16.018 2.75H6.04922Z" fill="white"/>
                                <path d="M11 9.625C8.31875 9.625 6.1875 7.49375 6.1875 4.8125C6.1875 4.4 6.4625 4.125 6.875 4.125C7.2875 4.125 7.5625 4.4 7.5625 4.8125C7.5625 6.7375 9.075 8.25 11 8.25C12.925 8.25 14.4375 6.7375 14.4375 4.8125C14.4375 4.4 14.7125 4.125 15.125 4.125C15.5375 4.125 15.8125 4.4 15.8125 4.8125C15.8125 7.49375 13.6813 9.625 11 9.625Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="cart-sidebar-products">
                    @if(session('cart') && count(session('cart')) > 0)
                        @foreach(session('cart') as $productId => $item)
                            <li>
                                <div class="cart-product-column">
                                    <div class="card-product-thumb-sd">
                                        <img src="{{ $item['image'] ?? asset('images/placeholder.jpg') }}" alt="{{ $item['name'] }}" />
                                    </div>
                                    <div class="card-product-thumb-info">
                                        <form action="{{ route('cart.remove') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $productId }}" />
                                            <button type="submit" class="close-cart-product" style="background: none; border: none; cursor: pointer;">
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.2">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.62485 7.99394C8.79918 8.16832 8.79916 8.45095 8.6248 8.62528C8.45044 8.79961 8.16778 8.79961 7.99345 8.62524L5.50004 6.1314L3.00643 8.62501C2.8321 8.79934 2.54942 8.79934 2.37509 8.62501C2.20076 8.45068 2.20076 8.168 2.37509 7.99367L4.86875 5.50001L2.37527 3.00609C2.20098 2.83174 2.20098 2.54908 2.37536 2.37475C2.54969 2.20042 2.83236 2.20045 3.0067 2.3748L5.50013 4.86867L7.99376 2.37502C8.1681 2.20068 8.45076 2.20068 8.6251 2.37502C8.79945 2.54936 8.79945 2.83202 8.6251 3.00637L6.13138 5.50006L8.62485 7.99394Z" fill="black"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                        <span>{{ $item['name'] }}</span>
                                        <h4><a href="#" title="">{{ $item['name'] }}</a></h4>
                                        <div class="price-sd">
                                            <span>₦{{ number_format($item['price'], 2) }}</span>
                                        </div>
                                        <div class="quantity">
                                            <form action="{{ route('cart.update') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $productId }}" />
                                                <input type="hidden" name="action" value="decrease" />
                                                <button type="submit" class="minus-btn" style="background: none; border: none; cursor: pointer;">
                                                    <i>-</i>
                                                </button>
                                            </form>
                                            <input type="text" name="name" value="{{ $item['quantity'] }}" readonly>
                                            <form action="{{ route('cart.update') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $productId }}" />
                                                <input type="hidden" name="action" value="increase" />
                                                <button type="submit" class="plus-btn" style="background: none; border: none; cursor: pointer;">
                                                    <i>+</i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li>
                            <div class="empty-cart-message">
                                <p>Your cart is empty</p>
                            </div>
                        </li>
                    @endif
                </ul><!--cart-sidebar-products-->
            </div>
            <div class="cart-footer">
                @if(session('cart') && count(session('cart')) > 0)
                    <div class="product-price-total">
                        <strong>Subtotal</strong>
                        <span>₦{{ number_format(collect(session('cart'))->sum(function($item) { return $item['price'] * $item['quantity']; }), 2) }}</span>
                    </div>
                    <span>Tax included <a href="#" title="">Shipping</a> calculated at checkout.</span>
                    <ul class="cart-sidebar-btns">
                        <li><a href="{{ route('cart') }}" title="">View cart</a></li>
                        <li><a href="{{ route('checkout') }}" title="" class="checkout">Check out</a></li>
                    </ul>
                @else
                    <div class="empty-cart-footer">
                        <p>Add items to your cart to see the total</p>
                        <a href="{{ route('shop') }}" class="theme-btn">Start Shopping</a>
                    </div>
                @endif
            </div>
        </div><!--cart-sidebar-->

        <!-- Search Box -->
        <div class="search-box">
            <div class="search-box-content">
                <form>
                    <div class="input_field">
                        <input type="text" name="search" placeholder="Search our store" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <a href="#" title="" class="close-search"><img src="{{ asset('images/close2.png') }}" alt="" /></a>
            </div>
        </div>

        <!-- Overlay Menu -->
        <div class="overlay-menu">
            <ul class="menu-links">
                <li>
                    <a href="#" title="">Home</a>
                </li>
                <li>
                    <a href="#" title="">Shop</a>
                </li>
                <li>
                    <a href="#" title="">Contact us</a>
                </li>
            </ul>
            <div class='marquee3' data-duration='60000' data-gap='0' data-duplicated='true' >
                <ul>
                    <li>{{ env('APP_NAME') }}</li>
                    <li>{{ env('APP_NAME') }}</li>
                    <li>{{ env('APP_NAME') }}</li>
                    <li>{{ env('APP_NAME') }}</li>
                    <li>{{ env('APP_NAME') }}</li>
                </ul>
            </div>
        </div><!--overlay-menu-->

        <!-- Main Content -->
        {{ $slot }}

        <!-- Footer -->
        <footer>
            <div class="main-footer">
                <h1 class="section-bg-title">MDC DESIGNER</h1>
                <div class="container-fluid">
                    <div class="footer-widgets">
                        <div class="widget widget-links wow fadeInLeft">
                            <h3 class="widget-title">CUSTOMER SERVICE</h3>
                            <ul class="wd-links">
                                <li><a href="#" title="">Contact Us</a></li>
                                <li><a href="#" title="">Size Guide</a></li>
                            </ul>
                        </div><!--widget-links-->
                        <div class="widget widget-links wow fadeInLeft" data-wow-delay="200ms">
                            <h3 class="widget-title">POLICIES</h3>
                            <ul class="wd-links">
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Terms of Service</a></li>
                            </ul>
                        </div><!--widget-links-->
                        <div class="widget widget-links wow fadeInLeft" data-wow-delay="400ms">
                            <h3 class="widget-title">MDC DESIGNER</h3>
                            <ul class="wd-links">
                                <li><a href="#" title="">About Us</a></li>
                                <li><a href="#" title="">Instagram</a></li>
                            </ul>
                        </div><!--widget-links-->
                        <div class="widget widget-newsletter wow fadeInLeft" data-wow-delay="600ms">
                            <h3 class="widget-title">NEWSLETTER</h3>
                            <p>Join the MDC Designer community for exclusive updates and early access to new collections.</p>
                            <form>
                                <input type="email" name="email" placeholder="Enter your email" />
                                <button type="submit" class="theme-btn">SUBSCRIBE</button>
                            </form>
                        </div><!--widget-newsletter -->
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="copyright wow slideInUp">
                        <p>© 2024 MDC DESIGNER - ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <!-- Fix for invisible shadow/overlay issues -->
        <style>
            /* Force remove any overlay effects */
            .page-wrapper.overlay:before,
            .page-wrapper.page-overlay:before,
            .page-wrapper.overlay-remove:before {
                background: transparent !important;
                opacity: 0 !important;
                visibility: hidden !important;
                display: none !important;
            }
            
            /* Ensure preloader is hidden */
            .loading {
                display: none !important;
                opacity: 0 !important;
                visibility: hidden !important;
            }
            
            /* Remove any active overlay classes */
            .page-wrapper.overlay,
            .page-wrapper.page-overlay,
            .page-wrapper.overlay-remove {
                background: transparent !important;
            }
            
            /* Ensure body doesn't have overlay classes */
            body.overlay,
            body.page-overlay {
                background: transparent !important;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Remove any overlay classes from page wrapper
                const pageWrapper = document.querySelector('.page-wrapper');
                if (pageWrapper) {
                    pageWrapper.classList.remove('overlay', 'page-overlay', 'overlay-remove');
                }
                
                // Remove any overlay classes from body
                document.body.classList.remove('overlay', 'page-overlay', 'overlay-remove');
                
                // Hide preloader immediately
                const loading = document.querySelector('.loading');
                if (loading) {
                    loading.style.display = 'none';
                    loading.style.opacity = '0';
                    loading.style.visibility = 'hidden';
                }
                
                // Remove any active popup classes
                const popups = document.querySelectorAll('.popup, .popup-quick-view, .subscribe-popup');
                popups.forEach(popup => {
                    popup.classList.remove('active', 'remove', 'remove-popup');
                });
                
                // Cart functionality
                window.toggleCart = function() {
                    const cartSidebar = document.querySelector('.cart-sidebar');
                    if (cartSidebar) {
                        cartSidebar.classList.toggle('active');
                        document.body.classList.toggle('cart-open');
                    }
                }
                
                // Close cart when clicking close button
                const closeCartBtn = document.querySelector('.cls-btn');
                if (closeCartBtn) {
                    closeCartBtn.addEventListener('click', function() {
                        const cartSidebar = document.querySelector('.cart-sidebar');
                        if (cartSidebar) {
                            cartSidebar.classList.remove('active');
                            document.body.classList.remove('cart-open');
                        }
                    });
                }
                
                // Close cart when clicking outside
                document.addEventListener('click', function(e) {
                    const cartSidebar = document.querySelector('.cart-sidebar');
                    const cartBtn = document.querySelector('.cart-btn');
                    
                    if (cartSidebar && cartSidebar.classList.contains('active')) {
                        if (!cartSidebar.contains(e.target) && !cartBtn.contains(e.target)) {
                            cartSidebar.classList.remove('active');
                            document.body.classList.remove('cart-open');
                        }
                    }
                });
            });
                
                // Override any overlay-related JavaScript
                if (window.jQuery) {
                    // Prevent overlay classes from being added
                    const originalAddClass = window.jQuery.fn.addClass;
                    window.jQuery.fn.addClass = function(className) {
                        if (typeof className === 'string' && 
                            (className.includes('overlay') || className.includes('page-overlay'))) {
                            return this;
                        }
                        return originalAddClass.call(this, className);
                    };
                }
            });
            
            // Additional fix for any delayed overlay effects
            setTimeout(function() {
                const pageWrapper = document.querySelector('.page-wrapper');
                if (pageWrapper) {
                    pageWrapper.classList.remove('overlay', 'page-overlay', 'overlay-remove');
                }
                document.body.classList.remove('overlay', 'page-overlay', 'overlay-remove');
            }, 100);
        </script>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script> 
    <script src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @livewireScripts
</body>
</html>

