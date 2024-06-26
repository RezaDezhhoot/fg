<div wire:init="lnit">
    {{ Breadcrumbs::view('site.components.breadcrumb', 'products.show', $product) }}

    <section id="main-product" class="flex-box flex-justify-space flex-aling-auto">
        <section class="right-main-product">
            <div class="box-header-detalist-product flex-box flex-justify-space flex-aling-auto flex-column-1000">
                @include('site.components.products.image-gallery')

                <div class="margin-horizontal-1"></div>

                @include('site.components.products.info')
            </div>

            <section id="left-main-product-tablet" class="left-main-product">
                <div class="box-form-product">
                    @include('site.components.products.form')
                </div>

                <div class="box-trainings-product">
                    <div class="show-box-trainings-product">
                        <span>آموزش های مورد نیاز</span>

                        @foreach($product->articles as $article)
                            <a href="{{ route('articles.show',$article->slug) }}" class="item-trainings-product">
                                <span>{{ $article->title }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>

            @include('site.components.products.content')
        </section>

        <section class="left-main-product">
            <div class="box-form-product">
                @include('site.components.products.form')
            </div>

            <div class="box-trainings-product">
                <span>آموزش های مورد نیاز</span>
                <div class="flex-box flex-wrap flex-right">
                    @foreach($product->articles as $article)
                        <a href="{{ route('articles.show',$article->slug) }}" class="item-trainings-product">
                            <span>{{ $article->title }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </section>

    <div class="margin-vetical-2"></div>

    <section class="margin-vetical-2 hide-item-mobile">
        @include('site.homes.best-sellers', [
            'products' => $relatedProducts,
            'title' => 'محصولات مرتبط',
            'route' => route('products'),
            'icon' => '',
        ])
    </section>

    @include('site.components.products.content-mobile')
</div>
