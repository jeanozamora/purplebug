<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesTable extends Component
{
    public $categories, $category_name, $category, $category_id;
    public $updateMode = false;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.categories-table');
    }

    private function resetInputFields() {
        $this->category_name = '';
    }

    public function catStore() {
        $validate = $this->validate([
            'category_name' => 'required',
        ]);

        Category::create($validate);

        $this->resetInputFields();

        session()->flash('message', 'Added Successfully');

    }

    public function catCancel() {
        $this->updateMode = false;
        $this-> resetInputFields();
    }

    public function catEdit($id) {
        $category = Category::findOrFail($id);
        $this->category_id = $id;
        $this->category_name = $category->category_name;

        $this->updateMode = true;
    }

    public function catUpdate() {
        $validate = $this->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($this->category_id);

        $category->update([
            'category_name' => $this->category_name,
        ]);

        $this->updateMode = false;

        session()->flash('editMessage', 'Updated Succesfully');
        $this->resetInputFields();
    }

    public function catDelete($id) {
        Category::find($id)->delete();
        session()->flash('deleteMessage', 'Deleted Succesfully');
    }


}
