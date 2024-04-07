@include('site.components.layouts.head')

<main>
    <section class="h-screen flex justify-center items-center p-6 rounded-2xl lg:p-8" style="background:#EDFDFC">
        <div class="text-center w-full">
            <h1 class="text-2xl font-semibold sm:text-4xl"></h1>
            <h2 class="text-lg font-medium sm:text-xl"> <b>کاربر گرامی </b><br>  شما در حال حاضر یک درخواست پشتیبانی فعال دارید و ایجاد درخواست جدید تا بسته شدن درخواست قبلی امکان پذیر نیست لطفا منتظر پاسخ تیم پشتیبانی باشید در صورت بروزرسانی وضعیت درخواست از طریق پیامک  به شما اطلاع رسانی خواهد شد </h2>
            <a class="btn btn-primary h-12 mt-8" href="{{route('dashboard.tickets')}}">
                <i class="icon-home"></i>
                <span>بازگشت به درخواست ها</span>
            </a>
        </div>
    </section>
</main>

@include('site.components.layouts.foot')
