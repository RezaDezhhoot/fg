<section id="main-search">
    <div id="right-search">
        <div class="item-header-main-search flex-box flex-justify-space">
            <div class="text-filter-search">
                <span>فیلتر ها</span>
            </div>

{{--            <button class="btn-delete-filter-search">--}}
{{--                <span>حذف فیلتر ها</span>--}}
{{--            </button>--}}
        </div>

        <div class="item-message-main-search">
            <div>
{{--                <div class="item-header-mobile open-box-category">--}}
{{--                    <span>فیلتر ها</span>--}}

{{--                    <div class="flex justify-center align-items-center">--}}
{{--                        <button class="btn-delete-filter-search-mo ml-2">حذف فیلتر</button>--}}

{{--                        <svg class="icon-header-store-mbile icon-category-header-store" width="24" height="24"--}}
{{--                            viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M13.098 6.75012L8.9415 11.6401C8.45063 12.2176 7.64738 12.2176 7.1565 11.6401L3 6.75012"--}}
{{--                                stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"--}}
{{--                                stroke-linejoin="round" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="hide-item message-header-sore px-4 message-category-store-mobile">--}}
{{--                    <form>--}}
{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio1" name="radioGroup">--}}
{{--                            <label for="radio1">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio2" name="radioGroup">--}}
{{--                            <label for="radio2">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio3" name="radioGroup">--}}
{{--                            <label for="radio3">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>

            <div>
{{--                <div class="item-header-mobile open-box-category">--}}
{{--                    <span>فیلتر ها</span>--}}

{{--                    <div>--}}
{{--                        <svg class="icon-header-store-mbile icon-category-header-store" width="24" height="24"--}}
{{--                            viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M13.098 6.75012L8.9415 11.6401C8.45063 12.2176 7.64738 12.2176 7.1565 11.6401L3 6.75012"--}}
{{--                                stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"--}}
{{--                                stroke-linejoin="round" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="hide-item message-header-sore message-category-store-mobile">--}}
{{--                    <form>--}}
{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio4" name="radioGroup1">--}}
{{--                            <label for="radio4">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio5" name="radioGroup1">--}}
{{--                            <label for="radio5">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div class="custom-radio">--}}
{{--                            <input type="radio" id="radio6" name="radioGroup1">--}}
{{--                            <label for="radio6">--}}
{{--                                <div class="radio-custom"></div>--}}
{{--                                <span>فیلترها</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>

            <div>
                <div class="item-header-mobile open-box-category">
                    <span>قیمت</span>

                    <div>
                        <svg class="icon-header-store-mbile icon-category-header-store" width="24" height="24"
                            viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.098 6.75012L8.9415 11.6401C8.45063 12.2176 7.64738 12.2176 7.1565 11.6401L3 6.75012"
                                stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <div class="message-header-sore message-category-store-mobile" >
                    <div class="box-price-input" wire:ignore>
                        <div class="price-input">
                            <span class="txt2-box-price">تا</span>
                            <h2 class="input-min massage-box-price" id="rangeMaxValue1">{{ $min }}</h2>
                            <span class="txt1-box-price">تومان</span>
                        </div>

                        <div class="price-input">
                            <span class="txt2-box-price">از</span>
                            <h2 class="input-max massage-box-price" id="rangeMinValue1">{{ $max }}</h2>
                            <span class="txt1-box-price">تومان</span>
                        </div>
                    </div>

                    <div class="range-slider" wire:ignore>
                        <input type="range" id="rangeMin1" min="0" max="{{ $max }}" value="{{ $min }}"
                            step="10" wire:model="min">
                        <input type="range" id="rangeMax1" min="0" max="{{ $max }}" value="{{ $max }}"
                            step="10" wire:model="max">
                        <div class="track"></div>
                        <div class="range-track" id="rangeTrack1"></div>
                    </div>
                </div>
            </div>

            <div class="flex-box flex-justify-space margin-vetical-1">
                <div>
                    <span>کالاهای موجود</span>
                </div>

                <div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox" value="1" class="checkbox" wire:model="level">

                        <label for="checkbox" class="checkbox-label">
                            <span class="checkbox-icon unchecked">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.07266 1L1.84766 9.5M9.07266 9.5L1.84766 1" stroke="black"
                                        stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </span>

                            <span class="checkbox-icon checked">
                                <svg width="11" height="9" viewBox="0 0 11 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.47734 1L3.95234 7.5L1.40234 5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- این قسمت فیلتر ها در ریسپانسیو است ....................................................... --}}
    <section id="box-search-mobile">
        <div class="right-search-mobile width-50" data-bs-toggle="modal" data-bs-target="#modal-filters">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.15104 1.2251H10.851C11.4927 1.2251 12.0177 1.7501 12.0177 2.39176V3.6751C12.0177 4.14176 11.726 4.7251 11.4344 5.01676L8.92604 7.23343C8.57604 7.5251 8.34271 8.10843 8.34271 8.5751V11.0834C8.34271 11.4334 8.10937 11.9001 7.81771 12.0751L7.00104 12.6001C6.24271 13.0668 5.19271 12.5418 5.19271 11.6084V8.51676C5.19271 8.10843 4.95938 7.58343 4.72604 7.29176L2.50938 4.95843C2.21771 4.66676 1.98438 4.14176 1.98438 3.79176V2.4501C1.98438 1.7501 2.50937 1.2251 3.15104 1.2251Z"
                    stroke="#808191" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M6.37583 1.2251L3.5 5.83343" stroke="#808191" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span>فیلتر</span>
        </div>

        <div class="left-search-mobile width-50" data-bs-toggle="modal" data-bs-target="#modal-request">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M2 4.66675H14" stroke="#808191" stroke-width="1.5" stroke-linecap="round" />
                <path d="M4 8H12" stroke="#808191" stroke-width="1.5" stroke-linecap="round" />
                <path d="M6.66797 11.3333H9.33464" stroke="#808191" stroke-width="1.5" stroke-linecap="round" />
            </svg>

            <span>مرتب سازی</span>
        </div>
    </section>

    <!-- Modal ...................................................................................   -->
    <div class="modal fade" wire:ignore.self id="modal-request" tabindex="-1" aria-labelledby="modal-requestLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-box flex-justify-space">
                    <span class="modal-title" id="exampleModalLabel">مرتب سازی</span>

                    <svg class="cursor-pointer add-red-big" width="40" height="40" viewBox="0 0 34 34"
                        fill="none" xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="modal"
                        aria-label="Close">
                        <path d="M12.7285 21.2422L21.2138 12.7569" stroke="#FF3838" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.2138 21.2431L12.7285 12.7578" stroke="#FF3838" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <div class="modal-body text-center">
                    <ul class="box-filter-search-mo">
                        <li wire:click="$set('sort','most-sell')" class="item-filter-search-mo">
                            @if($sort == 'most-sell')
                                <svg class="img-item-filter-search-mo" width="12" height="9" viewBox="0 0 12 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 1L4 7.5L1 5" stroke="#3D42DF" stroke-width="2"
                                          stroke-linecap="round" />
                                </svg>
                            @endif

                            <span class="txt-item-filter-search-mo {{ $sort == 'most-sell' ? 'color-blue' : "" }} ">پرفروش ترین</span>
                        </li>
                        <li wire:click="$set('sort','latest')" class="item-filter-search-mo">
                            @if($sort == 'latest')
                                <svg class="img-item-filter-search-mo" width="12" height="9" viewBox="0 0 12 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 1L4 7.5L1 5" stroke="#3D42DF" stroke-width="2"
                                          stroke-linecap="round" />
                                </svg>
                            @endif

                            <span class="txt-item-filter-search-mo {{ $sort == 'latest' ? 'color-blue' : "" }}">جدید ترین</span>
                        </li>

                        <li wire:click="$set('sort','price-desc')" class="item-filter-search-mo">
                            @if($sort == 'price-desc')
                                <svg class="img-item-filter-search-mo" width="12" height="9" viewBox="0 0 12 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 1L4 7.5L1 5" stroke="#3D42DF" stroke-width="2"
                                          stroke-linecap="round" />
                                </svg>
                            @endif
                            <span class="txt-item-filter-search-mo {{ $sort == 'price-desc' ? 'color-blue' : "" }}">گران ترین</span>
                        </li>

                        <li wire:click="$set('sort','price-asc')" class="item-filter-search-mo">
                            @if($sort == 'price-asc')
                                <svg class="img-item-filter-search-mo" width="12" height="9" viewBox="0 0 12 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 1L4 7.5L1 5" stroke="#3D42DF" stroke-width="2"
                                          stroke-linecap="round" />
                                </svg>
                            @endif
                            <span class="txt-item-filter-search-mo {{ $sort == 'price-asc' ? 'color-blue' : "" }}">ارزان ترین</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" wire:ignore.self id="modal-filters" tabindex="-1" aria-labelledby="modal-filtersLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-box flex-justify-space">
                    <svg class="cursor-pointer add-red-big-right pr-2" data-bs-dismiss="modal" aria-label="Close"
                        width="40" height="40" viewBox="0 0 34 34" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.7285 21.2422L21.2138 12.7569" stroke="#FF3838" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.2138 21.2431L12.7285 12.7578" stroke="#FF3838" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="modal-title" id="exampleModalLabel">فیلتر ها</span>

{{--                    <button class="btn-delete-filter-search-mo">حذف فیلتر</button>--}}
                </div>

                <div class="modal-body text-center modal-filters">
                    <ul>
{{--                        <li class="item-filters-search-mo flex-box flex-justify-space" data-bs-toggle="modal"--}}
{{--                            data-bs-target="#modal-filters-1">--}}
{{--                            <span class="txt-item-filter-search-mo">فیلتر ها</span>--}}

{{--                            <svg class="img-item-filter-search-mo" width="18" height="18" viewBox="0 0 18 18"--}}
{{--                                fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M11.2509 14.9396L6.36086 10.0496C5.78336 9.47207 5.78336 8.52707 6.36086 7.94957L11.2509 3.05957"--}}
{{--                                    stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"--}}
{{--                                    stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </li>--}}

                        <li class="item-filters-search-mo flex-box flex-justify-space" data-bs-toggle="modal"
                            data-bs-target="#modal-filters-2">
                            <span class="txt-item-filter-search-mo">قیمت</span>

                            <svg class="img-item-filter-search-mo" width="18" height="18" viewBox="0 0 18 18"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2509 14.9396L6.36086 10.0496C5.78336 9.47207 5.78336 8.52707 6.36086 7.94957L11.2509 3.05957"
                                    stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </li>

                        <li class="item-filters-search-mo flex-box flex-justify-space">
                            <span class="txt-item-filter-search-mo">کالاهای موجود</span>

                            <div class="checkbox-container">
                                <input type="checkbox" id="checkbox2" class="checkbox"  value="1" class="checkbox" wire:model="level">

                                <label for="checkbox2" class="checkbox-label">
                                    <span class="checkbox-icon unchecked">
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.07266 1L1.84766 9.5M9.07266 9.5L1.84766 1" stroke="black"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </span>

                                    <span class="checkbox-icon checked">
                                        <svg width="11" height="9" viewBox="0 0 11 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.47734 1L3.95234 7.5L1.40234 5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-filters-header" id="modal-filters-1" tabindex="-1"
        aria-labelledby="modal-filters-1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-box flex-justify-space">
                    <svg class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-filters"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#292D32" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.5 12H20.33" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="modal-title" id="exampleModalLabel">فیلتر ها</span>

                    <button class="btn-delete-filter-search-mo ml-2">حذف فیلتر</button>
                </div>

                <div class="modal-body text-center modal-filters">
                    <ul>
                        <form>
                            <li class="item-filters-search-mo flex-box flex-justify-space">
                                <div class="custom-radio">
                                    <input type="radio" id="radio1f" name="radioGroupsf">
                                    <label for="radio1f" class="mb-0">
                                        <div class="radio-custom"></div>
                                        <span>فیلترها</span>
                                    </label>
                                </div>
                            </li>

                            <li class="item-filters-search-mo flex-box flex-justify-space">
                                <div class="custom-radio">
                                    <input type="radio" id="radio1s" name="radioGroupsf">
                                    <label for="radio1s" class="mb-0">
                                        <div class="radio-custom"></div>
                                        <span>فیلترها</span>
                                    </label>
                                </div>
                            </li>

                            <li class="item-filters-search-mo flex-box flex-justify-space">
                                <div class="custom-radio">
                                    <input type="radio" id="radio1m" name="radioGroupsf">
                                    <label for="radio1m" class="mb-0">
                                        <div class="radio-custom"></div>
                                        <span>فیلترها</span>
                                    </label>
                                </div>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-filters-header" wire:ignore.self id="modal-filters-2" tabindex="-1"
        aria-labelledby="modal-filters-2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-box flex-justify-space">
                    <svg class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-filters"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="#292D32" stroke-width="1.5"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.5 12H20.33" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="modal-title" id="exampleModalLabel">محدوده قیمت</span>

{{--                    <button class="btn-delete-filter-search-mo">حذف فیلتر</button>--}}
                </div>

                <div class="modal-body modal-filters">
                    <div>
                        <div class="box-price-input" wire:ignore>
                            <div class="price-input">
                                <span class="txt2-box-price">تا</span>
                                <h2 class="input-min massage-box-price" id="rangeMaxValue2">{{ $min }}</h2>
                                <span class="txt1-box-price">تومان</span>
                            </div>

                            <div class="price-input">
                                <span class="txt2-box-price">از</span>
                                <h2 class="input-max massage-box-price" id="rangeMinValue2">{{ $max }}</h2>
                                <span class="txt1-box-price">تومان</span>
                            </div>
                        </div>

                        <div class="range-slider" wire:ignore>
                            <input type="range" id="rangeMin2" min="0" max="{{ $max }}" value="{{ $min }}"
                                step="10" wire:model="min">
                            <input type="range" id="rangeMax2" min="0" max="{{ $max }}" value="{{ $max }}"
                                step="10" wire:mddel="max">
                            <div class="track"></div>
                            <div class="range-track" id="rangeTrack2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ........................................................................................ --}}

    <div id="left-search">
        <div class="item-header-main-search flex-box flex-right">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M3 7H21" stroke="#374151" stroke-width="1.5" stroke-linecap="round" />
                <path d="M6 12H18" stroke="#374151" stroke-width="1.5" stroke-linecap="round" />
                <path d="M10 17H14" stroke="#374151" stroke-width="1.5" stroke-linecap="round" />
            </svg>

            <div class="margin-horizontal-1">
                <span>مرتب سازی : </span>
            </div>

            <div>
                <ul class="flex-box">
                    <li wire:click="$set('sort','most-sell')" class="margin-horizontal-1 item-filter-header-search {{ $sort == 'most-sell' ? 'color-blue' : "" }}">پرفروش ترین</li>

                    <li wire:click="$set('sort','latest')" class="margin-horizontal-1 item-filter-header-search {{ $sort == 'latest' ? 'color-blue' : "" }}">جدید ترین</li>

                    <li  wire:click="$set('sort','price-desc')" class="margin-horizontal-1 item-filter-header-search {{ $sort == 'price-desc' ? 'color-blue' : "" }}">گران ترین</li>

                    <li wire:click="$set('sort','price-asc')" class="margin-horizontal-1 item-filter-header-search {{ $sort == 'price-asc' ? 'color-blue' : "" }}">ارزان ترین</li>
                </ul>
            </div>
        </div>

        <div class="left-message-main-search flex-box flex-wrap flex-right">
            @foreach ($products as $product)
                @include('site.components.products.product-box')
            @endforeach
        </div>
        <div class="mt-4">
            {!! $link !!}
        </div>
    </div>

</section>
