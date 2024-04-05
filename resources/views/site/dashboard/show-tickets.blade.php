<section id="main-dashboard" class="flex-box flex-justify-space" style="align-items: normal;">
    <livewire:site.dashboard.sidebar />

    <section id="left-dashboard">
        <div class="box-header-dash-order flex-box flex-justify-space">
            <span>تیکت ها</span>

            <a href="create-ticket.html" class="btn-add-ticket-dashboard">ایجاد تیکت جدید</a>
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
                    <tr>
                        <td>1234565</td>

                        <td> مشکل پرداخت خرید 12213123</td>

                        <td class="color-green">وضعیت باز</td>

                        <td class="color-black"> 2 ساعت قبل</td>

                        <td><a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a></td>
                    </tr>

                    <tr>
                        <td>1234565</td>

                        <td> مشکل پرداخت خرید 12213123</td>

                        <td class="color-yel">در حال برسی</td>

                        <td class="color-black"> 2 ساعت قبل</td>

                        <td><a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a></td>
                    </tr>

                    <tr>
                        <td>1234565</td>

                        <td> مشکل پرداخت خرید 12213123</td>

                        <td class="color-red">بسته</td>

                        <td class="color-black"> 2 ساعت قبل</td>

                        <td><a href="#" class="btn-open-ticket-dashboard">مشاهده تیکت</a></td>
                    </tr>
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
