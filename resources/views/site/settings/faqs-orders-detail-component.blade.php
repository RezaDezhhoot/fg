@if ($table === false)
    <section id="main-faqs" class="main-style-page flex-box flex-justify-space flex-aling-auto">
        <div class="right-faqs">
            <div class="message-right-faqs">
                <form id="form-faqs">
                    <div class="header-message-right-faqs">
                        <span>پیگیری سفارش</span>
                    </div>

                    <div>
                        <label for="number-order-faqs">کد سفارش :</label>

                        <input class="input-style input-hover" name="tracking-code" type="text" id="number-order-faqs"
                            placeholder="کد سفارش" wire:model="code" wire:keydown.enter="showOrder()">
                    </div>

                    <span id="errore-number-prudect-faqs" class="warning-form-faqs flex-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.5099 5.85L13.5699 2.42C12.5999 1.86 11.3999 1.86 10.4199 2.42L4.48992 5.85C3.51992 6.41 2.91992 7.45 2.91992 8.58V15.42C2.91992 16.54 3.51992 17.58 4.48992 18.15L10.4299 21.58C11.3999 22.14 12.5999 22.14 13.5799 21.58L19.5199 18.15C20.4899 17.59 21.0899 16.55 21.0899 15.42V8.58C21.0799 7.45 20.4799 6.42 19.5099 5.85ZM11.2499 7.75C11.2499 7.34 11.5899 7 11.9999 7C12.4099 7 12.7499 7.34 12.7499 7.75V13C12.7499 13.41 12.4099 13.75 11.9999 13.75C11.5899 13.75 11.2499 13.41 11.2499 13V7.75ZM12.9199 16.63C12.8699 16.75 12.7999 16.86 12.7099 16.96C12.5199 17.15 12.2699 17.25 11.9999 17.25C11.8699 17.25 11.7399 17.22 11.6199 17.17C11.4899 17.12 11.3899 17.05 11.2899 16.96C11.1999 16.86 11.1299 16.75 11.0699 16.63C11.0199 16.51 10.9999 16.38 10.9999 16.25C10.9999 15.99 11.0999 15.73 11.2899 15.54C11.3899 15.45 11.4899 15.38 11.6199 15.33C11.9899 15.17 12.4299 15.26 12.7099 15.54C12.7999 15.64 12.8699 15.74 12.9199 15.87C12.9699 15.99 12.9999 16.12 12.9999 16.25C12.9999 16.38 12.9699 16.51 12.9199 16.63Z" fill="#F34C60"/>
						</svg>


                        <span>لطفا کد سفارش را بدون <span style='color:blue'>FAG</span> وارد نمایید</span>
                    </span>

                    <div>
                        <label for="number-phone-faqs">شماره همراه :</label>

                        <input dir="ltr" class="input-style input-hover" name="phone" type="text"
                            id="number-phone-faqs" wire:model="phoneNumber" wire:keydown.enter="showOrder()"
                            placeholder="09*********">
                    </div>

                    <span id="errore-number-faqs" class="warning-form-faqs flex-box hide-item">
                        <img src="img/warning-2.svg" alt="">

                        <span>شماره همراه نادرست می باشد</span>
                    </span>

                    <br>

                    <div class="flex">
                        @if ($alert)
                            <i id="search-order-alert"></i>
                            <p class="text-danger-alert">{{ $alert }}</p>
                        @endif
                    </div>

                    <div>
                        <button id="form-faqs-btn" type="button" wire:click="showOrder"
                            class="input-submit-style">{{ $search }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="left-faqs">
            <div class="box-img-left-faqs">
                <div class="bac-left-faqs"></div>

                <img class="img0-left-faqs" src="{{ asset('site-v2/img/img-faqs/0.png') }}" alt="">

                <img class="img1-left-faqs" src="{{ asset('site-v2/img/img-faqs/1.png') }}" alt="">

                <img class="img2-left-faqs" src="{{ asset('site-v2/img/img-faqs/2.png') }}" alt="">

                <img class="img3-left-faqs" src="{{ asset('site-v2/img/img-faqs/3.png') }}" alt="">

                <div class="box-text-left-faqs flex-box flex-column flex-justify-space height-max">
                    <img class="img5-left-faqs" src="{{ asset('site-v2/img/img-faqs/5.png') }}" alt="">

                    <img class="img4-left-faqs" src="{{ asset('site-v2/img/img-faqs/4.png') }}" alt="">

                    <img class="img6-left-faqs" src="{{ asset('site-v2/img/img-faqs/6.png') }}" alt="">
                </div>
            </div>

            <div class="box-img-left-faqs-mobile">
                <div class="bac-left-faqs-mo flex-box">
                    <img class="img0-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/1m.png') }}"
                        alt="">
                    <img class="img1-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/2m.png') }}"
                        alt="">
                    <img class="img2-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/3m.png') }}"
                        alt="">
                    <img class="img3-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/4m.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="main-style-page main-style-article" style="margin-top: 2rem">
        <p>
            در صورتی که نیاز به پشتیبانی دارید از طریق کانال های ارتباطی زیر اقدام کنید :
            <br>
            تیکت پشتیبانی 24 ساعته ( پیشنهادی ) :
            همه روزه حتی روز های تعطیل از طریق لینک زیر می توانید درخواست خود را ثبت کنید.
            <br>
            <a class="text-primary" href="https://farsgamer.com/dashboard/tickets/create">https://farsgamer.com/dashboard/tickets/create</a>
            <br>
            چت آنلاین :
            7 روز هفته از ساعت 15 الی 18
            <br>
            تماس تلفنی ( در حال حاضر غیر فعال است ) :
            7 روز هفته از ساعت 12:00 الی 21:00
            <span>91300908-021</span>
            <br>
            شعبه حضوری :
            7 روز هفته از ساعت 12:00 الی 21:00
            شعبه اول : تهران - مجتمع تجاری اپال - طبقه هفتم - پلاک 743 - فارس گیمر
            شعبه دوم : بجنورد - تقاطع دستپاک و برنجی - جنب دستپاک 18 - ساختمان یوتب - طبقه 5 - فارس گیمر
            <br>
        </p>
    </section>
@endif

@if ($table === true)
    <section id="main-faqs" class="main-style-page flex-box flex-justify-space flex-aling-auto">
        <div class="right-faqs-answer">
            <div class="box-faqs-answer">
                @if (count($userNotifications) > 0)
                    <div class="notif-header-faqs-answer flex-box">
                        <img src="img/sms-red.svg" alt="">

                        <div>
                            <span>شما</span>

                            <span class="color-red">{{ count($userNotifications) }} پیام جدید</span>

                            <span>از طرف فارس گیمر دارید </span>

                            <a href="{{ route('dashboard.notifications') }}" class="color-blue">وارد پنل</a>

                            <span>خود شوید</span>
                        </div>
                    </div>
                @endif

                <div class="header-faqs-answer flex-box">
                    <a href="#" onclick="location.reload()">
                        <img src="{{ asset('site-v2/img/arrow-right.svg') }}" alt="">
                    </a>

                    <span>زمان باقی مانده</span>
                </div>

                <div>
                    <div class="width-max">
                        <div class="number-time-detalist-pay flex-box color-blue">
                            <span id="time-time-detalist-pay"
                                data-countdown="{{ $singleOrder->delivery_time }}"></span>
                        </div>
                    </div>
                </div>

                <div class="date-faqs-answer">
                    <div class="item-detalist-user-pay flex-box flex-justify-space">
                        <span>کد سفارش : </span>

                        <span dir="ltr">FAG-{{ $code }}</span>
                    </div>

                    <div class="item-detalist-user-pay flex-box flex-justify-space">
                        <span>تاریخ :</span>

                        <span>{{ jalaliDate($singleOrder->created_at, '%d %B %Y') }}</span>
                    </div>
                </div>

                <div>
                    <div class="flex-box">
                        @foreach ($orders as $item)
                            <div class="item-more-img-detalist-product">
                                <img src="{{ asset($item->product->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="complete-faqs-answer">
                    <img src="{{ asset('site-v2/img/tik.svg') }}" alt="">

                    <span>{{ $item->status_label }}</span>
                </div>
            </div>
        </div>

        <div class="left-faqs">
            <div class="box-img-left-faqs">
                <div class="bac-left-faqs"></div>

                <img class="img0-left-faqs" src="{{ asset('site-v2/img/img-faqs/0.png') }}" alt="">

                <img class="img1-left-faqs" src="{{ asset('site-v2/img/img-faqs/1.png') }}" alt="">

                <img class="img2-left-faqs" src="{{ asset('site-v2/img/img-faqs/2.png') }}" alt="">

                <img class="img3-left-faqs" src="{{ asset('site-v2/img/img-faqs/3.png') }}" alt="">

                <div class="box-text-left-faqs flex-box flex-column flex-justify-space height-max">
                    <img class="img5-left-faqs" src="{{ asset('site-v2/img/img-faqs/5.png') }}" alt="">

                    <img class="img4-left-faqs" src="{{ asset('site-v2/img/img-faqs/4.png') }}" alt="">

                    <img class="img6-left-faqs" src="{{ asset('site-v2/img/img-faqs/6.png') }}" alt="">
                </div>
            </div>

            <div class="box-img-left-faqs-mobile">
                <div class="bac-left-faqs-mo flex-box">
                    <img class="img0-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/1m.png') }}"
                        alt="">
                    <img class="img1-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/2m.png') }}"
                        alt="">
                    <img class="img2-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/3m.png') }}"
                        alt="">
                    <img class="img3-left-faqs-mo" src="{{ asset('site-v2/img/img-faqs-mobile/4m.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>
@endif

@if ($table === true)
    <div class="relative grid gap-4 overflow-hidden bg-white rounded-2xl xl:grid-cols-12 xl:gap-8 xl:bg-transparent">
        <div
            class="xl:col-start-1 xl:col-end-9 2xl:col-end-10 xl:row-span-full overflow-hidden xl:bg-white xl:rounded-2xl">
            <div class="p-4 lg:p-6 bg-white rounded-2xl">
                <h1 class="font-semibold text-lg mb-4">پیگیری سفارش</h1>
                <ol class="grid gap-4">
                    @foreach ($orders as $item)
                        <li class="odd:bg-gray-50 p-4 rounded-2xl border border-gray-100 font-medium">
                            <a class="flex gap-4 items-center">
                                <img class="rounded-xl w-24" src="{{ asset($item->product->image) }}">
                                <h3>{{ $item->product->title }}</h3>
                            </a>
                            <p class="mt-4 text-sm text-red-400">{{ $item->status_label }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        <div
            class="border-t border-gray-200 pt-4 xl:border-none xl:pt-0 xl:col-start-9 xl:col-end-13 2xl:col-start-10 xl:row-span-full xl:bg-white xl:rounded-2xl">
            <div class="p-4 rounded-2xl lg:p-6 bg-white">

                <div class="bg-gray-50 text-primary border border-primary rounded-2xl text-center" wire:ignore>
                    <p class="px-3 py-2">زمان تحویل</p>
                    <p class="px-3 py-2 font-medium border-t border-primary text-2xl"
                        data-countdown="{{ $singleOrder->delivery_time }}"></p>
                </div>

                <ul class="my-6 space-y-2 text-base">
                    <li class="flex items-center justify-between">
                        <p class="text-gray-500 font-semibold">شماره سفارش</p>
                        <p class="dir-ltr font-semibold"><span class="text-gray2-700"></span><span
                                class="font-isans-ed select-all">FAG-{{ $code }}</span></p>
                    </li>
                    <li class="flex items-center justify-between">
                        <p class="text-gray-500 font-semibold">تاریخ</p>
                        <p class="font-semibold">{{ jalaliDate($singleOrder->created_at, '%d %B %Y') }}</p>

                    </li>
                </ul>
                @if (count($userNotifications) > 0)
                    <p class="text-red text-sm text-center">شما {{ count($userNotifications) }} پیام از پشتیبانی دارید
                    </p>
                    <a href="{{ route('dashboard.notifications') }}"
                        class="btn btn-primary w-full h-12.5 mt-2 text-lg font-semibold">مشاهده پیام</a>
                @endif
            </div>
        </div>
    </div>
@endif



@push('scripts')
    <script>
        window.livewire.on('showOrder', () => {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('%H:%M:%S'));
                });
            });
        });
    </script>
@endpush
