<div class="width-max">
    <div class="header-detalist-product">
        <span>{{ $product->title }}</span>

        {{-- <div class="box-point-header-detalist-product flex-box flex-right">
            <x-site.rating-star :rating="$avg" />
            @if ($avg > 0)
                <span class="text-sm">(از {{ $commentsCount }} کاربر)</span>
            @endif

            @if ($start_lottery)
                <li>
                    <i class="rating-stars__filled-star icon-star-filled mr-1"></i>
                    <span class="mr-1">شما با خرید این محصول <strong>{{ $product->lottery }}</strong> شانس دریافت
                        میکنید</span>
                </li>
            @endif
        </div> --}}

        <div class="border-top border-bottom mt-4 mb-4  pb-4 pt-4">
            <span>کد آگهی:{{ $product->code }}</span>
        </div>
    </div>

    <div class="description-header-detalist-product">
        <ul dir="rtl">
            <li>{!! $product->description !!}</li>
        </ul>
    </div>
</div>
