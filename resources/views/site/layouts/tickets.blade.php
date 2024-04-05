<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('site.components.layouts.head-v2')
@style
    <script src="https://cdn.tailwindcss.com"></script>
@endstyle

<body class="header-and-sidebar-fixed {{ $top_alert ? 'alert-tp' : '' }}">
    <livewire:site.header2 />
    @include('site.components.layouts.top-alert')

    <main id="main-create-tickets" class="bg-[#F7F7FA] !p-[2rem]">
        @yield('content')
    </main>

    @include('site.components.layouts.foot')
    <script src="{{ asset('site-v2/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
