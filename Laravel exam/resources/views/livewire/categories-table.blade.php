<div>
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-grey-darkest leading-normal">
        @if(session()->has('message'))
    <div class="bg-green-200 mb-5 p-3">
        <span class="text-green-500">{{ session('message')}}</span>
    </div>
    @elseif(session()->has('editMessage'))
    <div class="bg-yellow-200 mb-5 p-3">
        <span class="text-yellow-500">{{ session('editMessage')}}</span>
    </div>
    @elseif(session()->has('deleteMessage'))
    <div class="bg-red-200 mb-5 p-3">
        <span class="text-red-500">{{ session('deleteMessage')}}</span>
    </div>
    @endif
        <table class="bg-white min-w-full">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="font-semibold text-sm py-3 px-4">
                        Categories
                    </th>
                    @if(Auth::user()->role->id == 1)
                    <th class="font-semibold text-sm py-3 px-4">
                        Actions
                    </th>
                    @endif
                </tr>
            </thead>
            <tbody>                
                @foreach($categories as $category)
                <tr>
                    <td class="text-center py-3 px-4 border">
                        {{$category->category_name}}
                    </td>
                    @if(Auth::user()->role->id == 1)
                    <td class="text-center py-3 px-4 border">
                        <button 
                    class="bg-blue-500
                    hover:bg-blue-700
                    text-white
                    font-bold py-1 px-2
                    rounded-full"
                    wire:click="catEdit({{$category->id}})">Edit</button>
                    <button 
                    class="bg-red-500
                    hover:bg-red-700
                    text-white
                    font-bold py-1 px-2
                    rounded-full"
                    wire:click="catDelete({{$category->id}})">Delete</button>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @if($updateMode)
        @include('livewire.update-categories')
        @else
        @if(Auth::user()->role->id == 1)
        @include('livewire.create-categories')
        @endif
        @endif
    </div>
</div>
