<section id="main-dashboard" class="flex-box flex-justify-space" style="align-items: normal;">
    <livewire:site.dashboard.sidebar />

    <section id="left-dashboard">
        <div class="box-header-dash-order flex-box flex-justify-space">
            <span>درخواست ها</span>

            <a href="{{ route('dashboard.tickets.show',['create']) }}" class="btn-add-ticket-dashboard">ایجاد درخواست جدید</a>
        </div>

        <div class="box-tickets hide-item-pc">
            <table class="table-tickets-dashboard">
                <thead>
                <tr>
                    <th style="width: 10%;text-align: center">شماره درخواست</th>

                    <th style="width: 60%;text-align: center">موضوع درخواست</th>

                    <th style="width: 10%;text-align: center">وضعیت درخواست</th>

                    <th style="width: 10%;text-align: center">آخرین بروز رسانی</th>
                </tr>
                </thead>

                <tbody>
                @foreach($items as $ticket)
                    <tr>
                        <td style="width: 10%;text-align: center">{{ $ticket->id }}</td>

                        <td style="width: 60%"> {{ $ticket->data['formSubject'] ?? $ticket->subject->title  }} </td>

                        <td style="width: 10%;text-align: center" class="color-{{ $ticket->status == \App\Models\Ticket::ACTIVE ? 'green' : ( $ticket->status == \App\Models\Ticket::PENDING ? 'yel' : 'red' )  }}">{{ $ticket->status_label }}</td>

                        <td style="width: 10%;text-align: center" class="color-black">{{ $ticket->created_at->diffForHumans() }}</td>

                        <td style="width: 10%;text-align: center"><a href="{{ route('dashboard.tickets.edit',$ticket->id) }}" class="btn-open-ticket-dashboard">مشاهده درخواست</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-tickets-mobile hide-item-mobile">
            @foreach($items as $ticket)
                <div class="box-item-ticket-dashbord-m">
                    <div class="header">
                        <div>
                            <span class="title">شماره درخواست</span>

                            <span>{{ $ticket->id }}</span>
                        </div>

                        <div>
                            <span> {{ $ticket->created_at->diffForHumans() }}</span>
                        </div>
                    </div>

                    <div class="title">
                        <span class="title">موضوع</span>

                        <span> {{ $ticket->data['formSubject'] ?? $ticket->subject->title  }} </span>
                    </div>

                    <div class="status">
                        <span class="color-{{ $ticket->status == \App\Models\Ticket::ACTIVE ? 'green' : ( $ticket->status == \App\Models\Ticket::PENDING ? 'yel' : 'red' )  }}">{{ $ticket->status_label }}</span>
                    </div>

                    <div class="btn">
                        <a href="{{ route('dashboard.tickets.edit',$ticket->id) }}" class="btn-open-ticket-dashboard">مشاهده درخواست</a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
</section>
