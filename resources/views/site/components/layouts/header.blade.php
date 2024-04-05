<header wire:ignore.self>
    <section id="box-header">
        <section id="right-header">
            <form class="form-submit-disable lg:block relative w-64">
                <div id="box-search-header" class="input-hover">
                    <label for="q" wire:click="updateSearch()">
                        <img src="{{ asset('site-v2/img/search.svg') }}" id="icon-search-header" alt="">
                    </label>

                    <input class="input-search-header" id="q" type="text"
                        placeholder="جستجو در محصولات فارس گیمر" wire:keydown.enter="updateSearch()"
                        wire:model.lazy="q">
                </div>
            </form>
        </section>

        <section id="left-header">
            <div id="box-icon-notif">
                <div id="icon-notif" class="nav-right-icon open-menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C13.6569 22 15 20.6569 15 19H9C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                        <path d="M5.15837 11.491C5.08489 12.887 5.16936 14.373 3.92213 15.3084C3.34164 15.7438 3 16.427 3 17.1527C3 18.1508 3.7818 19 4.8 19H19.2C20.2182 19 21 18.1508 21 17.1527C21 16.427 20.6584 15.7438 20.0779 15.3084C18.8306 14.373 18.9151 12.887 18.8416 11.491C18.6501 7.85223 15.6438 5 12 5C8.35617 5 5.34988 7.85222 5.15837 11.491Z" fill="#F7F7FA"/>
                        <path d="M10.5 3.125C10.5 3.95343 11.1716 5 12 5C12.8284 5 13.5 3.95343 13.5 3.125C13.5 2.29657 12.8284 2 12 2C11.1716 2 10.5 2.29657 10.5 3.125Z" fill="white"/>
                        <path d="M5.15837 11.491C5.08489 12.887 5.16936 14.373 3.92213 15.3084C3.34164 15.7438 3 16.427 3 17.1527C3 18.1508 3.7818 19 4.8 19H19.2C20.2182 19 21 18.1508 21 17.1527C21 16.427 20.6584 15.7438 20.0779 15.3084C18.8306 14.373 18.9151 12.887 18.8416 11.491C18.6501 7.85223 15.6438 5 12 5C8.35617 5 5.34988 7.85222 5.15837 11.491Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 3.125C10.5 3.95343 11.1716 5 12 5C12.8284 5 13.5 3.95343 13.5 3.125C13.5 2.29657 12.8284 2 12 2C11.1716 2 10.5 2.29657 10.5 3.125Z" stroke="#141B34" stroke-width="1.5"/>
                        <path d="M15 19C15 20.6569 13.6569 22 12 22C10.3431 22 9 20.6569 9 19" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        

                    @if (count($userNotifications) + count($notifications) > 0)
                        <span
                            class="number-notif-cart open-menu">{{ count($userNotifications) + count($notifications) }}</span>
                    @endif
                </div>

                <div id="box-show-notif" class="hide-item over-menu">
                    <div id="box-notif">
                        <div id="header-box-notif">
                            <span>اعلانات</span>

                            <img class="clothe-menu icon-exit-notif" src="{{ asset('site-v2/img/add.svg') }}"
                                alt="">
                        </div>

                        <div class="message-box-notif">
                            <div class="header-message-notif">
                                <div class="item-personal-notif">
                                    <span id="header-one-notif" class="item-notif item-notif-active personal">پیام های
                                        عمومی<span style="color: red;">({{ count($notifications) }})</span></span>
                                </div>

                                @auth
                                    <div class="item-general-notif">
                                        <span id="header-two-notif" class="item-notif general"> پیام های
                                            شخصی <span style="color: red;">({{ count($userNotifications) }})</span></span>
                                    </div>
                                @endauth
                            </div>

                            <div id="message-notif-personal">
                                @foreach ($notifications as $item)
                                    <div class="box-asli-notif">
                                        <div class="box-header-notif">
                                            <span
                                                class="item-clock-box-notif">{{ jalaliDate($item->created_at, 'diffForHumans') }}</span>

                                            <span class="item-date-box-notif" dir="ltr">پشتیبانی</span>
                                        </div>

                                        <div class="box-message-notif">
                                            <span>{{ $item->message }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div id="message-notif-general" class="hide-item">
                                @foreach ($userNotifications as $item)
                                    <div class="box-asli-notif">
                                        <div class="box-header-notif">
                                            <span
                                                class="item-clock-box-notif">{{ jalaliDate($item->created_at, 'diffForHumans') }}</span>

                                            <span class="item-date-box-notif" dir="ltr">پشتیبانی</span>
                                        </div>

                                        <div class="box-message-notif">
                                            <span>{{ $item->note }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="box3-notif">
                            <a href="{{ route("dashboard.notifications") }}"><span>دیدن همه اعلانات</span></a>
                        </div>
                    </div>
                </div>

                <div id="box-notif-clothe" class="exit-menu hide-item"></div>
            </div>

            <a href="{{ route('cart') }}">
                <div class="nav-right-icon cart-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2632 16H8L6 6.5L19.3941 6.5C20.4947 6.5 21.045 6.5 21.3321 6.89507C21.6192 7.29013 21.4998 7.88311 21.261 9.06908C20.4333 13.1808 19.7508 16 15.2632 16Z" fill="white"/>
                        <circle cx="10.5" cy="20.5" r="1.5" fill="white"/>
                        <circle cx="17.5" cy="20.5" r="1.5" fill="white"/>
                        <path d="M8 16H15.2632C19.7508 16 20.4333 13.1808 21.261 9.06908C21.4998 7.88311 21.6192 7.29013 21.3321 6.89507C21.045 6.5 20.4947 6.5 19.3941 6.5L6 6.5" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M8 16L5.37873 3.51493C5.15615 2.62459 4.35618 2 3.43845 2L2.5 2" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M8.88 16H8.46857C7.10522 16 6 17.1513 6 18.5714C6 18.8081 6.1842 19 6.41143 19L17.5 19" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="10.5" cy="20.5" r="1.5" stroke="#141B34" stroke-width="1.5"/>
                        <circle cx="17.5" cy="20.5" r="1.5" stroke="#141B34" stroke-width="1.5"/>
                    </svg>                        

                    @if ($basketCount > 0)
                        <span class="number-notif-cart">{{ $basketCount }}</span>
                    @endif
                </div>
            </a>

            @auth
                <a href="{{ route('dashboard') }}">
                    <div class="nav-right-icon login-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="#141B34" stroke-width="1.5"/>
                        </svg>
                            
                        <span class="text-nav">{{ Auth::user()->name }}</span>
                    </div>
                </a>
            @endauth

            @guest
                <a href="{{ route('auth') }}">
                    <div class="nav-right-icon login-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="#141B34" stroke-width="1.5"/>
                        </svg>
                            
                        <span class="text-nav">ورود / ثبت نام</span>
                    </div>
                </a>
            @endguest
        </section>
    </section>

    <div id="box-header-mobile-asli">
        <section id="box-header-mobile">
            <section id="right-header">
                <img id="nave-menu-item-icon" class="open-menu-mobile" src="{{ asset('site-v2/img/menu.svg') }}"
                    alt="">
            </section>

            <section id="center-header">
                <a href="{{ route('home') }}"><img id="logo-mobile"
                        src="{{ asset('site-v2/img/logo-farsgamer.png') }}" alt="لوگو"></a>
            </section>

            <section id="left-header">
                <div class="nav-right-icon-mobile clothe-menu-mobile">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C13.6569 22 15 20.6569 15 19H9C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                        <path d="M5.15837 11.491C5.08489 12.887 5.16936 14.373 3.92213 15.3084C3.34164 15.7438 3 16.427 3 17.1527C3 18.1508 3.7818 19 4.8 19H19.2C20.2182 19 21 18.1508 21 17.1527C21 16.427 20.6584 15.7438 20.0779 15.3084C18.8306 14.373 18.9151 12.887 18.8416 11.491C18.6501 7.85223 15.6438 5 12 5C8.35617 5 5.34988 7.85222 5.15837 11.491Z" fill="#F7F7FA"/>
                        <path d="M10.5 3.125C10.5 3.95343 11.1716 5 12 5C12.8284 5 13.5 3.95343 13.5 3.125C13.5 2.29657 12.8284 2 12 2C11.1716 2 10.5 2.29657 10.5 3.125Z" fill="white"/>
                        <path d="M5.15837 11.491C5.08489 12.887 5.16936 14.373 3.92213 15.3084C3.34164 15.7438 3 16.427 3 17.1527C3 18.1508 3.7818 19 4.8 19H19.2C20.2182 19 21 18.1508 21 17.1527C21 16.427 20.6584 15.7438 20.0779 15.3084C18.8306 14.373 18.9151 12.887 18.8416 11.491C18.6501 7.85223 15.6438 5 12 5C8.35617 5 5.34988 7.85222 5.15837 11.491Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 3.125C10.5 3.95343 11.1716 5 12 5C12.8284 5 13.5 3.95343 13.5 3.125C13.5 2.29657 12.8284 2 12 2C11.1716 2 10.5 2.29657 10.5 3.125Z" stroke="#141B34" stroke-width="1.5"/>
                        <path d="M15 19C15 20.6569 13.6569 22 12 22C10.3431 22 9 20.6569 9 19" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        

                    @if (count($userNotifications) + count($notifications) > 0)
                        <span
                            class="number-notif-cart-mobile">{{ count($userNotifications) + count($notifications) }}</span>
                    @endif
                </div>

                <div id="notif-mobile">
                    <div id="box-notif-mobile" class="hide-item">
                        <div id="header-box-notif">
                            <span>اعلانات</span>

                            <img class="icon-exit-notif clothe-menu-mobile" src="{{ asset('site-v2/img/add.svg') }}"
                                alt="">
                        </div>

                        <div class="message-box-notif">
                            <div class="header-message-notif">
                                <div class="item-personal-notif personal-mobile">
                                    <span id="header-three-notif" class="item-notif item-notif-active">پیام های عمومی
                                        <span style="color: red;">({{ count($notifications) }})</span>
                                    </span>
                                </div>

                                @auth
                                    <div class="item-general-notif general-mobile">
                                        <span id="header-four-notif" class="item-notif"> پیام های شخصی
                                            <span style="color: red;"> ({{ count($userNotifications) }}) </span></span>
                                    </div>
                                @endauth
                            </div>

                            <div id="message-notif-general-mobile" class="hide-item">
                                @foreach ($userNotifications as $item)
                                    <div class="box-asli-notif">
                                        <div class="box-header-notif">
                                            <span
                                                class="item-clock-box-notif">{{ jalaliDate($item->created_at, 'diffForHumans') }}</span>

                                            <span class="item-date-box-notif" dir="ltr">پشتیبانی</span>
                                        </div>

                                        <div class="box-message-notif">
                                            <span>{{ $item->note }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div id="message-notif-personal-mobile">
                                @foreach ($notifications as $item)
                                    <div class="box-asli-notif">
                                        <div class="box-header-notif">
                                            <span
                                                class="item-clock-box-notif">{{ jalaliDate($item->created_at, 'diffForHumans') }}</span>

                                            <span class="item-date-box-notif" dir="ltr">پشتیبانی</span>
                                        </div>

                                        <div class="box-message-notif">
                                            <span>{{ $item->message }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="box3-notif">
                            <a href="{{ route("dashboard.notifications") }}"><span>دیدن همه اعلانات</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="box2-header-mobile">
            <section id="right-header-mobile">
                <form class="lg:block relative">
                    <div id="box-search-header-mobile" class="input-hover">
                        <label for="q" wire:click="updateSearch()">
                            <img src="{{ asset('site-v2/img/search.svg') }}" id="icon-search-header" alt="">
                        </label>

                        <input class="input-search-header-mobile" id="q" type="search"
                            placeholder="جستجو در محصولات" wire:model.lazy="q" wire:keydown.enter="updateSearch()">
                    </div>
                </form>
            </section>

            <section id="left-header">
                @auth
                    <a href="{{ route('dashboard') }}">
                        <div class="nav-two-left-icon-mobile">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="#141B34" stroke-width="1.5"/>
                            </svg>
                                
                            <span class="text-nav">{{ Auth::user()->name }}</span>
                        </div>
                    </a>
                @endauth

                @guest
                    <a href="{{ route('auth') }}">
                        <div class="nav-two-left-icon-mobile">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="#141B34" stroke-width="1.5"/>
                            </svg>
                                
                            <span class="text-nav">ورود</span>
                        </div>
                    </a>
                @endguest

                <a href="{{ route('cart') }}" class="nav-left-icon-mobile">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.2632 16H8L6 6.5L19.3941 6.5C20.4947 6.5 21.045 6.5 21.3321 6.89507C21.6192 7.29013 21.4998 7.88311 21.261 9.06908C20.4333 13.1808 19.7508 16 15.2632 16Z" fill="white"/>
                            <circle cx="10.5" cy="20.5" r="1.5" fill="white"/>
                            <circle cx="17.5" cy="20.5" r="1.5" fill="white"/>
                            <path d="M8 16H15.2632C19.7508 16 20.4333 13.1808 21.261 9.06908C21.4998 7.88311 21.6192 7.29013 21.3321 6.89507C21.045 6.5 20.4947 6.5 19.3941 6.5L6 6.5" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8 16L5.37873 3.51493C5.15615 2.62459 4.35618 2 3.43845 2L2.5 2" stroke="#141B34" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8.88 16H8.46857C7.10522 16 6 17.1513 6 18.5714C6 18.8081 6.1842 19 6.41143 19L17.5 19" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="10.5" cy="20.5" r="1.5" stroke="#141B34" stroke-width="1.5"/>
                            <circle cx="17.5" cy="20.5" r="1.5" stroke="#141B34" stroke-width="1.5"/>
                        </svg>                            

                        @if ($basketCount > 0)
                            <span class="number-notif-cart-mobile">{{ $basketCount }}</span>
                        @endif
                    </div>
                </a>
            </section>
        </section>
    </div>
</header>
