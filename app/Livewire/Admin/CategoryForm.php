<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryForm extends Component
{
    public bool $isShown = false;
    public Category $category;

    protected $listeners = ['create', 'edit'];
    protected array $rules = [
        'category.name' => 'required|string',
        'category.slug' => 'required|string',
        'category.description' => 'nullable|string',
    ];

    public function create(): void
    {
        $this->isShown = true;
        $this->category = new Category();
    }
    public function edit(Category $category): void
    {
      $this->category = $category;
       $this->isShown = true;
    }
    public function render()
    {
        return view('livewire.admin.category-form');
    }
    public function save(): void
    {
        $this->validate();
        $this->category->save();
    }

}
