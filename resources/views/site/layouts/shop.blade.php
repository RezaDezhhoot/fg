<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('site.components.layouts.head2')

<body class="header-and-sidebar-fixed {{ $top_alert ? 'alert-tp' : '' }}">
    <livewire:site.header />
    <livewire:site.sidebar />
    @include('site.components.layouts.top-alert')

    <main id="main">
        @yield('content')
        @include('site.components.layouts.footer')
    </main>
    <script>
        var size = document.getElementById("box-tp-alert");
        document.documentElement.style.setProperty('--sizenotif', size.offsetHeight + 'px');
    </script>
    <style>
        .alert-tp header {
            top: var(--sizenotif) !important;
        }

        .alert-tp {
            padding-top: var(--sizenotif) !important;
        }

        .alert-tp #sidebar-pc {
            top: var(--sizenotif) !important;
        }

        .alert-tp #sidebar-pc .box-logo {
            top: var(--sizenotif) !important;
        }

        .alert-tp #show-box-hever-store {
            top: calc(var(--sizenotif) + 6rem) !important;
        }
    </style>
    <script type="text/javascript">
        ! function() {
            var i = "0d89pV",
                a = window,
                d = document;

            function g() {
                var g = d.createElement("script"),
                    s = "https://www.goftino.com/widget/" + i,
                    l = localStorage.getItem("goftino_" + i);
                g.async = !0, g.src = l ? s + "?o=" + l : s;
                d.getElementsByTagName("head")[0].appendChild(g);
            }
            "complete" === d.readyState ? g() : a.attachEvent ? a.attachEvent("onload", g) : a.addEventListener("load", g, !
                1);
        }();
    </script>
    @include('site.components.layouts.foot2')
    <script src="{{ asset('site-v2/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
