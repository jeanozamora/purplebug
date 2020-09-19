<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Expense;
use App\Models\Category;
use DB;

class Expenses extends Component
{
    public $updateMode = false;
    public $expenses;
    public $amount;
    public $category_id;
    public $categories;
    public $expense_id;
    public $totalAmount;

    public function render()
    {
        $this->expenses = Expense::all();
        $this->categories = Category::all();
        $this->totalAmount = Expense::all()->sum('amount');            

        return view('livewire.expenses');
    }

    private function resetInputFields() {
        $this->amount = '';
    }

    public function store() {
        $validate = $this->validate([
            'amount' => 'required',
            'category_id' => 'required',
        ]);
        Expense::create($validate);
    }

    public function edit($id) {
        $expense = Expense::findOrFail($id);
        $this->expense_id = $id;
        $this->amount = $expense->amount;
        $this->category_id = $expense->category_id;

        $this->updateMode = true;
    }

    public function cancel() {
        $this->updateMode = false;
        $this-> resetInputFields();
    }

    public function update() {
        $validate = $this->validate([
            'amount' => 'required',
            'category_id' => 'required',
        ]);

        $expense = Expense::find($this->expense_id);

        $expense->update([
            'amount' => $this->amount,
            'category_id' => $this->category_id,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Updated Succesfully');
        $this->resetInputFields();
    }

    public function delete($id) {
        Expense::find($id)->delete();
    }
}
