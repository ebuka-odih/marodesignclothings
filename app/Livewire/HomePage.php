<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Setting;

class HomePage extends Component
{
    public $products;
    public $featuredProducts;
    public $settings;

    public function mount()
    {
        // Check if coming soon is enabled
        $this->settings = Setting::getComingSoonSettings();
        
        // For now, always show the main page
        // Normal index page
        $this->products = Product::with(['category', 'images' => function($query) {
            $query->orderBy('sort_order');
        }])->latest()->take(4)->get();
        
        // Latest products for the latest collections section with images
        $this->featuredProducts = Product::with(['category', 'images' => function($query) {
            $query->orderBy('sort_order');
        }])->latest()->take(3)->get();
        
        // Debug: Log the latest products and their images
        \Log::info('Latest products loaded:', [
            'count' => $this->featuredProducts->count(),
            'products' => $this->featuredProducts->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'images_count' => $product->images ? $product->images->count() : 0,
                    'first_image_path' => $product->images && $product->images->count() > 0 ? $product->images->first()->path : null
                ];
            })->toArray()
        ]);
    }

    public function render()
    {
        return view('livewire.home-page')
            ->layout('layouts.app-livewire');
    }
}
