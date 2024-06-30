<div class="swiper-slide swiper-slide-prudect-box-new">
    <div class="swiper-slide-prudect swiper-slide-prudect-new flex-box flex-column flex-justify-space width-max">
        <a href="{{ route('products-sales-ad.show', $product->id) }}" class="show-swiper-slide-prudect flex-box flex-column">
            <div>
                <img class="w-full" src="{{ asset($product->image) }}" alt="">
            </div>
            <div class="title">
                <span>{{ $product->title }}</span>
            </div>
            <div class="details">
                <div class="category">
                    <span>{{ $product->category->title }}</span>
                </div>

                <div class="time">
                    <span>{{ $product->created_at->diffForHumans() }}</span>
                </div>
            </div>

            <div class="price-box-sale">
                <div class="price">
                    <span>{{ number_format($product->amount) }}</span>

                    <span>تومان</span>
                </div>
            </div>
        </a>
    </div>
</div>
