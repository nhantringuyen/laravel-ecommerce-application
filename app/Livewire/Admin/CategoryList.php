<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public function render()
    {
//        return view('livewire.admin.category-list');
        return view('livewire.admin.category-list', [
            'categories' => Category::with('parent')->latest()->get(),
        ])->layout('layouts.admin');
    }
}
