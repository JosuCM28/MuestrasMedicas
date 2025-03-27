<div>
    <flux:modal.trigger name="create-sample">
        <flux:button class="mb-4">Agregar Muestra</flux:button>
    </flux:modal.trigger>
    <livewire:sample-create />
    <livewire:sample-edit />
    <livewire:sample-show />
    <flux:modal name="delete-sample" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Eliminar Muestra</flux:heading>

                <flux:text class="mt-2">
                    <p>Estas seguro de eliminar la muestra?.</p>
                    <p>Esta accion no de podra revertir</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>

                <flux:button wire:click='destroy()' type="submit" variant="danger">Eliminar muestra</flux:button>
            </div>
        </div>
    </flux:modal>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-white">
            <thead
                class="odd:bg-blue-50 odd:dark:bg-slate-800 even:bg-blue-100 even:dark:bg-slate-700 border-b dark:border-slate-600">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Direccion</th>
                    <th scope="col" class="px-6 py-3">Tipo de Muestra</th>
                    <th scope="col" class="px-6 py-3">Fecha</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($samples as $sample)
                    <tr
                        class="odd:bg-blue-50 odd:dark:bg-slate-800 even:bg-blue-100 even:dark:bg-slate-700 border-b dark:border-slate-600">
                        <td class="px-6 py-3 font-medium text-gray-900 dark:text-gray-400">{{ $sample->nombre }}</td>
                        <td class="px-6 py-3 font-medium text-gray-900 dark:text-gray-400">{{ $sample->direccion }}</td>
                        <td class="px-6 py-3 font-medium text-gray-900 dark:text-gray-400">{{ $sample->tipo_muestra }}
                        </td>
                        <td class="px-6 py-3 font-medium text-gray-900 dark:text-gray-400">{{ $sample->fecha }}</td>
                        <td>
                            <div class="flex gap-3 items-center">
                                <flux:icon.pencil wire:click='edit({{ $sample->id }})' />
                                <flux:icon.eye wire:click='show({{ $sample->id }})' />
                                <flux:icon.trash wire:click='delete({{ $sample->id }})' />
                            </div>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
