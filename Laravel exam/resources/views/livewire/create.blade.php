<div class="p-5 w-full max-w-lg">
  <form>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Expenses
                  </label>
                <input type="number" placeholder="insert expenses here" class="appearance-none block w-full bg-gray-200 text-gray-700
                rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border" wire:model="amount" />
                @error('amount') <span class="text-danger"> {{$message }} </span> @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Category
                </label>
                <div class="relative">
                  <select name="category_id" wire:model="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Select Category</option>
                      @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <button class="bg-blue-500
                hover:bg-blue-700 text-white font-bold py-2
                px-4 rounded focus:outline-none focus:shadow-outline"
                wire:click.prevent="store()">Add Expenses</button>
            </div>
        </div>
    </form>
</div>
