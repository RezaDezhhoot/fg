<div>
    <x-admin.subheader title="متن های آماده تیکت" :mode="$mode" :create="false"/>
    <div class="content d-flex flex-column-fluid">
        <div class="container">
            <div>
                <x-admin.forms.validation-errors/>
            </div>
            <x-admin.forms.form title="متن های آماده تیکت" :mode="$mode">
                <x-admin.forms.input type="text" id="title" label="عنوان" required="true" wire:model.defer="title"/>

                <x-admin.forms.text-editor id="body" label="توضیحات"  wire:model.defer="body"/>
            </x-admin.forms.form>

        </div>
    </div>
</div>
