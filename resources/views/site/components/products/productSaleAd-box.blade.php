<div class="swiper-slide swiper-slide-prudect-box-new">
    <div class="swiper-slide-prudect swiper-slide-prudect-new flex-box flex-column flex-justify-space width-max">
        <a href="{{ route('products-sales-ad.show', $product->slug) }}" class="show-swiper-slide-prudect flex-box flex-column">
            @if ($product->status == \App\Models\Product::STATUS_AVAILABLE)
                <div>
                    <img class="w-full" src="{{ asset($product->image) }}" alt="">
                </div>
            @elseif($product->status == \App\Models\Product::STATUS_UNAVAILABLE)
                <div class="relative">
                    <img class="w-full" src="{{ asset($product->image) }}" alt="">

                    <div class="bg-gray-700 bg-opacity-70 absolute inset-0 flex items-center justify-center rounded-xl">
                        <p class="text-white font-medium">
                            {{ \App\Models\Product::getProductsStatus()[$product->status] }}
                        </p>
                    </div>
                </div>
            @elseif($product->status == \App\Models\Product::STATUS_COMING_SOON)
                <div class="relative">
                    <img class="w-full" src="{{ asset($product->image) }}" alt="">

                    <div class="bg-gray-700 bg-opacity-70 absolute inset-0 flex items-center justify-center rounded-xl">
                        <p class="text-white font-medium">
                            {{ \App\Models\Product::getProductsStatus()[$product->status] }}
                        </p>
                    </div>
                </div>
            @elseif($product->status == \App\Models\Product::STATUS_TOWARDS_THE_END)
                <div class="relative">
                    <img class="w-full" src="{{ asset($product->image) }}" alt="">

                    <div class="bg-gray-700 bg-opacity-70 absolute inset-0 flex items-center justify-center rounded-xl">
                        <p class="text-white font-medium">
                            {{ \App\Models\Product::getProductsStatus()[$product->status] }}
                        </p>
                    </div>
                </div>
            @endif

            <div class="title">
                <span>{{ $product->title }}</span>
            </div>

            <div class="details">
                <div class="category">
                    <span>فورتنایت</span>
                </div>

                <div class="time">
                    <span>10 دقیقه قبل</span>
                </div>
            </div>

            @if ($product->price_with_discount == 0)
                <div class="price-box-sale">
                    <div class="price">
                        <span>قیمت متغییر</span>
                    </div>
                </div>
            @else
                @if ($product->is_active_discount && $product->status == \App\Models\Product::STATUS_AVAILABLE)
                    <div class="price-box-sale">
                        <div class="price flex gap-1.5 justify-center">
                            <div class="font-semibold leading-4 grid">
                                {{-- price after discount --}}
                                <p>{{ number_format($product->price_with_discount) }}</p>
                                {{-- price before discount --}}
                                <p class="line-through text-gray2-700 flex items-center justify-end">
                                    {{ number_format($product->price) }}</p>
                            </div>

                            <div class="grid gap-1">
                                <p class="text-sm">تومان</p>
                                {{-- discount precedence --}}
                                <div class="bg-red text-white rounded-full py-0.5 px-2 text-xs">
                                    {{ $product->discount_percentage }}%</div>
                            </div>
                        </div>
                    </div>
                @elseif($product->status == \App\Models\Product::STATUS_COMING_SOON)
                    <div class="price-box-sale">
                        <div class="price">
                            <span>به زودی</span>
                        </div>
                    </div>
                @elseif($product->status == \App\Models\Product::STATUS_UNAVAILABLE)
                    <div class="price-box-sale">
                        <div class="price">
                            <span>ناموجود</span>
                        </div>
                    </div>
                @else
                    <div class="price-box-sale">
                        <div class="price">
                            <span>{{ number_format($product->price_with_discount) }}</span>

                            <span>تومان</span>
                        </div>

                        <button  class="book-mark-sale-ad">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z" fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z" stroke="#374151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                @endif
            @endif
        </a>
    </div>
</div>