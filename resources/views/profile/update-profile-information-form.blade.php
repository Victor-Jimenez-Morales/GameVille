<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza la información de tu perfil y tu email.') }}
    </x-slot>

    <x-slot name="form" class="bg-red-600">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Nombre') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required
                autocomplete="username" />
            <x-input-error for="email" class="mt-2" />
        </div>

        @if (Auth::user()->isAdmin != 1)
            <!-- Address -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="address" value="{{ __('Dirección') }}" />
                <x-input id="address" type="text" class="mt-1 block w-full" wire:model="state.address" />
                <x-input-error for="address" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="phone" value="{{ __('Teléfono') }}" />
                <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="state.phone"
                    maxlength="9" />
                <x-input-error for="phone" class="mt-2" />
            </div>
        @endif
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Guardado.') }}
        </x-action-message>

        <x-button class="text-sm bg-red-600 hover:bg-red-700 active:bg-red-800" wire:loading.attr="disabled"
            wire:target="photo">
            {{ __('Guardar') }}
        </x-button>
    </x-slot>
</x-form-section>
