<section class="margin-vetical-2 section-home">
    <div class="header-box-category flex-box">
        <span>دسته بندی ها</span>
    </div>

    <div id="show-category" class="flex-box flex-justify-space flex-wrap">
        @foreach($categories as $category)
            <a href="{{ route('index.categories',$category->slug) }}" class="item-category">
                <div class="flex-box flex-column flex-justify-space height-max width-max">
                    <div class="img-item-category flex-box">
                        <img src="{{ asset($category->picture) }}" alt="">
                    </div>

                    <div class="text-item-category">
                        <span>{{ $category->title }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
