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
        $this->featuredProducts = Product::where('is_featured', true)->latest()->take(3)->get();
        
        // Load images manually to ensure they're loaded properly
        foreach ($this->featuredProducts as $product) {
            $product->load(['category']);
            
            // Load images manually using the morphMany relationship
            $images = \App\Models\Image::where('imageable_type', 'App\Models\Product')
                ->where('imageable_id', $product->id)
                ->orderBy('sort_order')
                ->get();
            
            $product->setRelation('images', $images);
        }
        
        // Debug: Log the featured products and their images
        \Log::info('Featured products loaded:', [
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
