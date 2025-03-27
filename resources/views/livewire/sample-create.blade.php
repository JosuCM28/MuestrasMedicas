<div>
    <flux:modal name="create-sample" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Resgistrar nueva muestra</flux:heading>
                <flux:text class="mt-2">Introduzca los datos de la muestra.</flux:text>
            </div>
            <div>
                <div class="flex flex-col gap-4">
                    <flux:input wire:model="nombre" label="Nombre" placeholder="Tu nombre" />
                    <flux:input wire:model="direccion" label="Dirección" placeholder="Tu dirección" />

                    <div class="flex gap-4">
                        <flux:input wire:model="fecha" label="Fecha" type="date" />
                        <flux:input wire:model="hora" label="Hora" type="time" />
                    </div>

                    <div class="flex gap-4">
                        <flux:input wire:model="contacto" label="Contacto" placeholder="Contacto" maxlength="50" />
                        <flux:input wire:model="recolector" label="Recolector" placeholder="Nombre del recolector" />
                    </div>

                    <div class="flex gap-4">
                        <flux:select wire:model="tipo_muestra" placeholder="Tipo de muestra...">
                            <flux:select.option>Paludismo</flux:select.option>
                            <flux:select.option>Denge</flux:select.option>
                            <flux:select.option>Chagas</flux:select.option>
                        </flux:select>
                    </div>
                    <flux:input wire:model="observaciones" placeholder="Notas relevantes..." rows="5" />
                </div>
            </div>



            <div class="flex">
                <flux:spacer />

                <flux:button wire:click="submit" type="submit" variant="primary">Guardar muestra</flux:button>
    
            </div>
        </div>
    </flux:modal>
</div>
