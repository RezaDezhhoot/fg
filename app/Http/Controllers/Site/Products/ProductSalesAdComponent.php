<?php

namespace App\Http\Controllers\Site\Products;

use App\Http\Controllers\Cart\Facades\Cart;
use App\Http\Controllers\FormBuilder\Facades\FormBuilder;
use App\Models\Account;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\TwitterCard;
use Livewire\Component;
use App\Models\CategoryParameter;
use App\Models\CategoryParameterProduct;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ProductSalesAdComponent extends Component
{
	use WithFileUploads , WithPagination;

    public $readyToLoad = false;
    public $isLoaded = false;

    public $product;
    public $form, $price, $priceWithDiscount;
    public $avg , $start_lottery  ;
    public $quantity = 1;
    public $questionsCount = 0, $commentsCount = 5 ;
    public $prePageComment = 6, $prePageQuestion = 6;

    public $relatedProducts ;
    public $banners , $detail_display;
	public $parameters = [],$parametersValue = [] , $file , $needUpload = false , $needConfirm = false , $showLaw = false , $lawOK = false;

    public function lnit()
    {
        $this->readyToLoad = true;
    }

    public function mount($id)
    {
        $this->product = Account::query()->published()->findOrFail($id);
        SEOMeta::setTitle('خرید ' . $this->product->title . ' - فارس گیمر');
        SEOMeta::setDescription($this->product->seo_description);
        OpenGraph::setTitle('خرید ' . $this->product->title . ' - فارس گیمر');
        OpenGraph::setDescription($this->product->seo_description);
		SEOMeta::addMeta('author', 'محمد علی رسولی', 'name');
		SEOMeta::addMeta('robots', 'index,follow', 'name');
		SEOMeta::addMeta('keywords', $this->product->seo_keywords , 'name');
		SEOMeta::addMeta('product_id', $this->product->id, 'name');
		SEOMeta::addMeta('product_name', $this->product->title, 'name');
		SEOMeta::addMeta('og:image', asset($this->product->image), 'property');
		SEOMeta::addMeta('product_price', $this->product->priceWithDiscount, 'name');
        TwitterCard::setTitle('خرید ' . $this->product->title . ' - فارس گیمر');
        TwitterCard::setDescription($this->product->seo_description);
    }


    public function render()
    {

        return view('site.products.product-component-sales-ad')
            ->extends('site.layouts.product');
    }

}
