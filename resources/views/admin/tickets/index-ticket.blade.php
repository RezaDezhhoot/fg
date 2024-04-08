<div>
    <x-admin.subheader title="تیکت" :mode="$mode" :create="route('admin.store.ticket', ['action' => 'create'])" />
    <div class="content d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom">
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-6">
                            <a href="{{ route('admin.ticket') }}" type="button" style="border: 1px solid #E4E6EF;"
                                class="btn btn-link m-2" wire:click="$set('status', 'pending')">همه </a>

                            @foreach ($data['status'] as $key => $item)
                                @if ($status == $key)
                                    <button type="button" style="border: 1px solid #E4E6EF;"
                                        class="btn btn-link disabled m-2"
                                        wire:click="$set('status', '{{ $key }}')">{{ $item }}
                                        ({{ \App\Models\Ticket::where('status', $key)->where('parent_id', null)->get()->count() }})
                                    </button>
                                @else
                                    <button type="button" style="border: 1px solid #E4E6EF;" class="btn btn-link m-2"
                                        wire:click="$set('status', '{{ $key }}')">{{ $item }}
                                        ({{ \App\Models\Ticket::where('status', $key)->where('parent_id', null)->get()->count() }})</button>
                                @endif
                            @endforeach
                        </div>

                        <x-admin.forms.dropdown id="priority" with='6' :options="$data['priority']" label="الویت"
                            wire:model="priority" />
                    </div>

                    @include('admin.components.advanced-table')
                    <div class="row">
                        <div class="col-lg-12 table-responsive">
                            <table class="table table-striped" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th> موضوع</th>
                                        <th>کاربر هدف</th>
                                        <th>فرستنده</th>
                                        <th>وضعیت</th>
                                        <th>الویت</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($tickets as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->subject->title ?? '' }}</td>
                                            <td>{{ $item->user->username }}</td>
                                            <td>{{ $item->senderTypeLabel }}</td>
                                            @php
                                                $label = [
                                                    'deactivate' => '#FF3838',
                                                    'active' => '#009829',
                                                    'pending' => '#FFBC00',
                                                ];
                                            @endphp
                                            <td style="color:{{ $label[$item->status] }}">{{ $item->statusLabel }}
                                            </td>
                                            <td>{{ $item->priorityLabel }}</td>
                                            <td>{{ jalaliDate($item->created_at, '%d %B %Y') }}</td>
                                            <td>

                                                <x-admin.edit-table
                                                    href="{{ route('admin.store.ticket', ['action' => 'edit', 'id' => $item->id]) }}" />
                                                <x-admin.delete-table onclick="deleteItem({{ $item->id }})" />
                                            </td>
                                        </tr>
                                    @empty
                                        <td class="text-center" colspan="8">
                                            دیتایی جهت نمایش وجود ندارد
                                        </td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $tickets->links('admin.components.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function deleteItem(id) {
            Swal.fire({
                title: 'حذف تیکت!',
                text: 'آیا از حذف این تیکت اطمینان دارید؟',
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
                            'تیکت مورد نظر با موفقیت حذف شد',
                        )
                    }
                    @this.call('delete', id)
                }
            })
        }
    </script>
@endpush
