<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchCategory;

    public function render()
    {
        $searchCategory = '%'.$this->searchCategory.'%';
        return view('livewire.category',[
            'categories' => CategoryModel::where('name','like', $searchCategory)->orWhere('description','like',$searchCategory)->paginate(10)->onEachSide(1)
        ]);
    }
}
