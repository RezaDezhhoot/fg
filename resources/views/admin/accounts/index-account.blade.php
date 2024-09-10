<div>
    <x-admin.subheader title="اگهی" :mode="$mode" />
    <div class="content d-flex flex-column-fluid">
        <div class="container">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row">
                        <x-admin.forms.dropdown id="categories" label="دسته" :options="$data['categories']" wire:model="category"/>
                        <x-admin.forms.dropdown id="status" label="وضعیت" :options="$data['status']" wire:model="status"/>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    @include('admin.components.advanced-table')
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>کد اگهی</th>
                                <th>عنوان</th>
                                <th>گزارش های اگهی</th>
                                <th>دسته</th>
                                <th>فروشنده</th>
                                <th>قیمت</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <td>{{iteration($loop, $perPage)}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{ number_format($item->infractions_count) }}</td>
                                    <td>{{$item->category->title ?? ''}}</td>
                                    <td><a href="{{route('admin.users.store',['edit',$item->user_id])}}">{{ $item->user->full_name ?? $item->user->username ?? $item->user->phone }}</a></td>
                                    <td>{{number_format($item->amount)}}</td>
                                    <td>{{$item->status_label}}</td>
                                    <td>
                                        <x-admin.edit-table href="{{route('admin.accounts.store',
                                            ['action'=>'edit', 'id' => $item->id])}}"/>
                                        <x-admin.delete-table onclick="deleteItem({{$item->id}})"/>
                                    </td>
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
                    {{ $items->links('admin.components.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function deleteItem(id) {
            Swal.fire({
                title: 'حذف دسته!',
                text: 'آیا از حذف اگهی دارید؟',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'خیر',
                confirmButtonText: 'بله'
            }).then((result) => {
                if (result.value) {
                @this.call('deleteItem', id)
                }
            })
        }
    </script>
@endpush
