<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', env('APP_NAME'))</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts and Styles -->
    @routes
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @spladeHead

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
        
        /* Hide mobile menu overlay on desktop */
        @media (min-width: 769px) {
            #mobileMenuOverlay {
                display: none !important;
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
        
        /* Hide any visible @spladeScripts text */
        body:after {
            display: none !important;
        }
        
        /* Hide any text that might be rendered from Blade directives */
        script[type="text/x-splade"] {
            display: none !important;
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
        .video-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 16px;
            z-index: 10;
        }
        
        .video-control-btn {
            width: 48px;
            height: 48px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .video-control-btn:hover {
            background: rgba(255,255,255,1);
            transform: scale(1.1);
        }
        
        /* Mobile menu overlay */
        #mobileMenuOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: none;
        }
        
        #mobileMenuSidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background: white;
            z-index: 1001;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
        }
        
        /* Cart sidebar styles */
        #cart-sidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: 100vh;
            background: white;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
        }
        
        #cart-sidebar.open {
            transform: translateX(0);
        }
        
        /* Hide any text content that contains @spladeScripts */
        *:contains("@spladeScripts") {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        
        /* Alternative approach - hide any text nodes */
        body > *:last-child:not(footer):not(script):not(style):not(main) {
            display: none !important;
        }
    </style>
</head>
<body class="font-sans antialiased min-h-screen bg-white">
    <div id="app">
        <!-- Header -->
        <header style="position: sticky; top: 0; background: white; z-index: 100; border-bottom: 1px solid #f0f0f0; padding: 20px 0;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <!-- Brand Logo -->
                    <div style="flex: 1;">
                        <h1 style="color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 24px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; margin: 0;">
                            {{ env('APP_NAME') }}
                        </h1>
                    </div>

                    <!-- Desktop Menu (Center) -->
                    <nav class="hidden md:flex items-center gap-12">
                        <a href="{{ route('index') }}" style="text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; transition: color 0.3s ease;">
                            Home
                        </a>
                        <a href="{{ route('shop') }}" style="text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; transition: color 0.3s ease;">
                        <span>Shop</span>
                            <svg style="width: 16px; height: 16px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <a href="#" style="text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; transition: color 0.3s ease;">
                            About
                        </a>
                        <a href="#" style="text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; transition: color 0.3s ease;">
                            Contact
                        </a>
                    </nav>

                    <!-- Right Icons -->
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <!-- Cart -->
                        <button onclick="openCartSidebar()" style="background: none; border: none; color: black; display: flex; align-items: center; cursor: pointer;">
                            <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"/>
                            </svg>
                        </button>

                        <!-- Menu -->
                        <button id="menuToggle" class="md:hidden flex items-center bg-none border-none text-black cursor-pointer">
                            <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu Overlay -->
        <div id="mobileMenuOverlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; opacity: 0; transition: opacity 0.3s ease; display: none;">
            <div id="mobileMenuSidebar" style="position: fixed; top: 0; right: 0; width: 300px; height: 100%; background: white; z-index: 1001; transform: translateX(100%); transition: transform 0.3s ease; overflow-y: auto;">
                <!-- Close Button -->
                <div style="display: flex; justify-content: flex-end; padding: 20px;">
                    <button id="closeMobileMenu" style="background: none; border: none; color: black; cursor: pointer;">
                        <svg style="width: 24px; height: 24px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                            <path d="M18 6L6 18M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Menu Items -->
                <nav style="padding: 0 20px 40px;">
                    <div style="display: flex; flex-direction: column; gap: 0;">
                        <a href="{{ route('index') }}" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 500; border-bottom: 1px solid #f0f0f0; transition: none; pointer-events: auto; user-select: none; -webkit-tap-highlight-color: transparent; outline: none;">
                            <span>Home</span>
                        </a>
                        
                        <a href="{{ route('shop') }}" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 500; border-bottom: 1px solid #f0f0f0; transition: none; pointer-events: auto; user-select: none; -webkit-tap-highlight-color: transparent; outline: none;">
                            <span>Shop</span>
                            <svg style="width: 16px; height: 16px; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        
                        <a href="#" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 500; border-bottom: 1px solid #f0f0f0; transition: none; pointer-events: auto; user-select: none; -webkit-tap-highlight-color: transparent; outline: none;">
                            <span>About</span>
                        </a>
                        
                        <a href="#" style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; text-decoration: none; color: black; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 16px; font-weight: 500; border-bottom: 1px solid #f0f0f0; transition: none; pointer-events: auto; user-select: none; -webkit-tap-highlight-color: transparent; outline: none;">
                            <span>Contact Marodesign</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

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
        
        <!-- Hide any visible @spladeScripts text -->
        <style>
            /* Hide any text that might be rendered from Blade directives */
            body:after {
                content: none !important;
                display: none !important;
            }
            
            /* Hide any script tags that might be visible */
            script[type="text/x-splade"],
            script[type="text/javascript"] {
                display: none !important;
            }
            
            /* Ensure footer is the last visible element */
            footer {
                position: relative;
                z-index: 1;
            }
            
            /* Hide @spladeScripts text specifically */
            body:contains("@spladeScripts") {
                display: none !important;
            }
            
            /* Hide any text content that contains @spladeScripts */
            *:contains("@spladeScripts") {
                display: none !important;
                visibility: hidden !important;
                opacity: 0 !important;
            }
            
            /* Alternative approach - hide any text nodes */
            body > *:last-child:not(footer):not(script):not(style) {
                display: none !important;
            }
        </style>
        
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
                
                // Mobile menu functionality
                const mobileMenuToggle = document.getElementById('menuToggle');
                const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
                const mobileMenuSidebar = document.getElementById('mobileMenuSidebar');
                const closeMobileMenu = document.getElementById('closeMobileMenu');
                
                function openMobileMenu() {
                    mobileMenuOverlay.style.display = 'block';
                    setTimeout(() => {
                        mobileMenuOverlay.style.opacity = '1';
                        mobileMenuSidebar.style.transform = 'translateX(0)';
                    }, 10);
                    document.body.style.overflow = 'hidden'; // Prevent background scrolling
                }
                
                function closeMobileMenuFunc() {
                    mobileMenuOverlay.style.opacity = '0';
                    mobileMenuSidebar.style.transform = 'translateX(100%)';
                    setTimeout(() => {
                        mobileMenuOverlay.style.display = 'none';
                    }, 300);
                    document.body.style.overflow = ''; // Restore scrolling
                }
                
                // Event listeners for mobile menu
                if (mobileMenuToggle) {
                    mobileMenuToggle.addEventListener('click', openMobileMenu);
                }
                
                if (closeMobileMenu) {
                    closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
                }
                
                // Close menu when clicking overlay
                if (mobileMenuOverlay) {
                    mobileMenuOverlay.addEventListener('click', function(e) {
                        if (e.target === mobileMenuOverlay) {
                            closeMobileMenuFunc();
                        }
                    });
                }
                
                // Close menu on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && mobileMenuOverlay.style.display === 'block') {
                        closeMobileMenuFunc();
                    }
                });
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
            
            // Remove any visible @spladeScripts text
            function removeSpladeScriptsText() {
                // Walk through all text nodes in the document
                function walkTextNodes(node) {
                    if (node.nodeType === Node.TEXT_NODE) {
                        if (node.textContent.includes('@spladeScripts')) {
                            node.textContent = node.textContent.replace(/@spladeScripts/g, '');
                        }
                    } else {
                        for (let child of node.childNodes) {
                            walkTextNodes(child);
                        }
                    }
                }
                
                walkTextNodes(document.body);
            }
            
            // Run on DOM content loaded
            document.addEventListener('DOMContentLoaded', removeSpladeScriptsText);
            
            // Also run after a short delay to catch any dynamically added content
            setTimeout(removeSpladeScriptsText, 100);
            setTimeout(removeSpladeScriptsText, 500);
            setTimeout(removeSpladeScriptsText, 1000);
        </script>
    </div>
    
    @spladeScripts
</body>
</html>
