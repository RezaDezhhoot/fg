<div>
    <x-admin.subheader title="تیکت" :mode="$mode" :create="false"/>

    <div class="content d-flex flex-column-fluid">
        <div class="container">

            <div>
                <x-admin.forms.validation-errors/>
            </div>
            <x-admin.forms.form title="تیکت" :mode="$mode">
            	<div class="row">


					<x-admin.forms.dropdown id="status" with="6" :options="$data['status']" label="وضعیت*" wire:model.defer="status"/>
					<x-admin.forms.dropdown id="priority" with="6"  :options="$data['priority']" label="الویت*" wire:model.defer="priority"/>
                    <x-admin.forms.dynamic-select2  :data="$oldUser" text="username" width="6" id="user_id"
                                                    label="کاربر"  ajaxUrl="{{ route('admin.feed.users') }}"
                                                    wire:model.defer="user_id"/>

                    <x-admin.forms.dynamic-select2 :data="$oldSubject" text="title"  id="subject"
                                                    label="موضوع" ajaxUrl="{{ route('admin.subjects.feed') }}"
                                                    wire:model.defer="subject"/>

					<x-admin.forms.text-editor id="content" label="متن اصلی" required="true" wire:model.defer="content"/>
					<x-admin.forms.lfm-standalone id="file" label="فایل" :image="$file" required="true" wire:model="file"/>




                    @if($mode == 'update')
                        <x-admin.forms.header title="تاریخچه گفتگو"/>

                        <div class="w-100 py-2 mx-4 mb-2">
                            @foreach($child as $key =>  $item)
                                <div class="col-12 w-100 border px-4 py-3 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h5 class="text-info">
                                            {{ $item->sender->name }} :
                                        </h5>
                                        <p>
                                            {!! $item->content !!}
                                        </p>
                                        <small class="text-warning">{{ $item->date }}</small>
                                        @if(!empty($item->file))
                                            <p>
                                                <label for="">فایل</label>
                                                @foreach(explode(',',$item->file) as $value)
                                                    <a class="btn btn-link" href="{{ asset($value) }}">مشاهده</a>
                                                @endforeach
                                            </p>
                                        @endif
                                    </div>
                                    <div>
                                        <button class="btn btn-light-danger font-weight-bolder btn-sm mx-3r" wire:click="delete({{$key}})">حذف</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <x-admin.forms.header title="ارسال پاسخ"/>

                        <x-admin.forms.text-editor id="answer" label="متن " required="true" wire:model.defer="answer"/>
                        <x-admin.forms.lfm-standalone id="answerFile" label="فایل" :image="$answerFile"  wire:model="answerFile"/>
                        <x-admin.button class="btn btn-light-primary font-weight-bolder btn-sm" content="ثبت" wire:click="newAnswer()" />
                    @endif


				</div>
            </x-admin.forms.form>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        function deleteItem(id) {
            Swal.fire({
                title: 'حذف تیکت  !',
                text: 'آیا از حذف این تیکت   اطمینان دارید؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'خیر',
                confirmButtonText: 'بله'
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'موفیت امیز!',
                            'تیکت   مورد نظر با موفقیت حذف شد',
                        )
                    }
                @this.call('deleteItem', id)
                }
            })
        }
    </script>
@endpush
