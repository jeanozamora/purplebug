<div class="w-1/2 mt-3 bg-white rounded border shadow">
    <form class="w-full max-w-lg p-3">
        <input type="hidden" wire:model="user_id">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6">
                <label class="block uppercase text-gray-700 text-xs font-bold">
                    Name
                </label>
                <input wire:model="name" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700
                border rounded py-3 px-4 focus:outline-none focus:bg-white" />
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase text-gray-700 text-xs font-bold">
                  New Password
                </label>
                <input wire:model="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700
                border rounded py-3 px-4 focus:outline-none focus:bg-white" />
            </div>
            <div class="w-full px-3 mb-6">
                <label class="block uppercase text-gray-700 text-xs font-bold">
                  Role
                </label>
                <select name="role_id" wire:model="role_id" class="block appearance-none w-full
                bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->description}}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <button class="bg-indigo-500
            hover:bg-indigo-700 text-white font-bold py-2
            px-4 rounded focus:outline-none focus:shadow-outline"
            wire:click.prevent="userUpdate()">Update</button>
            <button class="bg-gray-500
            hover:bg-gray-700 text-white font-bold py-2
            px-4 rounded focus:outline-none focus:shadow-outline"
            wire:click.prevent="userCancel()">Cancel</button>
            </div>
            
        </div>
        
    </form>
</div>