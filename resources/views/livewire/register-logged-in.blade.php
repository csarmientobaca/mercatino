<x-action-section class="mx-20">
    <x-slot name="title">
        {{ __('Create Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create Client') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Create an Account') }}
        </div>

        <div class="mt-5">
            <!-- Button to open user registration modal -->
            <x-button wire:click="openRegistrationModal">
                {{ __('Create Account') }}
            </x-button>
        </div>

        <!-- User Registration Modal -->
        <x-dialog-modal wire:model.live="showRegistrationModal">
            <x-slot name="title">
                {{ __('User Registration') }}
            </x-slot>

            <x-slot name="content">
                <!-- Add your user registration form fields here -->
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input wire:model="name" id="name" class="block mt-1 w-full" type="text" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <div>
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input wire:model="last_name" id="last_name" class="block mt-1 w-full" type="text" :value="old('last_name')" required autofocus autocomplete="last_name" />
                </div>
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input wire:model="email" id="email" class="block mt-1 w-full" type="email" :value="old('email')" required autofocus autocomplete="email" />
                </div>
                <div>
                    <x-label for="place_in_map" value="{{ __('Place in Map') }}" />
                    <x-input wire:model="place_in_map" id="place_in_map" class="block mt-1 w-full" type="text" :value="old('place_in_map')" required autofocus autocomplete="place_in_map" />
                </div>
                <!-- Repeat similar blocks for other fields -->
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input wire:model="password" id="password" class="block mt-1 w-full" type="password" :value="old('password')" required autofocus autocomplete="password" />
                </div>
                <div>
                    <x-label for="password_confirmation" value="{{ __('password_confirmation') }}" />
                    <x-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full" type="password" :value="old('password_confirmationS')" required autofocus autocomplete="password" />
                </div>

                <!-- Registration button -->
                <div class="flex items-center justify-end mt-4">
                    <x-button wire:click="register">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </x-slot>

            <x-slot name="footer">
                <!-- Close modal button -->
                <x-secondary-button wire:click="closeRegistrationModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>