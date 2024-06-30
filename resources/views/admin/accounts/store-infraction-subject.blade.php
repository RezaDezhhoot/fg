<div>
    <x-admin.subheader title="موضوعات تخلف" :mode="$mode" :create="false"/>

    <div class="content d-flex flex-column-fluid">
        <div class="container">
            <div>
                <x-admin.forms.validation-errors/>
            </div>
            <x-admin.forms.form title="موضوعات">
                <x-admin.forms.input type="text" id="title" label="عنوان" required="true" wire:model.defer="title"/>
            </x-admin.forms.form>
        </div>
    </div>
</div>
