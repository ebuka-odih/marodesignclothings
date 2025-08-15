@extends('pages.layout.app')

@section('title', 'Welcome')

@section('content')
@php
    // Define the numbered image files from media folder
    $sliderImages = [
        '1.jpeg',
        '2.jpeg',
        '3.jpeg',
        '4.jpeg',
        '5.jpeg',
        '6.jpeg'
    ];
@endphp

<div style="display: flex; flex-direction: column; min-height: calc(100vh - 140px); background: white;">
    <!-- Main Content Area - Image Slider -->
    <div style="position: relative; background: #8B4513; overflow: hidden;">
        <!-- Image Slider Container -->
        <div id="imageSlider" style="position: relative; width: 100%; height: auto;">
            <!-- Slider Images -->
            <div id="sliderContainer" style="display: flex; transition: transform 0.8s ease-in-out;">
                @foreach($sliderImages as $index => $image)
                    <div style="flex-shrink: 0; width: 100%;">
                        <img src="{{ url('/media/' . $image) }}" 
                             alt="Fashion Collection {{ $index + 1 }}" 
                             style="width: 100%; height: auto; display: block;">
                    </div>
                @endforeach
            </div>
            
            <!-- Navigation Arrows -->
            <button id="prevBtn" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; z-index: 10;">
                <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button id="nextBtn" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; z-index: 10;">
                <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            
            <!-- Dots Indicator -->
            <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 10;">
                @for($i = 0; $i < count($sliderImages); $i++)
                    <button class="dot-indicator" style="width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, {{ $i === 0 ? '1' : '0.5' }}); border: none; cursor: pointer; transition: all 0.3s ease;" data-slide="{{ $i }}"></button>
                @endfor
            </div>
        </div>
    </div>
    
    <!-- Text Section (From Screenshot) -->
    <div style="background: white; padding: 80px 20px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h3 style="color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 24px; font-weight: 500; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 16px;">
                THE MARO DESIGN PORTRAIT SERIES
            </h3>
            <h4 style="color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 20px; font-weight: 500; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 32px;">
                FALL WINTER 2025
            </h4>
            <p style="color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; line-height: 1.6; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                The House's latest collection comes to life through individual expression in a new campaign.
            </p>
        </div>
    </div>
    
    <!-- Video Section -->
    <div style="position: relative; width: 100%; height: 80vh; overflow: hidden;">
        <video 
            autoplay 
            loop 
            muted 
            playsinline
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
            <source src="{{ url('/media/v1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <!-- Optional overlay text on video -->
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; text-align: center; color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
            <h2 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 48px; font-weight: 300; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px;">
                IDENTITIES
            </h2>
            <p style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 24px; font-weight: 300; letter-spacing: 0.05em; line-height: 1.4;">
                NOT CONSTRUCTED<br>
                BUT REVEALED<br>
                THROUGH EASE AND<br>
                ATTITUDE
            </p>
        </div>
    </div>
    
    <!-- Text Section Under Video -->
    <div style="background: white; padding: 40px 20px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 36px; font-weight: 300; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 24px;">
                IDENTITIES
            </h2>
            <p style="color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 20px; font-weight: 300; letter-spacing: 0.05em; line-height: 1.6; text-transform: uppercase;">
                NOT CONSTRUCTED<br>
                BUT REVEALED<br>
                THROUGH EASE AND<br>
                ATTITUDE
            </p>
        </div>
    </div>
    
    <!-- Image Collage Section -->
    <div style="background: #f8f9fa; padding: 60px 20px; min-height: 600px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <!-- Debug Text -->
            <div style="color: #6c757d; text-align: center; margin-bottom: 20px; font-size: 18px;">
                IMAGE COLLAGE SECTION - SHOULD BE VISIBLE
            </div>
            
            <!-- Two Images Side by Side -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px;">
                <!-- Left Image -->
                <div style="height: 500px; overflow: hidden; border: 2px solid #e9ecef;">
                    <img src="{{ url('/media/7.jpeg') }}" 
                         alt="Fashion Model 1" 
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="console.log('Image 7.jpeg failed to load')"
                         onload="console.log('Image 7.jpeg loaded successfully')">
                </div>
                
                <!-- Right Image -->
                <div style="height: 500px; overflow: hidden; border: 2px solid #e9ecef;">
                    <img src="{{ url('/media/8.jpeg') }}" 
                         alt="Fashion Model 2" 
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="console.log('Image 8.jpeg failed to load')"
                         onload="console.log('Image 8.jpeg loaded successfully')">
                </div>
            </div>
            
            <!-- Text Under Images -->
            <div style="text-align: center;">
                <h3 style="color: #343a40; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 28px; font-weight: 300; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px;">
                    THE CAMPAIGN
                </h3>
                <p style="color: #6c757d; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 300; letter-spacing: 0.05em; line-height: 1.6; max-width: 600px; margin: 0 auto;">
                    Capturing the essence of contemporary style through authentic moments and genuine expressions. Each image tells a story of individuality and confidence.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Product Grid Section -->
    <div style="background: white; padding: 40px 20px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="color: black; font-family: 'Times New Roman', serif; font-size: 32px; font-weight: 400; text-align: center; margin-bottom: 40px; letter-spacing: 0.05em;">
                Featured Collection
            </h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                @foreach($products as $product)
                    <div style="display: flex; flex-direction: column; align-items: center; background: white; border: 1px solid #f0f0f0; padding: 20px; transition: transform 0.3s ease;">
                        <a href="{{ route('product.show', $product) }}" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 400px; margin-bottom: 16px; overflow: hidden;">
                            @php
                                $firstImage = $product->images()->first();
                            @endphp
                            <img src="{{ $firstImage ? $firstImage->url : asset('assets/images/product/placeholder.svg') }}" 
                                 alt="{{ $product->name }}" 
                                 style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s ease;">
                        </a>
                        <div style="text-align: center; width: 100%;">
                            <a href="{{ route('product.show', $product) }}" 
                               style="text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 500; margin-bottom: 8px; display: block; letter-spacing: 0.05em;">
                                {{ $product->name }}
                            </a>
                            <p style="color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; margin-bottom: 8px;">
                                £{{ number_format($product->price, 2) }} GBP
                            </p>
                            <p style="color: #999; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em;">
                                {{ $product->category->name ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.getElementById('sliderContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.dot-indicator');
    
    let currentSlide = 0;
    const totalSlides = {{ count($sliderImages) }}; // Dynamic number of slides
    let autoSlideInterval;
    
    // Function to update slider position
    function updateSlider() {
        sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.style.background = 'rgba(255, 255, 255, 1)';
            } else {
                dot.style.background = 'rgba(255, 255, 255, 0.5)';
            }
        });
    }
    
    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }
    
    // Previous slide
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }
    
    // Go to specific slide
    function goToSlide(index) {
        currentSlide = index;
        updateSlider();
    }
    
    // Start auto-sliding
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
    }
    
    // Stop auto-sliding
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart auto-slide after manual interaction
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart auto-slide after manual interaction
    });
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopAutoSlide();
            startAutoSlide(); // Restart auto-slide after manual interaction
        });
    });
    
    // Pause auto-slide on hover
    const slider = document.getElementById('imageSlider');
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        }
    });
    
    // Initialize first slide and start auto-sliding
    updateSlider();
    startAutoSlide();
    
    // Product image hover effects
    const productImages = document.querySelectorAll('a[href*="product.show"] img');
    productImages.forEach(img => {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Product card hover effects
    const productCards = document.querySelectorAll('div[style*="display: flex; flex-direction: column"]');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });
});
</script>
@endsection 