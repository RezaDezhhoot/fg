<div>
    <x-admin.subheader title="اگهی" :mode="$mode" :create="false"/>

    <div class="content d-flex flex-column-fluid">
        <div class="container">

            <div>
                <x-admin.forms.validation-errors/>
            </div>
            <x-admin.forms.form title="اگهی" :mode="$mode">
                <x-admin.forms.input type="text" id="title" label="عنوان" required="true" wire:model.defer="title"/>
                <x-admin.forms.input type="number" id="amount" label="قیمت" required="true" wire:model.defer="amount"/>
                <x-admin.forms.dropdown id="category_id" label="دسته " :options="$data['categories']" required="true"  wire:model.defer="category_id"/>
                <x-admin.forms.dropdown id="status" label="وضعیت " :options="$data['status']" required="true"  wire:model.defer="status"/>

                <x-admin.forms.input type="text" id="telegram_id" label="ای دی تلگرام" wire:model.defer="telegram_id"/>

                <x-admin.forms.checkbox id="lottery" value="1" wire:model.defer="fg_depot">موجود در انبار فارس گیمر</x-admin.forms.checkbox>

                <x-admin.forms.lfm-standalone id="image" label="تصویر" :image="$image" required="true" wire:model="image"/>
                <x-admin.forms.lfm-standalone id="gallery" label="تصاویر" :image="$gallery" wire:model.defer="gallery"/>

                <x-admin.forms.textarea id="description" label="توضیحات" required="true" wire:model.defer="description"/>
                <x-admin.forms.input type="text" id="seo_keywords" label="کلمات کلیدی سئو"  help="کلمات کلیدی را با کاما از هم جدا کنید" wire:model.defer="seo_keywords"/>
                <x-admin.forms.input type="text" id="seo_description" label="توضیحات سئو"  wire:model.defer="seo_description"/>

                <x-admin.forms.text-editor id="admin_description" label="توضیحات ادمین"  wire:model.defer="admin_description"/>

            </x-admin.forms.form>

            <div class="card">
                <div class="card-body">

                    @include('admin.components.advanced-table')
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>موضوع </th>
                                <th>توضیخات </th>
                                <th>کاربر</th>
                                <th>تاریخ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($infractions as $item)
                                <tr>
                                    <td>{{iteration($loop, $perPage)}}</td>
                                    <td>{{$item->subject}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->user->full_name ." ". $item->username ." ". $item->phone}}</td>
                                    <td>{{jalaliDate($item->created_at)}}</td>
                                </tr>
                            @empty
                                <td class="text-center" colspan="8">
                                    دیتایی جهت نمایش وجود ندارد
                                </td>
                            @endforelse
                            <tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {{ $infractions->links('admin.components.pagination') }}
                </div>
            </div>

        </div>
    </div>
</div>
