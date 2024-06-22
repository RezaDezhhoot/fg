<div class="position-relative">
    <div class="container-fluid p-0">
        <div>

            <div class="window-tabs" style="margin: 0px !important">

                <div class="tabs" style="margin: 0px !important">
                    <div class="slide skin active_slide" id="skin" wire:ignore.self>
                        <div class="skin-product" wire:ignore.self>
                            <div class="row" wire:ignore.self>
                                <div class="col-lg-3 col-md-4 d-none d-lg-block d-xl-block" wire:ignore.self>
                                    <div class="col-12">

                                        <div class="filters mt-1">
                                            <div class=" form-switch d-flex align-items-center py-2 px-1">
                                                <div class="product-checkbox d-flex align-items-center">

                                                    <input type="checkbox" {{ $level == 1 ? 'checked' : '' }}
                                                        id="switchD" value="1">

                                                    <label style="right:-1px" wire:click="levelTest" for="switchD"
                                                        class="mb-0">Toggle</label>

                                                    <span class="mr-2" style="font-size:15px"> کالا های
                                                        موجود</span>
                                                </div>
                                            </div>
                                            <div class="sidenav mt-4" wire:ignore.self>
                                                <div class="col-12 form-group py-1 px-2 filter_groups mb-3"
                                                    wire:ignore.self>
                                                    <button class="dropdown-btn px-2 py-2 text-black">
                                                        <i class="fa fa-caret-down"></i>
                                                        <strong>
                                                            محدوده قیمت
                                                        </strong>
                                                    </button>
                                                    <div class="dropdown-container mt-2" wire:ignore.self>
                                                        <div class="d-flex align-items-center py-1" wire:ignore.self>
                                                            <div class="price-range desk p-0" wire:ignore.self>
                                                                <span>محدوده قیمت</span>
                                                                <div class="col-12">
                                                                    <input type="range" wire:model.defer="priceRange"
                                                                        wire:change="priceRanges">
                                                                </div>
                                                                <br>
                                                                <div
                                                                    class="text-center d-flex align-items-center justify-content-between">
                                                                    <small>از</small>
                                                                    <input value="0" disabled type="text"
                                                                        class="p-1">
                                                                    <small>تا</small>
                                                                    <input value="{{ number_format($range) }}" disabled
                                                                        class="p-1" type="text">
                                                                    <small>تومان</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-lg-none d-xl-none px-0" wire:ignore>
                                    <div class="col-12 mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn-filter mr-3" id="btn-advanced-search">
                                                جستوجو پیشرفته
                                                <i></i>
                                            </button>
                                            <button class="btn-filter mx-2" id="btn-filter">
                                                مرتب سازی بر اساس
                                                <i></i>
                                            </button>
                                        </div>
                                        <div class="position-fixed filter-panel" wire:ignore>
                                            <div class="filter p-3">
                                                <div
                                                    class="filter-row d-flex align-items-center justify-content-between">
                                                    <b class="text-secondary">مرتب سازی بر اساس</b>
                                                    <i class="fas fa-times text-secondary close-filter"></i>
                                                </div>
                                                @foreach ($sortable as $key => $value)
                                                    <div class="filter-row m-0 m-0 d-flex align-items-center">
                                                        <label wire:click="$set('sort', '{{ $key }}')"
                                                            class="btn  {{ $sort == $key ? 'border' : '' }} my-0 py-0 mt-1"
                                                            for="option1">{{ $value }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="advanced-search p-0">

                                                <div
                                                    class="bg-white px-3 py-2 d-flex align-items-center justify-content-between resp_button_height">
                                                    <button class="btn-filter" id="clear-filter"
                                                        wire:click="clear_filter">

                                                        پاک کردن همه
                                                    </button>
                                                    <div class=" form-switch d-flex align-items-center p-1">
                                                        <div class="product-checkbox d-flex">
                                                            <small style="font-size:12px"> کالا های
                                                                موجود</small>
                                                            <input type="checkbox" {{ $level == 1 ? 'checked' : '' }}
                                                                id="switch" value="1">
                                                            <label wire:click="levelTest" for="switch"
                                                                class="mb-0">Toggle</label>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="filters mx-2 my-2 resp_filter_height">
                                                    <div class="sidenav" wire:ignore>
                                                        <div class="col-12 form-group py-1 px-2 filter_groups mb-3">
                                                            <button class="dropdown-btn px-2 py-2 text-black">
                                                                <i class="fa fa-caret-down"></i>
                                                                <strong>
                                                                    محدوده قیمت
                                                                </strong>
                                                            </button>
                                                            <div class="dropdown-container mt-2">
                                                                <div class="d-flex align-items-center py-1">
                                                                    <div class="price-range res p-0">
                                                                        <span>محدوده قیمت</span>
                                                                        <div class="col-12">

                                                                            <input type="range"
                                                                                wire:model.defer="priceRange"
                                                                                id="rangeInput" onchange="priceRange()">
                                                                            <input type="hidden"
                                                                                value="{{ $max }}"
                                                                                id="max-range">
                                                                        </div>

                                                                        <br>
                                                                        <div class="text-center">
                                                                            <small>از</small>
                                                                            <input value="0" disabled
                                                                                type="text" class="py-1 px-2">
                                                                            <small>تا</small>
                                                                            <input value="{{ number_format($range) }}"
                                                                                class="py-1 px-2" id="range-show"
                                                                                disabled type="text">
                                                                            <small>تومان</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apply-filter" wire:click="apply_filter()">
                                                    جستوجو پیشرفته
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p-1">
                                    <div class="col-12 mb-3" wire:ignore.self>
                                        <div class="skin-ordering d-none d-lg-flex d-xl-flex">
                                            <i></i>
                                            <span> : مرتب سازی بر اساس </span>

                                            @foreach ($sortable as $key => $value)
                                                <label wire:click="$set('sort', '{{ $key }}')"
                                                    class="btn  {{ $sort == $key ? 'border' : '' }} btn-primary mt-2"
                                                    for="option1">{{ $value }}</label>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="col-12" wire:ignore.self>
                                        <div class="skin-product-box" wire:ignore.self>
                                            <div
                                                class="grid gap-4 grid-cols-2 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5 relative">

                                                @foreach ($products as $product)
                                                    @include('site.components.products.product-box')
                                                @endforeach


                                            </div>
                                            {!! $link !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.d-none',
                prevButton: '.d-none',
                slidesPerView: 6,
                paginationClickable: true,
                spaceBetween: 30,
                breakpoints: {
                    1920: {
                        slidesPerView: 7,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 5,
                        spaceBetween: 25
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1: {
                        slidesPerView: 1,
                        spaceBetween: 250
                    }
                }
            });
        });
    </script>
@endpush
