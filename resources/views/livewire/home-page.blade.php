    <div>
        <style>
            /* Import Funnel Sans font */
            @import url("https://fonts.googleapis.com/css2?family=Funnel+Sans:wght@300;400;500;600;700;800;900&amp;display=swap");
            
            /* Force Funnel Sans font on all elements */
            * {
                font-family: "Funnel Sans", sans-serif !important;
            }
            
            body, h1, h2, h3, h4, h5, h6, p, span, div, a, button, input, textarea, select {
                font-family: "Funnel Sans", sans-serif !important;
            }
            
            /* Slider image overlay for better text visibility */
            .main-slider-slide {
                position: relative;
                height: 900px !important;
                overflow: hidden;
            }
            .main-slider-slide img {
                position: relative;
                z-index: 1;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .slider-image-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.4);
                z-index: 2;
                pointer-events: none;
            }
            .main-slider-content {
                position: absolute;
                z-index: 3;
                top: 35%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                width: 100%;
                color: rgba(255, 255, 255, 0.9);
            }
            .main-slider-content h1 {
                color: rgba(255, 255, 255, 0.9);
            }
            .main-slider-content p {
                color: rgba(255, 255, 255, 0.8);
            }
            
            /* Reduce spacing between sections */
            .about-section-v2 {
                padding: 40px 0 20px 0;
                margin-bottom: 0;
            }
            .lookbook-section-v2 {
                padding-top: 0;
                margin-top: -20px;
            }
            
            /* Video header styling */
            .video-header-section {
                background: #000;
                padding: 30px 0;
                text-align: center;
                margin-bottom: 0;
            }
            .video-header-content h1 {
                font-size: 2.5rem;
                font-weight: 900;
                color: #fff;
                margin: 0;
                letter-spacing: 4px;
                text-transform: uppercase;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            }
            .video-header-content h2 {
                font-size: 1.2rem;
                font-weight: 300;
                color: #ccc;
                margin: 8px 0 0 0;
                letter-spacing: 3px;
                text-transform: uppercase;
            }
            
            /* Remove spacing between header and video */
            .glance-banner {
                margin-top: 0;
                padding-top: 0;
            }
            
            /* Mobile-specific fixes for white space */
            @media (max-width: 768px) {
                .video-header-section {
                    padding: 20px 0;
                    margin-bottom: 0;
                }
                .glance-banner {
                    margin-top: -10px;
                    padding-top: 0;
                }
                .video-intro {
                    margin-top: -10px;
                    padding-top: 0;
                }
                .video-intro video {
                    margin-top: 0;
                    padding-top: 0;
                }
            }
            
            /* Extra mobile fixes for smaller screens */
            @media (max-width: 480px) {
                .video-header-section {
                    padding: 15px 0;
                }
                .video-header-content h1 {
                    font-size: 2rem;
                    letter-spacing: 2px;
                }
                .video-header-content h2 {
                    font-size: 1rem;
                    letter-spacing: 2px;
                }
            }
            
            /* Specific heading styles to force Funnel Sans */
            .about-content-v2 h2,
            .sec-title h2,
            .main-slider-content h1,
            .video-header-content h1,
            .video-header-content h2,
            .cart-product-info h2,
            .product-info h3,
            .product-hover-info h3,
            .about-section-v2 h2,
            .lookbook-section-v2 h1,
            .collection-section h2,
            .collection-section p,
            .marquee-section h2 {
                font-family: "Funnel Sans", sans-serif !important;
                font-weight: 600 !important;
            }
            
            /* Force all text elements to use Funnel Sans */
            .page-wrapper *,
            .main-slider-v2 *,
            .about-section-v2 *,
            .lookbook-section-v2 *,
            .video-header-section *,
            .cart-section-v2 *,
            .collection-section *,
            .marquee-section * {
                font-family: "Funnel Sans", sans-serif !important;
            }
            
            /* Extra specific targeting for the main heading */
            .about-content-v2 h2 {
                font-family: "Funnel Sans", sans-serif !important;
                font-weight: 500 !important;
                font-size: 2.5rem !important;
                letter-spacing: 0.05em !important;
            }
            
            /* Force all buttons to be transparent with black borders */
            .theme-btn,
            .theme-btn:before {
                background: transparent !important;
                border-color: #000000 !important;
                color: #000000 !important;
            }
            
            /* Hover state - black background with white text */
            .theme-btn:hover,
            .theme-btn:hover:before,
            .theme-btn.v2:hover,
            .theme-btn.v2:hover:before {
                background: #000000 !important;
                border-color: #000000 !important;
                color: #ffffff !important;
            }
            
            /* Force all brown colors to black */
            * {
                color: inherit;
            }
            
            [style*="#B88669"],
            [style*="#b88669"],
            [style*="#C98663"],
            [style*="#B88689"] {
                color: #000000 !important;
                background-color: #000000 !important;
                border-color: #000000 !important;
            }
            
            /* Cart sidebar specific styling */
            .cart-sidebar .cart-sidebar-header .cls-btn {
                background-color: #000000 !important;
            }
            
            .cart-sidebar .cart-tabs li.active {
                background: #000000 !important;
            }
            
            .cart-sidebar .cart-tabs li.active a svg path {
                fill: #ffffff !important;
            }
            
            /* Video controls styling */
            .video-container {
                position: relative;
                display: block;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .video-container video {
                width: 100%;
                height: auto;
                display: block;
                margin: 0;
                padding: 0;
                /* Remove default video controls */
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                pointer-events: none; /* Prevent clicking on video */
            }
            .video-controls {
                position: absolute;
                top: 15px;
                right: 15px;
                z-index: 10;
                pointer-events: auto; /* Allow clicking on controls */
            }
            .mute-btn {
                background: rgba(0, 0, 0, 0.6);
                border: none;
                color: white;
                width: 32px;
                height: 32px;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                pointer-events: auto;
            }
            .mute-btn:hover {
                background: rgba(0, 0, 0, 0.8);
                transform: scale(1.05);
            }
            .mute-btn i {
                font-size: 12px;
            }
            
            /* Mobile-specific video fixes */
            @media (max-width: 768px) {
                .video-container video {
                    /* Ensure video plays inline on mobile */
                    -webkit-playsinline: true;
                    playsinline: true;
                }
            }
        </style>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const video = document.getElementById('video1');
                const muteBtn = document.getElementById('muteBtn');
                const muteIcon = document.getElementById('muteIcon');
                
                if (video) {
                    // Ensure video is muted for autoplay to work on mobile
                    video.muted = true;
                    video.playsInline = true;
                    
                    // Force autoplay on mobile browsers
                    const playPromise = video.play();
                    if (playPromise !== undefined) {
                        playPromise.then(() => {
                            console.log('Video autoplay started successfully');
                        }).catch(error => {
                            console.log('Autoplay prevented:', error);
                            // Try to play again when user interacts with the page
                            document.addEventListener('touchstart', function() {
                                video.play().catch(e => console.log('Still cannot autoplay:', e));
                            }, { once: true });
                            
                            document.addEventListener('click', function() {
                                video.play().catch(e => console.log('Still cannot autoplay:', e));
                            }, { once: true });
                        });
                    }
                    
                    // Mute/Unmute functionality (only volume control, no play/pause)
                    muteBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        if (video.muted) {
                            video.muted = false;
                            muteIcon.className = 'fa fa-volume-up';
                        } else {
                            video.muted = true;
                            muteIcon.className = 'fa fa-volume-off';
                        }
                    });
                    
                    // Update icon when video loads
                    video.addEventListener('loadeddata', function() {
                        muteIcon.className = video.muted ? 'fa fa-volume-off' : 'fa fa-volume-up';
                    });
                    
                    // Prevent video from being paused when clicked
                    video.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        // Don't toggle play/pause, just return
                        return false;
                    });
                    
                    // Ensure video keeps playing
                    video.addEventListener('pause', function() {
                        // Auto-resume if paused
                        video.play().catch(e => console.log('Cannot resume video:', e));
                    });
                }
                
                // Add to cart functionality
                const addToCartForms = document.querySelectorAll('.add-to-cart-form');
                addToCartForms.forEach(form => {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        
                        const formData = new FormData(form);
                        const submitBtn = form.querySelector('button[type="submit"]');
                        const originalText = submitBtn.textContent;
                        
                        // Show loading state
                        submitBtn.textContent = 'Adding...';
                        submitBtn.disabled = true;
                        
                        fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Show success notification
                                showNotification(data.message, 'success');
                                
                                // Update cart count in header if it exists
                                const cartCountElement = document.querySelector('.cart-count');
                                if (cartCountElement && data.cart_count !== undefined) {
                                    cartCountElement.textContent = data.cart_count;
                                }
                                
                                // Refresh the page to update cart sidebar
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
                            } else {
                                showNotification(data.message || 'Error adding product to cart', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            showNotification('Error adding product to cart', 'error');
                        })
                        .finally(() => {
                            // Reset button state
                            submitBtn.textContent = originalText;
                            submitBtn.disabled = false;
                        });
                    });
                });
                
                // Notification function
                function showNotification(message, type) {
                    // Create notification element
                    const notification = document.createElement('div');
                    notification.className = `notification ${type}`;
                    notification.style.cssText = `
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        padding: 15px 20px;
                        border-radius: 5px;
                        color: white;
                        font-weight: 500;
                        z-index: 10000;
                        max-width: 300px;
                        word-wrap: break-word;
                        ${type === 'success' ? 'background-color: #28a745;' : 'background-color: #dc3545;'}
                    `;
                    notification.textContent = message;
                    
                    // Add to page
                    document.body.appendChild(notification);
                    
                    // Remove after 3 seconds
                    setTimeout(() => {
                        notification.remove();
                    }, 3000);
                }
            });
        </script>
        </style>
        <!-- Main Slider -->
        <section class="main-slider-v2">
    <div class="slider-nav">
        <div class="main-slider-slide">
            <div class="slider-image-overlay"></div>
            <img src="{{ asset('media/1.jpeg') }}" alt=""  class="animated" data-animation-in="zoomInImage" />
            <div class="main-slider-content">
                
                <h1>Maro Design Clothing</h1>
                <p>Discover our exclusive collection of premium fashion wear</p>
                <a href="{{ route('shop') }}" title="" class="theme-btn">shop now</a>
            </div>
        </div><!--main-slider-slide-->
        <div class="main-slider-slide">
            <div class="slider-image-overlay"></div>
            <img src="{{ asset('media/2.jpeg') }}" alt=""  class="animated" data-animation-in="zoomInImage" />
            <div class="main-slider-content">
            
                <h1>Trending Styles</h1>
                <p>Explore the latest fashion trends and unique designs</p>
                <a href="{{ route('shop') }}" title="" class="theme-btn">shop now</a>
            </div>
        </div><!--main-slider-slide-->
        <div class="main-slider-slide">
            <div class="slider-image-overlay"></div>
            <img src="{{ asset('media/3.jpeg') }}" alt=""  class="animated" data-animation-in="zoomInImage" />
            <div class="main-slider-content">
               
                <h1>Premium Quality</h1>
                <p>Handcrafted with attention to detail and superior materials</p>
                <a href="{{ route('shop') }}" title="" class="theme-btn">shop now</a>
            </div>
        </div><!--main-slider-slide-->
    </div>
    <div class="slider-dots-box"></div>
