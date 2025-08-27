<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Setting;

class HomePage extends Component
{
    public $products;
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
    }

    public function render()
    {
        return view('livewire.home-page')
            ->layout('layouts.app-livewire');
    }
}
