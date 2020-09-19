<div>
    <form>
        <input type="hidden" wire:model="category_id">
        <div class="w-1/3 mt-3 mb-3">
          <label class="font-semibold uppercase mb-3">Category</label>
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 
          rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none 
          focus:bg-white focus:border-purple-500" placeholder="Insert category here" id="inline-full-name" type="text"
          wire:model="category_name">
        </div>
        <div class="">
            <button class="bg-indigo-500
            hover:bg-indigo-700 text-white font-bold py-2
            px-4 rounded focus:outline-none focus:shadow-outline"
            wire:click.prevent="catUpdate()">Update</button>
            <button class="bg-gray-500
            hover:bg-gray-700 text-white font-bold py-2
            px-4 rounded focus:outline-none focus:shadow-outline"
            wire:click.prevent="catCancel()">Cancel</button>
        </div>
    </form>
</div>
