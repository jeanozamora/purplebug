<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Hash;
use Auth;

class UsersTable extends Component
{
    public $users, $roles, $role_id, $name, $email, $password, $user_id;
    public $updateMode = false;

    public function render()
    {
        $this->users = User::all();
        $this->roles = Role::all();
        return view('livewire.users-table');
    }

    private function resetInputFields() {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role_id = '';
    }

    public function userStore() {
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'role_id' => 'required'
        ]);

        $this->password = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'role_id' => $this->role_id
        ]);

        session()->flash('message', 'Added Successfully');

        $this->resetInputFields();
    }

    public function userEdit($id) {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role_id = $user->role_id;

        $this->updateMode = true;
    }

    public function changePassword() {
        $validate = $this->validate([
            'password' => 'required|min:3'
        ]);

        $user = Auth::user();

        $this->password = Hash::make($this->password);

        $user->update([
            'password' => $this->password
        ]);

        session()->flash('editMessage', 'Updated successfully');
    }

    public function userUpdate() {

        $validate = $this->validate([
            'name' => 'required',
            'password' => 'required|min:3',
            'role_id' => 'required'
        ]);

        $user = User::find($this->user_id);

        $this->password = Hash::make($this->password);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'role_id' => $this->role_id
        ]);

        $this->updateMode = false;

        session()->flash('editMessage', 'Updated Succesfully');
        $this->resetInputFields();
    }

    public function userCancel() {
        $this->updateMode = false;
        $this-> resetInputFields();
    }

    public function userDelete($id) {
        User::find($id)->delete();
        session()->flash('deleteMessage', 'Deleted Succesfully');
    }

}
