<div>
    <x-admin.subheader title="تیکت" :mode="$mode" :create="false" />

    <div class="content d-flex flex-column-fluid">
        <div class="container">

            <div>
                <x-admin.forms.validation-errors />
            </div>
            <x-admin.forms.form title="تیکت" :mode="$mode">
                <div class="row">
                    <x-admin.forms.dropdown id="status" with="12" :options="$data['status']" label="وضعیت*"
                        wire:model.defer="status" />

                    @if ($mode == 'update')
                    <table class="table table-striped table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <td>کد سفارش</td>
                                <td>نام محصول</td>
                                <td>شماره کارت پرداخت شده</td>
                                <td>شماره کاربر</td>
                                <td>نام و نام خانوادگی کاربر</td>
                                <td>وضعیت</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $orderId }}</td>
                                <td>{{ $productName }}</td>
                                <td>{{ $cardNumber }}</td>
                                <td>{{ $ticket->sender->mobile }}</td>
                                <td>{{ $ticket->sender->name . ' ' . $ticket->sender->family }}</td>
                                <td>{{ $ticket->status_label }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                    <x-admin.forms.dynamic-select2 :data="$oldSubject" text="title" id="subject" label="موضوع"
                        ajaxUrl="{{ route('admin.subjects.feed') }}" wire:model.defer="subject" />

                    @if ($mode == 'update')
                        <x-admin.forms.header title="تاریخچه گفتگو" />

                        <div class="w-100 py-2 mx-4 mb-2">
                            <div class="col-12 w-100 border px-4 py-3 d-flex align-items-center justify-content-between alert alert-light"
                                role="alert">
                                <div>
                                    <h5 class="text-info">
                                        {{ $ticket->sender->name . ' ' . $ticket->sender->family }}
                                        ({{ $ticket->sender_type }})
                                    </h5>
                                    <p>
                                        {!! $ticket->content !!}
                                    </p>
                                    <small class="text-warning">{{ jalaliDate($ticket->created_at) }}</small>
                                    @if (!empty($ticket->file))
                                        <p>
                                            <label for="">فایل</label>
                                            @foreach (explode(',', $ticket->file) as $value)
                                                <a class="btn btn-link" href="{{ asset($value) }}">مشاهده</a>
                                            @endforeach
                                        </p>
                                    @endif
                                </div>
                            </div>
                            @foreach ($ticket->child as $key => $item)
                                @if ($item->sender_type == \App\Models\Ticket::ADMIN)
                                    <div class="col-12 w-100 border px-4 py-3 d-flex align-items-center justify-content-between alert alert-light"
                                        style="background-color: #7d91a7 !important;" role="alert">
                                        <div>
                                            <h5 class="text-info">
                                                {{ $item->sender->name . ' ' . $item->sender->family }}
                                                ({{ $item->sender_type }})
                                            </h5>
                                            <div style="color: white !important">
                                                {!! $item->content !!}
                                            </div>
                                            <small class="text-warning">{{ jalaliDate($item->created_at) }}</small>
                                            @if (!empty($item->file))
                                                <p>
                                                    <label for="">فایل</label>
                                                    @foreach (explode(',', $item->file) as $value)
                                                        <a class="btn btn-link" href="{{ asset($value) }}">مشاهده</a>
                                                    @endforeach
                                                </p>
                                            @endif
                                        </div>
                                        <div>
                                            <button class="btn btn-light-danger font-weight-bolder btn-sm mx-3r"
                                                wire:click="deleteChild({{ $item->id }})">حذف</button>
                                        </div>
                                    </div>
                                @else
                                    @if ($item->sender_type == \App\Models\Ticket::USER)
                                        <div class="col-12 w-100 border px-4 py-3 d-flex align-items-center justify-content-between alert alert-light"
                                            role="alert">
                                            <div>
                                                <h5 class="text-info">
                                                    {{ $item->sender->name . ' ' . $item->sender->family }}
                                                    ({{ $item->sender_type }})
                                                </h5>
                                                <p>
                                                    {!! $item->content !!}
                                                </p>
                                                <small
                                                    class="text-warning">{{ jalaliDate($item->created_at) }}</small>
                                                @if (!empty($item->file))
                                                    <p>
                                                        <label for="">فایل</label>
                                                        @foreach (explode(',', $item->file) as $value)
                                                            <a class="btn btn-link"
                                                                href="{{ asset($value) }}">مشاهده</a>
                                                        @endforeach
                                                    </p>
                                                @endif
                                            </div>
                                            <div>
                                                <button class="btn btn-light-danger font-weight-bolder btn-sm mx-3r"
                                                    wire:click="deleteItem({{ $key }})">حذف</button>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                        <x-admin.forms.header title="ارسال پاسخ" />

                        <div class="my-2">
                            @foreach ($TicketMessages as $key => $item)
                                <button type="button" class="btn btn-outline-dark my-2 mx-2"
                                    wire:click="addText('{{ $item->id }}')">{{ $item->title }}
                                </button>
                            @endforeach
                        </div>

                        <x-admin.forms.text-editor id="answer" label="متن " required="true"
                            wire:model.defer="answer" />

                        <div
                            style="display: flex;justify-content: space-between;align-items: center;width: 100%;box-sizing: border-box">
                            <div>
                                <x-admin.forms.lfm-standalone id="answerFile" label="پیوست فایل" :image="$answerFile"
                                    wire:model="answerFile" with="1" />
                            </div>

                            <x-admin.button class="btn btn-light-primary font-weight-bolder btn-sm" content="ارسال پاسخ"
                                wire:click="newAnswer()" />
                        </div>
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
