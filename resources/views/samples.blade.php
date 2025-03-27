<x-layouts.app>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Muestras Medicas') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Control de registro de muestras medicas') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <livewire:samples />
</x-layouts.app>