</section><!--main-slider-->

<!-- About Section -->
<section class="about-section-v2">
    <div class="container">
        <div class="about-content-v2">
            <h2 style="font-family: 'Funnel Sans', sans-serif !important; font-weight: 500 !important; font-size: 2.5rem !important; letter-spacing: 0.05em !important;">Maro Design - Where Style Meets Innovation</h2>
        
        </div>
    </div>
</section>

<!-- Lookbook Section -->
<section class="lookbook-section-v2">
    <div class="container">
        <div class="lookbook-v2-slide">
            <div class="lookbook-v2 row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="lookbook-inner wow fadeIn" data-wow-delay="200ms">
                        <img src="{{ asset('media/8.jpeg') }}" alt="MDC Designer - Luxury Fashion" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="lookbook-inner wow fadeIn" data-wow-delay="400ms">
                        <img src="{{ asset('media/9.jpeg') }}" alt="MDC Designer - Street Style" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="lookbook-inner wow fadeIn" data-wow-delay="600ms">
                        <img src="{{ asset('media/10.jpeg') }}" alt="MDC Designer - Convertible Style" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="lookbook-inner wow fadeIn" data-wow-delay="800ms">
                        <img src="{{ asset('media/11.jpeg') }}" alt="MDC Designer - Urban Fashion" />
                    </div>
                </div>
            </div>
            <h1 class="pb-text wow slideInUp">lookbook</h1>
        </div>
    </div>
