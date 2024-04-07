<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('site.components.layouts.head-v2')
    <script src="https://cdn.tailwindcss.com"></script>

<body class="header-and-sidebar-fixed {{ $top_alert ? 'alert-tp' : '' }}">
    <main id="main-create-tickets" class="bg-[#F7F7FA] !p-[2rem]">
        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket">
            <div class="w-full mt-[1rem] lg:mt-[0rem] lg:!w-[34rem]">
                <div class="p-[2rem] flex justify-center items-center">
                    <img src="https://farsgamer.com/media/66115fe0789d3.png" alt="">
                </div>

                <div>
                    <p class="text-center">لطفا تا زمان پاسخ پشتیبانی صبور باشید
                        نتیجه تیکت از طریق
                        پیامک به شما اعلام خواهد شد</p>
                </div>

                <div class="mt-[1rem] flex justify-center items-center">
                    <a href="{{ route('dashboard.tickets') }}" wire:click="submitTicket"
                        class="input-submit-style-t !rounded-[0.5rem] !min-h-[2.5rem] justify-center items-center !w-[50%]">متوجه شدم</a>
                </div>
            </div>
        </div>
    </main>
    @include('site.components.layouts.foot')
    <script src="{{ asset('site-v2/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
