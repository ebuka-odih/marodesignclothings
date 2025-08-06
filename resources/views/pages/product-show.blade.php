@php
    $productImages = $product->images()->get();
    $firstImage = $productImages->first();
@endphp

@extends('pages.layout.app')

@section('title', $product->name . ' - ' . env('APP_NAME'))

@section('content')
<div style="min-height: calc(100vh - 140px); background: white; padding: 40px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <!-- Breadcrumb -->
        <nav style="margin-bottom: 32px;">
            <ol style="display: flex; align-items: center; gap: 8px; font-size: 14px; color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
                <li><a href="{{ route('index') }}" style="color: #666; text-decoration: none; transition: color 0.3s ease;">Home</a></li>
                <li><span style="margin: 0 4px;">/</span></li>
                <li><a href="#" style="color: #666; text-decoration: none; transition: color 0.3s ease;">{{ $product->category->name ?? 'Products' }}</a></li>
                <li><span style="margin: 0 4px;">/</span></li>
                <li style="color: black;">{{ $product->name }}</li>
            </ol>
        </nav>

        <!-- Product Details -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; margin-bottom: 40px;">
            <!-- Left Column - Image Slider -->
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <!-- Main Image -->
                <div style="position: relative;">
                    <div id="mainImage" style="aspect-ratio: 1; background: #f9f9f9; border-radius: 8px; overflow: hidden;">
                        @if($firstImage)
                            <img id="currentImage" src="{{ $firstImage->url }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/images/product/placeholder.svg') }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                    </div>

                    <!-- Navigation Arrows -->
                    @if($productImages->count() > 1)
                        <button id="prevBtn" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; padding: 8px; border-radius: 50%; border: none; cursor: pointer; transition: all 0.3s ease;">
                            <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="nextBtn" style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; padding: 8px; border-radius: 50%; border: none; cursor: pointer; transition: all 0.3s ease;">
                            <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    @endif
                </div>

                <!-- Thumbnail Navigation -->
                @if($productImages->count() > 1)
                    <div style="display: flex; gap: 8px; margin-top: 16px;">
                        @foreach($productImages as $index => $image)
                            <button type="button" style="width: 64px; height: 64px; border-radius: 4px; border: 2px solid {{ $index === 0 ? '#65644A' : '#e5e7eb' }}; cursor: pointer; transition: all 0.3s ease; background: white; padding: 0;" data-index="{{ $index }}">
                                <img src="{{ $image->url }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 2px;">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Right Column - Product Details -->
            <div style="display: flex; flex-direction: column; gap: 24px;">
                <!-- Product Title -->
                <h1 style="font-size: 32px; font-weight: 600; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">{{ $product->name }}</h1>

                <!-- Category -->
                @if($product->category)
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Category:</span>
                        <span style="color: #65644A; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">{{ $product->category->name }}</span>
                    </div>
                @endif

                <!-- Price -->
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: baseline; gap: 12px;">
                        <span style="font-size: 32px; font-weight: 700; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">£{{ number_format($product->price, 2) }}</span>
                        @if($product->sale_price && $product->sale_price < $product->price)
                            <span style="font-size: 20px; color: #999; text-decoration: line-through; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">£{{ number_format($product->price, 2) }}</span>
                            <span style="font-size: 18px; color: #10b981; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Save £{{ number_format($product->price - $product->sale_price, 2) }}</span>
                        @endif
                    </div>
                    @if($product->sale_price && $product->sale_price < $product->price)
                        <div style="font-size: 14px; color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
                            Final Price: <span style="color: #10b981; font-weight: 500;">£{{ number_format($product->sale_price, 2) }}</span>
                        </div>
                    @endif
                </div>

                <!-- Stock Status -->
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="color: #666; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Availability:</span>
                    @if($product->stock > 0)
                        <span style="color: #10b981; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">In Stock</span>
                    @else
                        <span style="color: #ef4444; font-weight: 500; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Out of Stock</span>
                    @endif
                </div>

                <!-- Description -->
                @if($product->description)
                    <div style="margin-top: 16px;">
                        <h3 style="font-size: 18px; font-weight: 600; color: black; margin-bottom: 12px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Description</h3>
                        <p style="color: #666; line-height: 1.6; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">{{ $product->description }}</p>
                    </div>
                @endif

                <!-- Add to Cart Form -->
                @if($product->stock > 0)
                    <form action="{{ route('cart.add') }}" method="POST" style="margin-top: 24px;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        
                        <div style="display: flex; gap: 16px; align-items: center;">
                            <button type="submit" style="flex: 1; background: #65644A; color: white; border: none; padding: 16px 24px; border-radius: 8px; font-weight: 600; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
                                Add to Cart
                            </button>
                            
                            <button type="button" onclick="window.location.href='{{ route('cart.sidebar') }}'" style="background: white; color: #65644A; border: 1px solid #65644A; padding: 16px 24px; border-radius: 8px; font-weight: 500; font-size: 16px; cursor: pointer; transition: all 0.3s ease; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
                                View Cart
                            </button>
                        </div>
                    </form>
                @else
                    <div style="margin-top: 24px;">
                        <button disabled style="width: 100%; background: #f3f4f6; color: #9ca3af; border: none; padding: 16px 24px; border-radius: 8px; font-weight: 600; font-size: 16px; cursor: not-allowed; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
                            Out of Stock
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.getElementById('currentImage');
    const thumbnails = document.querySelectorAll('[data-index]');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    const images = @json($productImages->pluck('url'));
    
    function updateMainImage(index) {
        if (images[index]) {
            mainImage.src = images[index];
            currentIndex = index;
            
            // Update thumbnail borders
            thumbnails.forEach((thumb, i) => {
                thumb.style.borderColor = i === index ? '#65644A' : '#e5e7eb';
            });
        }
    }
    
    // Thumbnail click events
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
            updateMainImage(index);
        });
    });
    
    // Navigation button events
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            const newIndex = (currentIndex - 1 + images.length) % images.length;
            updateMainImage(newIndex);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            const newIndex = (currentIndex + 1) % images.length;
            updateMainImage(newIndex);
        });
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft' && prevBtn) {
            prevBtn.click();
        } else if (e.key === 'ArrowRight' && nextBtn) {
            nextBtn.click();
        }
    });
});
</script>
@endsection
