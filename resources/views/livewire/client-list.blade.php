<!-- client-list.blade.php -->

<div x-data="{ expandedRow: null, showAlert: @entangle('showAlert') }" class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Last Name</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Place in the map</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="bg-orange-300 border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600" x-bind:class="{ 'bg-orange-300 border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600': expandedRow !== {{$user->id}} }" x-on:click="expandedRow === {{$user->id}} ? expandedRow = null : expandedRow = {{$user->id}}">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$user->id}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$user->name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$user->last_name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$user->email}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$user->place_in_map}}</td>
                        </tr>
                        <!-- Expanded Row -->
                        <tr x-show="expandedRow === {{$user->id}}">
                            <td colspan="5" class="px-6 py-4">
                                <div class="text-lg">
                                    Products
                                </div>
                                @if($user->products)
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user->products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                <button wire:click="disassociateProduct({{ $user->id }}, {{ $product->id }})" class="px-2 py-1 bg-red-500 text-white rounded-md">Disassociate</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4">
                                    <label for="product" class="block text-sm font-medium text-gray-700">Select Product</label>
                                    <select wire:model="selectedProduct" id="product" name="product" class="mt-1 p-2 border text-black border-gray-300 rounded-md">
                                        <option value="">Select a product</option>
                                        @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    <button wire:click="associateProduct({{ $user->id }})" class="mt-2 px-4 py-2 bg-blue-500 text-black rounded-md">Associate Product</button>
                                </div>

                                @else
                                <p>No products for this user.</p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div x-show="showAlert" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed top-0 right-0 m-8 p-4 bg-red-500 text-white rounded-md">
                    <p>{{ $errors->first('selectedProduct') }}</p>
                    <button x-on:click="showAlert = false" class="ml-4 text-white">&times;</button>
                </div>
            </div>
        </div>
    </div>
</div>