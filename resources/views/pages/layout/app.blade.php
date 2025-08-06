<x-splade-layout class="min-h-screen bg-white">
    <x-slot:title>
        @yield('title', env('APP_NAME'))
    </x-slot>

    <!-- Alpine.js for interactivity - Load before Splade -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Mobile Browser Fixes and Gucci-style Design -->
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            background: white;
            min-height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Ensure Splade layout covers full viewport */
        [data-splade] {
            background: white;
            min-height: 100vh;
        }
        
        /* Mobile-specific fixes */
        @media (max-width: 768px) {
            html, body {
                background: white;
            }
            
            /* Prevent pull-to-refresh but allow scrolling */
            body {
                overscroll-behavior: contain;
            }
            
            /* Mobile keyboard fixes */
            .mobile-keyboard-active {
                padding-bottom: 300px !important;
            }
            
            /* Ensure inputs are visible when keyboard is active */
            input:focus {
                scroll-margin-top: 100px;
            }
            
            /* Adjust viewport height for mobile keyboards */
            .min-h-screen {
                min-height: 100vh;
                min-height: -webkit-fill-available;
            }
        }
        
        /* iOS Safari specific fixes */
        @supports (-webkit-touch-callout: none) {
            .min-h-screen {
                min-height: -webkit-fill-available;
            }
        }
        
        /* Gucci-style typography */
        .gucci-font {
            font-family: 'Times New Roman', serif;
            font-weight: 400;
            letter-spacing: 0.05em;
        }
        
        .gucci-sans {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        
        /* Smooth transitions */
        .transition-all {
            transition: all 0.3s ease;
        }
        
        /* Icon styles */
        .header-icon {
            width: 24px;
            height: 24px;
            stroke: currentColor;
            stroke-width: 1.5;
            fill: none;
        }
        
        /* Video controls */
        .video-control {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }
    </style>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Gucci-style Header -->
    <header style="position: sticky; top: 0; z-index: 50; background: white; width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 16px 24px; border-bottom: 1px solid #f0f0f0;">
        <!-- Logo -->
        <div style="display: flex; align-items: center;">
            <a href="{{ route('index') }}" style="text-decoration: none; color: black; font-family: 'Times New Roman', serif; font-size: 18px; font-weight: 400; letter-spacing: 0.05em;">
                {{ env('APP_NAME') }}
            </a>
        </div>
        
        <!-- Right side icons - Cart and Menu only -->
        <div style="display: flex; align-items: center; gap: 20px;">
            <!-- Cart -->
            <x-splade-link slideover href="{{ route('cart.sidebar') }}" style="text-decoration: none; color: black; display: flex; align-items: center; position: relative;">
                <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.45A1 1 0 007 17h12m-5 4a2 2 0 100-4 2 2 0 000 4zm-6 0a2 2 0 100-4 2 2 0 000 4z"/>
                </svg>
                @if($cartCount > 0)
                    <span style="position: absolute; top: -8px; right: -8px; background: #65644A; color: white; font-size: 10px; font-weight: bold; border-radius: 50%; width: 16px; height: 16px; display: flex; align-items: center; justify-content: center;">{{ $cartCount }}</span>
                @endif
            </x-splade-link>
            
            <!-- Menu -->
            <button id="menuToggle" style="background: none; border: none; color: black; display: flex; align-items: center; cursor: pointer;">
                <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main style="background: white; min-height: calc(100vh - 140px);">
        @yield('content')
    </main>

    <!-- Footer Menu -->
    <footer style="width: 100%; background: white; padding: 20px 0; border-top: 1px solid #f0f0f0;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 32px; color: black; font-size: 12px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase;">
            <a href="#" style="text-decoration: none; color: black; transition: color 0.3s ease;">HELP</a>
            <a href="#" style="text-decoration: none; color: black; transition: color 0.3s ease;">PRIVACY</a>
            <a href="#" style="text-decoration: none; color: black; transition: color 0.3s ease;">TERMS</a>
            <a href="#" style="text-decoration: none; color: black; transition: color 0.3s ease;">DO NOT SELL MY PERSONAL INFORMATION</a>
            <a href="#" style="text-decoration: none; color: black; transition: color 0.3s ease;">ACCESSIBILITY</a>
        </div>
    </footer>

    @yield('scripts')
    <x-splade-flash />
    
    <!-- Mobile Browser Behavior Prevention -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Prevent pull-to-refresh but allow scrolling
            document.body.style.overscrollBehavior = 'contain';
            
            // Set viewport meta tag programmatically
            const viewport = document.querySelector('meta[name="viewport"]');
            if (viewport) {
                viewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover');
            }
            
            // Force white background on all elements
            document.documentElement.style.backgroundColor = 'white';
            document.body.style.backgroundColor = 'white';
            
            // Prevent any background flashes during page load
            document.addEventListener('visibilitychange', function() {
                document.body.style.backgroundColor = 'white';
            });
            
            // Initialize cart sidebar functionality
            initializeCartSidebar();
            
            // Menu toggle functionality
            const menuToggle = document.getElementById('menuToggle');
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    // Add your menu functionality here
                    console.log('Menu clicked');
                });
            }
        });
        
        // Global cart sidebar functions
        function initializeCartSidebar() {
            // Find all cart forms in the sidebar
            const cartForms = document.querySelectorAll('.cart-form');
            cartForms.forEach(form => {
                // Remove any existing listeners to prevent duplicates
                form.removeEventListener('submit', handleCartFormSubmit);
                // Add the submit listener
                form.addEventListener('submit', handleCartFormSubmit);
            });
        }
        
        async function handleCartFormSubmit(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            const url = form.action;
            const method = form.method;
            
            try {
                const response = await fetch(url, {
                    method: method,
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                
                if (response.ok) {
                    // Refresh the cart sidebar content
                    refreshCartSidebar();
                } else {
                    console.error('Error updating cart');
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }
        
        async function refreshCartSidebar() {
            try {
                const response = await fetch('{{ route("cart.sidebar") }}', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                
                if (response.ok) {
                    const html = await response.text();
                    
                    // Create a temporary div to parse the HTML
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = html;
                    
                    const cartSidebar = document.getElementById('cart-sidebar');
                    if (!cartSidebar) return;
                    
                    // Find the cart items container in the new HTML
                    const newCartItems = tempDiv.querySelector('.flex-1.overflow-y-auto');
                    const newCartSummary = tempDiv.querySelector('.border-t.border-gray-700');
                    
                    // Find the current cart items container
                    const currentCartItems = cartSidebar.querySelector('.flex-1.overflow-y-auto');
                    const currentCartSummary = cartSidebar.querySelector('.border-t.border-gray-700');
                    
                    // Update only the cart items and summary sections
                    if (newCartItems && currentCartItems) {
                        currentCartItems.innerHTML = newCartItems.innerHTML;
                    }
                    
                    if (newCartSummary && currentCartSummary) {
                        currentCartSummary.innerHTML = newCartSummary.innerHTML;
                    }
                    
                    // Update flash messages if any
                    const newFlashMessages = tempDiv.querySelector('.p-4.m-4');
                    const currentFlashMessages = cartSidebar.querySelector('.p-4.m-4');
                    
                    if (newFlashMessages && currentFlashMessages) {
                        currentFlashMessages.innerHTML = newFlashMessages.innerHTML;
                    } else if (newFlashMessages && !currentFlashMessages) {
                        // Insert flash messages after header
                        const header = cartSidebar.querySelector('.flex.items-center.justify-between');
                        if (header) {
                            header.insertAdjacentElement('afterend', newFlashMessages);
                        }
                    }
                    
                    // Reinitialize event listeners for the new content
                    initializeCartSidebar();
                }
            } catch (error) {
                console.error('Error refreshing cart:', error);
            }
        }
        
        function closeSlideover() {
            // Try multiple methods to close the slideover
            try {
                // Method 1: Try to find and close Splade slideover
                const slideover = document.querySelector('[data-splade-slideover]');
                if (slideover) {
                    slideover.remove();
                    return;
                }
                
                // Method 2: Try to find Splade modal and close it
                const modal = document.querySelector('[data-splade-modal]');
                if (modal) {
                    modal.remove();
                    return;
                }
                
                // Method 3: Try to go back in history
                if (window.history.length > 1) {
                    window.history.back();
                    return;
                }
                
                // Method 4: Try to close any overlay/modal
                const overlay = document.querySelector('.fixed.inset-0');
                if (overlay) {
                    overlay.remove();
                    return;
                }
                
                // Method 5: Remove any backdrop
                const backdrop = document.querySelector('[data-splade-backdrop]');
                if (backdrop) {
                    backdrop.remove();
                    return;
                }
                
            } catch (error) {
                console.error('Error closing slideover:', error);
                // Fallback: try to go back
                window.history.back();
            }
        }
    </script>
</x-splade-layout>
