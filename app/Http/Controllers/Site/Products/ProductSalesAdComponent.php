<?php

namespace App\Http\Controllers\Site\Products;

use App\Http\Controllers\Cart\Facades\Cart;
use App\Http\Controllers\FormBuilder\Facades\FormBuilder;
use App\Models\Account;
use App\Models\Category;
use App\Models\Comment;
use App\Models\InfractionSubject;
use App\Models\Product;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Validation\Rule;
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

    public $product;

    public $selectedSubject;
    public $reportDescription;
    public $reportSubmitted = false;

    public $subjects = [];

    public function lnit()
    {
        $this->readyToLoad = true;
    }

    private function checkReportSubmitted()
    {
        if (auth()->check()) {
            return $this->reportSubmitted = $this->product
                ->infractions()->where('user_id' , auth()->id())
                ->exists();
        }
        return false;
    }

    public function mount($id)
    {
        $this->product = Account::query()->published()->findOrFail($id);
        $this->product->increment('views');
        $this->subjects = InfractionSubject::query()->get();
        $this->checkReportSubmitted();
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

    public function submitReport()
    {
        if (! auth()->check()) {
            $this->addError('body','کاربر گرامی قبل از ثبت گزارش می بایست ثبت نام نمایید.');
            return ;
        }

        if ($this->checkReportSubmitted()) {
            $this->addError('body','کاربر گرامی گزارش شما از پیش ثبث شده است.');
            return;
        }
        $this->validate([
            'reportDescription' => ['required','string','max:150'],
            'selectedSubject' => ['required','string',Rule::exists('infraction_subjects','title')]
        ]);
        $report = $this->product->infractions()->create([
            'subject' => $this->selectedSubject,
            'description'=> $this->reportDescription,
            'user_id' => auth()->id()
        ]);
        $this->checkReportSubmitted();
    }

    public function render()
    {
        return view('site.products.product-component-sales-ad')
            ->extends('site.layouts.product');
    }

}
