<?php

namespace App\Http\Controllers\Site\Products;

use App\Models\Account;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsSalesAd extends Component
{
    use WithPagination;

    protected $queryString = ['q', 'category', 'sort'];

    public $categories;
    public $category = null , $level , $categoryModel;
    public $sortable;
    public $min , $max;
    public $sort = 'latest';
    public $q;
    public $perPage = 12 , $priceRange = 100;

    public $fg_depot = false;

    public $banners;

    public function mount()
    {
        SEOMeta::setTitle('اگهی ها - فارس گیمر');
        SEOMeta::setDescription('خرید محصولات فورتنایت - خرید محصولات کالاف دیوتی موبایل - خرید پابجی - ارزان تر از همه جا - خرید ویباکس - خرید ویباکس ارزان -100% مشتریان راضی بوده اند');

        OpenGraph::setTitle('اگهی ها - فارس گیمر');
        OpenGraph::setDescription('خرید محصولات فورتنایت - خرید محصولات کالاف دیوتی موبایل - خرید پابجی - ارزان تر از همه جا - خرید ویباکس - خرید ویباکس ارزان -100% مشتریان راضی بوده اند');

        TwitterCard::setTitle('اگهی ها - فارس گیمر');
        TwitterCard::setDescription('خرید محصولات فورتنایت - خرید محصولات کالاف دیوتی موبایل - خرید پابجی - ارزان تر از همه جا - خرید ویباکس - خرید ویباکس ارزان -100% مشتریان راضی بوده اند');

        JsonLd::setTitle('اگهی ها - فارس گیمر');
        JsonLd::setDescription('خرید محصولات فورتنایت - خرید محصولات کالاف دیوتی موبایل - خرید پابجی - ارزان تر از همه جا - خرید ویباکس - خرید ویباکس ارزان -100% مشتریان راضی بوده اند');

        $this->sortable = ['latest' => 'جدید ترین', 'oldest' => 'قدیمی ترین',
            'price-asc' => 'ارزان ترین', 'price-desc' => 'گران ترین',
            Product::STATUS_AVAILABLE => 'محصولات موجود'
            ];
        $this->categories = Category::query()->account()->get();
        $this->max = Account::query()->max('amount');
        $this->min = Account::query()->min('amount');
        $this->updatedCategory($this->category);
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function updatedCategory($value)
    {
        if ($value) {
            $this->categoryModel = Category::query()->find($value);
        }
    }

    public function levelTest()
    {
        if ($this->level == 0)
            $this->level = 1;
        else
            $this->level = 0;
    }
    public function apply_filter()
    {
    }

    public function priceRanges()
    {
    }
    public function clear_filter()
    {
        $this->level = 0;
        $this->priceRange = 100;
        $this->reset(['level','filter']);
    }

    public function render()
    {
        $user = Auth::user();
        $products = Account::query()
            ->latest()
            ->when(($this->category) , function ($q){
                $q->where('category_id', $this->category);
            })
            ->when($this->min , function ($q) {
                $q->where('amount',">=" ,$this->min);
            })
            ->when($this->max , function ($q) {
                $q->where('amount',"<=" ,$this->max);
            })
            ->when($this->fg_depot , function ($q){
                $q->where('fg_depot' , true);
            })
            ->when($this->sort , function ($q) {
                $q->orderBy($this->sort === 'latest' ? 'id' : ($this->sort ?? 'id'),'desc');
            })
            ->with(['category','user'])
            ->published()
            ->paginate($this->perPage);
        return view('site.products.products-sales-ad' , get_defined_vars())
            ->extends('site.layouts.shop');
    }

    public function save($id)
    {
        if (auth()->check()) {
            $user = Auth::user();

            if (! $user->accounts()->where('account_id',$id)->exists()) {
                $user->accounts()->attach($id);
            } else {
                $user->accounts()->detach($id);
            }
        }
    }
}
