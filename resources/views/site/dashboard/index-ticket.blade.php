<section id="main-dashboard" class="flex-box flex-justify-space" style="align-items: normal;">
    <livewire:site.dashboard.sidebar />

    <section id="left-dashboard">
        <div class="box-header-dash-order flex-box flex-justify-space">
            <span>تیکت ها</span>

            <a href="{{ route('dashboard.tickets.show',['create']) }}" class="btn-add-ticket-dashboard">ایجاد تیکت جدید</a>
        </div>

        <div class="box-tickets hide-item-pc">
            <table class="table-tickets-dashboard">
                <thead>
                <tr>
                    <th>شماره تیکت</th>

                    <th>موضوع تیکت</th>

                    <th>وضعیت تیکت</th>

                    <th>آخرین بروز رسانی</th>
                </tr>
                </thead>

                <tbody>
                @foreach($items as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>

                        <td> {{ $ticket->data['formSubject'] ?? $ticket->subject->title  }} </td>

                        <td class="color-{{ $ticket->status == \App\Models\Ticket::ACTIVE ? 'green' : ( $ticket->status == \App\Models\Ticket::PENDING ? 'yel' : 'red' )  }}">وضعیت {{ $ticket->status_label }}</td>

                        <td class="color-black">{{ $ticket->created_at->diffForHumans() }}</td>

                        <td><a href="{{ route('dashboard.tickets.edit',$ticket->id) }}" class="btn-open-ticket-dashboard">مشاهده تیکت</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-tickets-mobile hide-item-mobile">
            <div class="box-item-ticket-dashbord-m">
                <div class="header">
                    <div>
                        <span class="title">شماره تیکت</span>

                        <span>12312423</span>
                    </div>

                    <div>
                        <span> 2 ساعت قبل</span>
                    </div>
                </div>

                <div class="title">
                    <span class="title">موضوع</span>

                    <span> مشکل پرداخت خرید 12213123</span>
                </div>

                <div class="status">
                    <span class="color-green">وضعیت باز</span>
                </div>

                <div class="btn">
                    <a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a>
                </div>
            </div>

            <div class="box-item-ticket-dashbord-m">
                <div class="header">
                    <div>
                        <span class="title">شماره تیکت</span>

                        <span>12312423</span>
                    </div>

                    <div>
                        <span> 2 ساعت قبل</span>
                    </div>
                </div>

                <div class="title">
                    <span class="title">موضوع</span>

                    <span> مشکل پرداخت خرید 12213123</span>
                </div>

                <div class="status">
                    <span class="color-yel">وضعیت در انتظار پاسخ</span>
                </div>

                <div class="btn">
                    <a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a>
                </div>
            </div>

            <div class="box-item-ticket-dashbord-m">
                <div class="header">
                    <div>
                        <span class="title">شماره تیکت</span>

                        <span>12312423</span>
                    </div>

                    <div>
                        <span> 2 ساعت قبل</span>
                    </div>
                </div>

                <div class="title">
                    <span class="title">موضوع</span>

                    <span> مشکل پرداخت خرید 12213123</span>
                </div>

                <div class="status">
                    <span class="color-red">وضعیت لسته</span>
                </div>

                <div class="btn">
                    <a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a>
                </div>
            </div>
        </div>
    </section>
</section>
