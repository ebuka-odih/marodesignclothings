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
        
        // Featured products for the featured collection section
        $this->featuredProducts = Product::with(['category', 'images' => function($query) {
            $query->orderBy('sort_order');
        }])->where('is_featured', true)->latest()->take(3)->get();
        
        // Ensure images are loaded properly and handle null cases
        foreach ($this->featuredProducts as $product) {
            if (!$product->relationLoaded('images')) {
                $product->load('images');
            }
            // Ensure images is always a collection, even if empty
            if (!$product->images) {
                $product->setRelation('images', collect([]));
            }
        }
    }

    public function render()
    {
        return view('livewire.home-page')
            ->layout('layouts.app-livewire');
    }
}
