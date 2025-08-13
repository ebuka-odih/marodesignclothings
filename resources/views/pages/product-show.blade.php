@php
    $productImages = $product->images()->get();
    $firstImage = $productImages->first();
@endphp

@extends('pages.layout.app')

@section('title', $product->name . ' - ' . env('APP_NAME'))

@section('content')
<div class="min-h-screen bg-white">
    <!-- Image Slider Section -->
    <div class="relative w-full" style="height: 50vh;">
        <!-- Main Image Container -->
        <div id="imageSlider" class="relative w-full h-full overflow-hidden">
         
            @if($productImages->count() > 0)
                @foreach($productImages as $index => $image)
                    <div class="slide absolute inset-0 transition-opacity duration-500 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" data-index="{{ $index }}">
                        <img src="{{ $image->url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    </div>
                @endforeach
            @else
                <div class="absolute inset-0 bg-gray-100 flex items-center justify-center">
                    <span class="text-gray-500">No Image Available</span>
                </div>
            @endif

            <!-- Navigation Arrows -->
            @if($productImages->count() > 1)
                <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition-all duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Image Counter -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                    <span id="currentImageIndex">1</span>/<span id="totalImages">{{ $productImages->count() }}</span>
                </div>
            @endif
        </div>
    </div>

    <!-- Product Details Section -->
    <div class="bg-white py-12 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Product Title -->
            <h1 class="text-xl font-semibold text-gray-900 mb-4">{{ $product->name }}</h1>
            
            <!-- Product Description -->
            @if($product->description)
                <p class="text-gray-600 mb-6 leading-relaxed">{{ $product->description }}</p>
            @endif

            <!-- Price Section -->
            <div class="mb-8">
                @if($product->sale_price && $product->sale_price < $product->price)
                    <div class="flex items-baseline gap-3 mb-2">
                        <span class="text-xl font-bold text-gray-900">₦{{ number_format($product->sale_price, 2) }}</span>
                        <span class="text-lg text-gray-500 line-through">₦{{ number_format($product->price, 2) }}</span>
                        <span class="text-sm text-green-600 font-medium">Save ₦{{ number_format($product->price - $product->sale_price, 2) }}</span>
                    </div>
                @else
                    <span class="text-xl font-bold text-gray-900">₦{{ number_format($product->price, 2) }}</span>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                @if($product->stock > 0)
                    <button onclick="addToCart()" class="flex-1 bg-black text-white py-3 px-4 rounded-none hover:bg-gray-800 transition-colors duration-200 font-medium uppercase tracking-wide text-sm">
                        Add to Cart
                    </button>
                @else
                    <button disabled class="flex-1 bg-gray-300 text-gray-500 py-3 px-4 rounded-none cursor-not-allowed font-medium uppercase tracking-wide text-sm">
                        Out of Stock
                    </button>
                @endif
                
                <button onclick="shopNow()" class="flex-1 border-2 border-black text-black py-3 px-4 rounded-none hover:bg-black hover:text-white transition-colors duration-200 font-medium uppercase tracking-wide text-sm">
                    Shop Now
                </button>
            </div>

            <!-- Product Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600">
                @if($product->category)
                    <div>
                        <span class="font-medium">Category:</span>
                        <span class="ml-2">{{ $product->category->name }}</span>
                    </div>
                @endif
                
                <div>
                    <span class="font-medium">Availability:</span>
                    @if($product->stock > 0)
                        <span class="ml-2 text-green-600">In Stock</span>
                    @else
                        <span class="ml-2 text-red-600">Out of Stock</span>
                    @endif
                </div>
                
                @if($product->sku)
                    <div>
                        <span class="font-medium">SKU:</span>
                        <span class="ml-2">{{ $product->sku }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const currentImageIndex = document.getElementById('currentImageIndex');
        let currentIndex = 0;
        let autoSlideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0');
                    slide.classList.add('opacity-100');
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                }
            });
            if (currentImageIndex) {
                currentImageIndex.textContent = index + 1;
            }
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        function startAutoSlide() {
            if (slides.length > 1) {
                autoSlideInterval = setInterval(nextSlide, 5000);
            }
        }

        function stopAutoSlide() {
            if (autoSlideInterval) {
                clearInterval(autoSlideInterval);
            }
        }

        // Auto-slide disabled - only manual navigation
        // startAutoSlide();

        // Manual navigation
        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                prevSlide();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                nextSlide();
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });

        // Auto-slide on hover disabled
        // const slider = document.getElementById('imageSlider');
        // if (slider) {
        //     slider.addEventListener('mouseenter', stopAutoSlide);
        //     slider.addEventListener('mouseleave', startAutoSlide);
        // }
    });

    function addToCart() {
        // Add to cart functionality
        console.log('Adding to cart...');
        // You can implement the actual add to cart logic here
        // Example: Redirect to cart or show success message
        alert('Product added to cart!');
    }

    function shopNow() {
        // Shop now functionality
        console.log('Shop now clicked...');
        // You can implement the actual shop now logic here
        // Example: Redirect to shop page
        window.location.href = '{{ route("shop") }}';
    }
</script>
@endsection
