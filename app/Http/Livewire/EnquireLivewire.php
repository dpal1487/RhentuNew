<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Attribute;

class EnquireLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchCategory;
    public function render()
    {
        $searchCategory = '%'.$this->searchCategory.'%';

        return view('livewire.enquire-livewire',[
            'categories' => CategoryModel::where('name','like', $searchCategory)->paginate(10)->onEachSide(1)
        ]);
    }
}
