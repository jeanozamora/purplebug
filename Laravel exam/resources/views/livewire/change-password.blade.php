<div class="w-1/2 mt-3 bg-white rounded border shadow">
    <form class="w-full max-w-lg p-3">
        <input type="hidden" wire:model="user_id">
        <div class="flex flex-wrap -mx-3 mb-6">
            
            <div class="w-full px-3 mb-6">
                <label class="block uppercase text-gray-700 text-xs font-bold">
                  New Password
                </label>
            <input wire:model="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700
                border rounded py-3 px-4 focus:outline-none focus:bg-white" />
            </div>
            
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <button class="bg-indigo-500
            hover:bg-indigo-700 text-white font-bold py-2
            px-4 rounded focus:outline-none focus:shadow-outline"
            wire:click.prevent="changePassword()">Update</button>
            </div>
            
        </div>
        
    </form>
</div>