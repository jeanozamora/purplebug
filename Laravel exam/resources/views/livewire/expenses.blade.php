<div class="w-full md:w-1/2 p-3">
        <div class="bg-white border rounded shadow">
            <div class="border-b p-3">
                <h5 class="uppercase text-grey-dark">Expenses</h5>
            </div>
            <div class="p-5">
                <div>
                    <table class="bg-white min-w-full">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left font-semibold text-sm py-3 px-4">Expenses</th>
                                <th class="font-semibold text-sm py-3 px-4">Category</th>
                                <th class="font-semibold text-sm py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach($this->expenses as $expense)
                            <tr wire:key="{{$expense->id}}">
                                <td class="text-left py-3 px-4 border">{{$expense->amount}} PHP</td>
                                <td class="text-center py-3 px-4 border"> {{$expense->category->category_name}} </td>
                                <td class="text-center py-3 px-4 border">
                                <button 
                                class="bg-blue-500
                                hover:bg-blue-700
                                text-white
                                font-bold py-1 px-2
                                rounded-full"
                                wire:click="edit({{ $expense->id }})">Edit</button>
                                <button 
                                class="bg-red-500
                                hover:bg-red-700
                                text-white
                                font-bold py-1 px-2
                                rounded-full"
                                wire:click="delete({{ $expense->id}})">Delete</button>
                                </td>
                            </tr>            
                            @endforeach
                            <tr>
                                <td class="bg-gray-800 text-white text-left font-semibold text-sm py-3 px-4">
                                  Total:  {{$totalAmount}} PHP
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
            
                    @if($updateMode)
                    @include('livewire.update')
                    @else
                    @include('livewire.create')
                    @endif
            
                </div>
            </div>
        </div>                
    </div>
    @include('livewire.expenses-charts')
</div>    

