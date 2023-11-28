<div x-data="{ expandedRow: null }" class="flex flex-col">
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
                                            <th>Name</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user->products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->quantity}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <p>No products for this user.</p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>