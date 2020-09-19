  <div>
      <form>
          <div class="w-1/3 mt-3 mb-3">
            <label class="font-semibold uppercase mb-3">Category</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 
            rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none 
            focus:bg-white focus:border-purple-500" placeholder="Insert category here" id="inline-full-name" type="text"
            wire:model="category_name">
          @error('category_name') <span class="text-red-500"> {{$message}} </span > @enderror
          </div>
          <div class="">
            <button class="shadow bg-purple-500 hover:bg-purple-400 
            focus:shadow-outline focus:outline-none text-white 
            font-bold py-2 px-4 rounded" type="submit"
            wire:click.prevent="catStore()">
              Add Category
            </button>
          </div>
      </form>
  </div>
  