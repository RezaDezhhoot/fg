<div class="w-full mt-[1rem] lg:mt-[0rem] lg:!w-[34rem]">
    <div>
        <a href="{{ route('dashboard') }}"
            class="flex items-center px-[2rem] py-[1rem] bg-white w-max rounded-[1rem] cursor-pointer">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.25 6.5C1.25 3.87665 3.37665 1.75 6 1.75C8.62335 1.75 10.75 3.87665 10.75 6.5C10.75 9.12335 8.62335 11.25 6 11.25C3.37665 11.25 1.25 9.12335 1.25 6.5Z"
                    fill="black" />
                <path
                    d="M1.25 18.5C1.25 15.8766 3.37665 13.75 6 13.75C8.62335 13.75 10.75 15.8766 10.75 18.5C10.75 21.1234 8.62335 23.25 6 23.25C3.37665 23.25 1.25 21.1234 1.25 18.5Z"
                    fill="black" />
                <path
                    d="M13.25 18.5C13.25 15.8766 15.3766 13.75 18 13.75C20.6234 13.75 22.75 15.8766 22.75 18.5C22.75 21.1234 20.6234 23.25 18 23.25C15.3766 23.25 13.25 21.1234 13.25 18.5Z"
                    fill="black" />
                <path
                    d="M13.25 6.5C13.25 3.87665 15.3766 1.75 18 1.75C20.6234 1.75 22.75 3.87665 22.75 6.5C22.75 9.12335 20.6234 11.25 18 11.25C15.3766 11.25 13.25 9.12335 13.25 6.5Z"
                    fill="black" />
            </svg>

            <span class="mr-[0.5rem]">بازگشت به داشبورد</span>
        </a>
    </div>

    <form>
        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $step == 'category' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد آگهی جدید</h3>

                <span class="text-[#0F45FF] font-semibold">1/3</span>
            </div>

            <div>
                <div>
                    <h3>دسته بندی خود را انتخاب نمایید</h3>
                </div>

                <div class="box-radio-form-product w-full grid grid-cols-2 gap-2 my-[1rem]">
                    @foreach($categories as $key => $category)
                        <input class="!rounded-[0.5rem]" value="{{$key}}" label="{{ $category }}" type="radio" name="category" wire:model.defer="category">
                    @endforeach
                        @error('category')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>

                <div class="flex justify-center">
                    <button wire:click="setCategory" type="button" class="input-submit-style !rounded-[0.5rem] !w-[15rem]">مرحله بعد</button>
                </div>
            </div>
        </div>

        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $step == 'basic-info' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد آگهی جدید</h3>

                <span class="text-[#0F45FF] font-semibold">2/3</span>
            </div>

            <div>
                <div>
                    <div>
                        <p>لطفا عکس اصل برای آگهی خود انتخاب کنید</p>

                        <div class="flex justify-center items-center my-[1rem]"
                             x-data="{ isUploading: false, progress: 0 }"
                             x-on:livewire-upload-start="isUploading = true"
                             x-on:livewire-upload-finish="isUploading = false"
                             x-on:livewire-upload-error="isUploading = false"
                             x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <input type="file" accept="image/*" class="upload-input-file-sale hidden" wire:model="image">

                            <div
                                class="upload-click-file-sale w-[12rem] h-[12rem] bg-[#F8F9FB] border border-[#BDBDC7] p-[1rem] rounded-[0.5rem] cursor-pointer flex flex-col justify-center items-center">
                                @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" alt="">
                                @else
                                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.75 23.4375C3.75 15.0406 3.75 10.8422 6.35858 8.23358C8.96716 5.625 13.1656 5.625 21.5625 5.625C29.9594 5.625 34.1578 5.625 36.7664 8.23358C39.375 10.8422 39.375 15.0406 39.375 23.4375C39.375 31.8344 39.375 36.0328 36.7664 38.6414C34.1578 41.25 29.9594 41.25 21.5625 41.25C13.1656 41.25 8.96716 41.25 6.35858 38.6414C3.75 36.0328 3.75 31.8344 3.75 23.4375Z"
                                            fill="#F8F9FB" />
                                        <path
                                            d="M36.7664 38.6402C34.1578 41.2487 29.9594 41.2487 21.5625 41.2487H21.5625C15.2179 41.2487 11.2703 41.2487 8.59435 40.1235C16.7532 30.3505 25.9126 17.6724 39.3701 26.3512C39.3355 32.8427 39.0539 36.3527 36.7664 38.6402Z"
                                            fill="white" />
                                        <path
                                            d="M41.25 12.75C42.0784 12.75 42.75 12.0784 42.75 11.25C42.75 10.4216 42.0784 9.75 41.25 9.75V12.75ZM26.25 9.75C25.4216 9.75 24.75 10.4216 24.75 11.25C24.75 12.0784 25.4216 12.75 26.25 12.75V9.75ZM35.25 3.75C35.25 2.92157 34.5784 2.25 33.75 2.25C32.9216 2.25 32.25 2.92157 32.25 3.75H35.25ZM32.25 18.75C32.25 19.5784 32.9216 20.25 33.75 20.25C34.5784 20.25 35.25 19.5784 35.25 18.75H32.25ZM41.25 9.75H33.75V12.75H41.25V9.75ZM33.75 9.75H26.25V12.75H33.75V9.75ZM32.25 3.75V11.25H35.25V3.75H32.25ZM32.25 11.25V18.75H35.25V11.25H32.25Z"
                                            fill="#141B34" />
                                        <path
                                            d="M21.5625 5.625C13.1656 5.625 8.96716 5.625 6.35858 8.23358C3.75 10.8422 3.75 15.0406 3.75 23.4375C3.75 31.8344 3.75 36.0328 6.35858 38.6414C8.96716 41.25 13.1656 41.25 21.5625 41.25C29.9594 41.25 34.1578 41.25 36.7664 38.6414C39.375 36.0328 39.375 31.8344 39.375 23.4375V22.5"
                                            stroke="#141B34" stroke-width="3" stroke-linecap="round" />
                                        <path d="M9.375 39.375C17.2687 30.4662 26.1397 18.6516 39.375 27.5127"
                                              stroke="#141B34" stroke-width="3" />
                                    </svg>
                                    <span  x-show="!isUploading" class="text-[#808191] mt-[0.5rem] text-center">برای ارسال عکس ضربه بزنید</span>
                                @endif
                                    <span class="text-[#808191] mt-[0.5rem] text-center" x-show="isUploading">
                                        در حال اپلود...
                                    </span>
                            </div>
                        </div>
                        @error('image')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <div class="flex justify-between items-center">
                            <p>عکس برای گالری آگهی خود انتخاب کنید</p>

                            <span class="text-[#3D42DF] text-[14px] font-[700]">{{ sizeof($galleries) }}/5</span>
                        </div>

                        <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            class="grid grid-cols-3 lg:grid-cols-5 gap-2 my-[1rem]">
                            @if(sizeof($galleries) < 5)
                                <input type="file" accept="image/*" class="upload-input-file-sale hidden"  wire:model="gallery">
                                <div
                                    class="w-full p-[0.5rem] upload-click-file-sale bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] cursor-pointer flex flex-col justify-center items-center">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.5 12.5C2.5 8.02166 2.5 5.78249 3.89124 4.39124C5.28249 3 7.52166 3 12 3C16.4783 3 18.7175 3 20.1088 4.39124C21.5 5.78249 21.5 8.02166 21.5 12.5C21.5 16.9783 21.5 19.2175 20.1088 20.6088C18.7175 22 16.4783 22 12 22C7.52166 22 5.28249 22 3.89124 20.6088C2.5 19.2175 2.5 16.9783 2.5 12.5Z"
                                            fill="#F8F9FB" />
                                        <path
                                            d="M20.1088 20.608C18.7175 21.9992 16.4783 21.9992 12 21.9992C8.61624 21.9992 6.51084 21.9992 5.08365 21.3991C9.43502 16.1868 14.32 9.42516 21.4974 14.0538C21.4789 17.516 21.3287 19.388 20.1088 20.608Z"
                                            fill="white" />
                                        <path
                                            d="M22.5 6.75C22.9142 6.75 23.25 6.41421 23.25 6C23.25 5.58579 22.9142 5.25 22.5 5.25V6.75ZM14.5 5.25C14.0858 5.25 13.75 5.58579 13.75 6C13.75 6.41421 14.0858 6.75 14.5 6.75V5.25ZM19.25 2C19.25 1.58579 18.9142 1.25 18.5 1.25C18.0858 1.25 17.75 1.58579 17.75 2H19.25ZM17.75 10C17.75 10.4142 18.0858 10.75 18.5 10.75C18.9142 10.75 19.25 10.4142 19.25 10H17.75ZM22.5 5.25H18.5V6.75H22.5V5.25ZM18.5 5.25H14.5V6.75H18.5V5.25ZM17.75 2V6H19.25V2H17.75ZM17.75 6V10H19.25V6H17.75Z"
                                            fill="#141B34" />
                                        <path
                                            d="M12 3C7.52166 3 5.28249 3 3.89124 4.39124C2.5 5.78249 2.5 8.02166 2.5 12.5C2.5 16.9783 2.5 19.2175 3.89124 20.6088C5.28249 22 7.52166 22 12 22C16.4783 22 18.7175 22 20.1088 20.6088C21.5 19.2175 21.5 16.9783 21.5 12.5V12"
                                            stroke="#141B34" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M5.5 21C9.70998 16.2487 14.4412 9.9475 21.5 14.6734" stroke="#141B34"
                                              stroke-width="1.5" />
                                    </svg>

                                    <span class="mt-[0.5rem] text-center text-[10px] text-[#808191]"  x-show="! isUploading">افزودن عکس</span>
                                    <span class="mt-[0.5rem] text-center text-[10px] text-[#808191]" x-show="isUploading">
                                        در حال اپلود...
                                    </span>
                                </div>
                            @endif

                            @foreach($galleries as $key => $item)
                                <div wire:click="removeGallery({{$key}})"
                                    class="w-full p-[0.25rem] bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] cursor-pointer flex flex-col justify-center items-center">
                                    <img class="w-full h-full rounded-[0.5rem]"
                                         src="{{ $item->temporaryUrl() }}" alt="">

                                    <svg class="absolute" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                            stroke="#FF3838" stroke-width="1.5" stroke-linecap="round" />
                                        <path
                                            d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5"
                                            stroke="#FF3838" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M9.5 16.5L9.5 10.5" stroke="#FF3838" stroke-width="1.5"
                                              stroke-linecap="round" />
                                        <path d="M14.5 16.5L14.5 10.5" stroke="#FF3838" stroke-width="1.5"
                                              stroke-linecap="round" />
                                    </svg>
                                </div>
                            @endforeach
                        </div>
                        @error('galleries')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mt-[1rem]">
                        <label for="name">لطفا برای آگهی خود اسم انتخاب کنید</label>

                        <input type="text" id="name"
                            class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                            placeholder="لطفا اسم آگهی خود را وارد نمایید" wire:model.defer="title">
                        @error('title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mt-[1rem]">
                        <label for="price">لطفا مبلغ مورد نظر خود را برای آگهی انتخاب کنید</label>

                        <div class="relative flex items-center w-full">
                            <input type="number" id="price"
                                class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem] pl-[5rem]"
                                placeholder="مبلغ  مورد نظر خود را وارد نمایید" wire:model.defer="amount">

                            <div
                                class="absolute left-[1rem] !border-r border-solid  !border-[#808191] pr-[1rem] text-[#374151] text-[14px]">
                                <span>تومان</span>
                            </div>
                        </div>
                        @error('amount')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mt-[1rem]">
                        <label class="flex items-center space-x-3">
                            <input id="check-box-safe-transition" type="checkbox"
                                class="custom-checkbox appearance-none" wire:model="safe">

                            <span class="text-gray-700 pr-[0.5rem] cursor-pointer">استفاده از معامله امن</span>
                        </label>

                        <div wire:ignore id="box-safe-transition-create"
                            class="bg-[#F8F9FB] rounded-[1rem] p-[1rem] mt-[1rem] hidden">
                            <p class="text-center w-full font-[700] text-[18px] text-[#FF3838]">لطفا با دقت مطالعه کنید
                            </p>

                            <p class="text-justify mt-[0.5rem]"> سلام رفیق، میدونم که حالت عالیه، با کمکت تا الان
                                4,029,000 تومان برای خیریه جمع آوری شده میتونی پنج شنبه هر هفته جزئیات کمک های جمع آوری
                                شده برای خیریه رو از طریق اینستاگرام مشاهده کنی اینستاگرام ما : FarsGamerCom ممنون از
                                انتخاب و اعتمادت - فارس گیمر نیاز هر گیمر - FarsGamer.com</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-[1.5rem]">
                    <button wire:click="$set('step','category')" type="button"
                        class="input-submit-style-border !rounded-[0.5rem] !w-[15rem] ml-[0.5rem]">مرحله
                        قبل</button>

                    <button wire:click="setBasicInfo" type="button" class="input-submit-style !rounded-[0.5rem] !w-[15rem]">مرحله بعد</button>
                </div>
            </div>
        </div>

        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $step == 'extra-info' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">ایجاد آگهی جدید</h3>

                <span class="text-[#0F45FF] font-semibold">3/3</span>
            </div>

            <div>
                <div>
                    <div>
                        <p>لطفا متن مورد نظر خود را برای آگهی انتخاب کنید</p>

                        <div>
                            <textarea
                                class="input-hover w-full bg-[#F8F9FB] border border-[#BDBDC7] rounded-[0.5rem] p-[1rem] mt-[0.5rem] h-[12rem]"
                                placeholder="لطفا متن موضوع  خود را وارد نمایید" wire:model.defer="description"></textarea>
                        </div>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mt-[1rem]">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="custom-checkbox custom-checkbox-black appearance-none" wire:model="dont_show_phone">

                            <span class="text-gray-700 pr-[0.5rem] cursor-pointer">شماره همراه مرا در آگهی نمایش
                                نده</span>
                        </label>
                    </div>

                    @if( $dont_show_phone && $add_other_social)
                        <div class="mt-[1rem]">
                            <div>
                                <h3>راه ارتباطی جدید را انتخاب نمیایید</h3>
                            </div>

                            <div class="box-radio-form-product w-full grid grid-cols-2 lg:grid-cols-4 gap-2 my-[1rem]">
                                <input class="!rounded-[0.5rem]" label="ایتا"  type="radio" value="ایتا"  name="extraSocial" wire:model="extraSocial">

                                <input class="!rounded-[0.5rem]" label="تلگرام" type="radio" value="تلگرام"  name="extraSocial" wire:model="extraSocial">

                                <input class="!rounded-[0.5rem]" label="ایسنتا" type="radio" value="ایسنتا"  name="extraSocial" wire:model="extraSocial">

                                <input class="!rounded-[0.5rem]" label="واتساپ" value="واتساپ" type="radio" name="extraSocial" wire:model="extraSocial">
                            </div>
                            @error('extraSocial')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    @endif

                    <div class="mt-[1rem]">
                        <label for="price">تلگرام</label>

                        <div class="flex items-center w-full">
                            <input type="text" id="price"
                                class="input-hover w-full bg-[#F8F9FB] text-left border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                                placeholder="@" wire:model.defer="telegram_id">
                        </div>
                    </div>

                    @if($extraSocial)
                        <div class="mt-[1rem]">
                            <label for="price">{{ $extraSocial }}</label>

                            <div class="flex items-center w-full">
                                <input type="text" id="other_social_id"
                                       class="input-hover w-full bg-[#F8F9FB] text-left border border-[#BDBDC7] rounded-[0.5rem] p-[1rem]"
                                       placeholder="@" wire:model.defer="other_social_id">
                            </div>
                            @error('other_social_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    @endif
                </div>

                    <div class="flex flex-col justify-center items-center mt-[1.5rem]">
                        @if( $dont_show_phone && !$add_other_social)
                        <button wire:click="$set('add_other_social','1')" type="button"
                                class="input-submit-style-border mb-[1rem] flex justify-center items-center !rounded-[0.5rem] !w-[70%]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4L12 20M20 12L4 12" stroke="#3D42DF" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mr-[0.5rem]">افزودن راه ارتباطی دیگر</span>
                        </button>
                        @endif
                        <button wire:click="setExtraInfo" type="button" class="input-submit-style !rounded-[0.5rem] !w-[70%]">ارسال</button>
                    </div>

            </div>
        </div>

        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $step == 'accept-law' ? '' : 'hidden' }}">
            <div class="flex justify-between items-center border-b border-solid pb-[1rem] mb-[1rem] border-[#BDBDC7]">
                <h3 class="font-semibold">لطفا با دقت مطالعه کنید</h3>

                <span class="text-[#0F45FF] font-semibold">3/3</span>
            </div>

            <div>
                <div>
                    <div class="min-h-[15rem] text-justify">
                        <p> سلام رفیق، میدونم که حالت عالیه، با کمکت تا الان 4,029,000 تومان برای خیریه جمع آوری شده
                            میتونی پنج شنبه هر هفته جزئیات کمک های جمع آوری شده برای خیریه رو از طریق اینستاگرام مشاهده
                            کنی اینستاگرام ما : FarsGamerCom ممنون از انتخاب و اعتمادت - فارس گیمر نیاز هر گیمر -
                            FarsGamer.com</p>
                    </div>

                    <div class="mt-[1rem]">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="custom-checkbox custom-checkbox-black appearance-none" wire:model.defer="acceptLaw">

                            <span class="text-gray-700 pr-[0.5rem] cursor-pointer">متن بالا را مطالعه کردم و متوجه شدم</span>
                        </label>
                    </div>
                    @error('acceptLaw')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex flex-col justify-center items-center mt-[1.5rem]">
                    <button wire:click="submit" type="button" class="input-submit-style !rounded-[0.5rem] !w-[70%]">متوجه شدم</button>
                </div>
            </div>
        </div>

        <div class="mt-[1rem] bg-white rounded-[1rem] p-[2rem] box-page-create-ticket {{ $step == 'finish' ? '' : 'hidden' }}">
            <div>
                <div>
                    <div class="my-[1rm] flex justify-center items-center">
                        <img src="https://farsgamer.com/media/667bd6266d7d9.png" alt="">
                    </div>

                    <div class="flex justify-center items-center mt-[1rem] text-center">
                        <p>لطفا تا زمان تایید آگهی شما<br>
                            صبور باشید  نتیجه آگهی شما از طریق<br>
                        پیامک به شما اعلام خواهد شد</p>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-center mt-[1.5rem]">
                    <button wire:click="finish" type="button" class="input-submit-style !rounded-[0.5rem] !w-[70%]">متوجه شدم</button>
                </div>
            </div>
        </div>
    </form>
</div>