</section><!--lookbook-section-v2-->



<!-- Video Banner -->
<section class="video-header-section">
    <div class="container">
        <div class="video-header-content wow fadeInUp">
            <h1>MDC DESIGNER</h1>
            <h2>BORN TO STAND OUT</h2>
        </div>
    </div>
</section>

<section class="glance-banner">
    <div class="video-intro wow fadeInUp">
        <div class="video-container">
            <video id="video1" autoplay loop muted playsinline webkit-playsinline style="margin: 0; padding: 0; display: block; width: 100%; height: auto;">
                <source src="{{ asset('media/v1.mp4') }}" type="video/mp4"/>
                Your browser does not support the video tag.
            </video>
            <div class="video-controls">
                <button class="mute-btn" id="muteBtn">
                    <i class="fa fa-volume-off" id="muteIcon"></i>
                </button>
            </div>
        </div>
    </div>
</section>



<!-- Cart Section -->
<section class="cart-section-v2">
    <div class="container-fluid">
        <div class="card-product-content-v2">
            <div class="card-product-thumb-slider">
                <div class="cart-product-slider">
                    <div class="circle-container">
                        <div class="circle delay1"></div>
                         <div class="circle delay2"></div>
                         <div class="circle delay3"></div>
                         <div class="circle delay4"></div>   
                     </div>
                     <div class="cart-product-slider-slide">
                        <div class="cart-product-slide">
                            <img src="{{ asset('media/4.jpeg') }}" alt="MDC Designer Collection" />
                        </div>
                        <div class="cart-product-slide">
                            <img src="{{ asset('media/5.jpeg') }}" alt="MDC Designer Collection" />
                        </div>
                        <div class="cart-product-slide">
                            <img src="{{ asset('media/6.jpeg') }}" alt="MDC Designer Collection" />
                        </div>
                    </div>
                </div>
                <div class="cart-slider-thumb wow slideInLeft">
                    <div class="cart-product-thumb-slide">
                        <img src="{{ asset('media/4.jpeg') }}" alt="MDC Designer Collection" />
                    </div>
                    <div class="cart-product-thumb-slide">
                        <img src="{{ asset('media/5.jpeg') }}" alt="MDC Designer Collection" />
                    </div>
                    <div class="cart-product-thumb-slide">
                        <img src="{{ asset('media/6.jpeg') }}" alt="MDC Designer Collection" />
                    </div>
                </div>
            </div><!--card-product-thumb-slider-->
            <div class="cart-product-info-v2">
                <div class="cart-product-content">
                    <div class="cart-product-info wow slideInRight">
                        <h2>Classic Denim Set</h2>
                        <div class="cart-items-add">
                            <a href="{{ route('shop') }}" title="" class="theme-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--card-product-content-v2-->
    </div>
