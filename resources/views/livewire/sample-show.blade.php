<div>
    <flux:modal name="show-sample" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Muestras</flux:heading>
                <flux:text class="mt-2">introduce los datos de la muestra.</flux:text>
            </div>
            <div>
                <div class="flex flex-col gap-4">
                    <flux:input wire:model="nombre" disabled label="Nombre" placeholder="Tu nombre" />
                    <flux:input wire:model="direccion" disabled label="Dirección" placeholder="Tu dirección" />

                    <div class="flex gap-4">
                        <flux:input wire:model="fecha" label="Fecha" disabled type="date" />
                        <flux:input wire:model="hora" label="Hora" disabled type="time" />
                    </div>

                    <div class="flex gap-4">
                        <flux:input wire:model="contacto" label="Contacto" disabled placeholder="Contacto" maxlength="50" />
                        <flux:input wire:model="recolector" label="Recolector" disabled placeholder="Nombre del recolector" />
                    </div>

                    <div class="flex gap-4">
                        <flux:select wire:model="tipo_muestra" disabled placeholder="Tipo de muestra...">
                            <flux:select.option>Paludismo</flux:select.option>
                            <flux:select.option>Denge</flux:select.option>
                            <flux:select.option>Chagas</flux:select.option>
                        </flux:select>
                    </div>
                    <flux:input wire:model="observaciones"  disabled placeholder="Notas relevantes..." rows="5" />
                </div>
            </div>



            <div class="flex">
                <flux:spacer />

                <flux:button wire:click="close" type='button' variant="primary">Cerrar</flux:button>
    
            </div>
        </div>
    </flux:modal>
</div>

