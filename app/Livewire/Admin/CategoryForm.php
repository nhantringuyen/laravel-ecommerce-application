<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class CategoryForm extends Component
{
    public bool $isShown = false;
    public Category $category;

    protected $listeners = ['create'];
    protected $rules = [
        'category.name' => 'required|string',
        'category.slug' => 'required|string',
        'category.description' => 'nullable|string',
    ];

    public function create()
    {
        $this->isShown = true;
        $this->category = new Category();
    }
    public function render()
    {
        $isShown = $this->isShown;
//        dd($isShown);
        return view('livewire.admin.category-form',['isShown'=> $isShown]);
    }
    public function save()
    {
        $this->validate();
        $this->category->save();
    }
}