</section><!--cart-section-->

<!-- Luxury Brand Statement -->
<section class="marquee-section v2">
    <div class='marquee' data-duration='17000' data-gap='10' data-duplicated='true' >
        <h2>MDC DESIGNER - ELEVATE YOUR STYLE</h2>
    </div>
</section>

<!-- Featured Collection -->
<section class="collection-section v2">
    <div class="container-fluid">
        <div class="sec-title space-v2 wow slideInUp">
            <h2>LATEST COLLECTIONS</h2>
            <p>Discover our latest premium designs crafted with exceptional quality and contemporary style</p>
        </div>
        <div class="product-categories v2 without-slide row">
            @forelse($this->featuredProducts as $product)
            <div class="col-lg-4">
                <div class="product-cat">
                    <div class="product-img">
                        @php
                            $productImages = \App\Models\Image::where('imageable_type', 'App\Models\Product')
                                ->where('imageable_id', $product->id)
                                ->orderBy('sort_order')
                                ->get();
                        @endphp
                        @if($productImages->count() > 0)
                            <img src="{{ asset('storage/' . $productImages->first()->path) }}" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('images/placeholder.jpg') }}" alt="{{ $product->name }}">
                        @endif
                    </div>
                    <div class="product-hover-info">
                        <div class="product-info-hover" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; text-align: center;">
                            <h3><a href="{{ route('shop') }}" title="">{{ $product->name }}</a></h3>
                            <div class="pricee">
                                <span>₦{{ number_format($product->final_price, 0) }}</span>
                            </div>
                            <ul class="pro-buttons">
                                <li>
                                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="theme-btn" style="background: transparent; color: #000; border: 1px solid #000; padding: 12px 24px; cursor: pointer; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease; min-width: 140px; display: flex; align-items: center; justify-content: center; text-align: center;" onmouseover="this.style.background='#000'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='#000';">ADD TO CART</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div><!--product-hover-info-->
                    <div class="product-info">
                        <h3><a href="{{ route('shop') }}" title="">{{ $product->name }}</a></h3>
                        <span class="product-price">₦{{ number_format($product->final_price, 0) }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No featured products available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section><!--collection-section-->




</div>
