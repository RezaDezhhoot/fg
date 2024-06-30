<?php

namespace App\Http\Controllers\Site\Dashboard;

use App\Models\Account;
use App\Models\Category;
use App\Models\Subject;
use App\Models\Ticket;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreSalesAd extends Component
{
    use WithFileUploads;

    public $step = 'category';

    public $categories = [];


    public $category , $image , $galleries = [] , $title , $amount , $gallery;

    public $description , $dont_show_phone = false;

    public  $safe = true , $acceptLaw = false , $telegram_id , $other_social_id , $extraSocial;

    public $add_other_social;

    public $file ;


    public function updatedDontShowPhone()
    {
        $this->reset(['add_other_social']);
    }

    public function mount()
    {
        SEOMeta::setTitle('آگهی جدید - فارس گیمر');
        OpenGraph::setTitle('آگهی جدید - فارس گیمر');
        TwitterCard::setTitle('آگهی جدید - فارس گیمر');
        JsonLd::setTitle('آگهی جدید - فارس گیمر');
        $this->categories = Category::query()
            ->account()
            ->pluck('title','id');
    }
    public function render()
    {
        return view('site.dashboard.store-sales-ad')->extends('site.layouts.tickets');
    }


    public function setCategory()
    {
        $this->validate([
            'category' => ['required',Rule::exists('categories','id')->where('type',Category::ACCOUNT)]
        ]);
        $this->step = 'basic-info';
    }

    public function setBasicInfo()
    {
        $this->validate([
            'image' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:2048'],
            'amount' => ['required','numeric','between:1000,10000000000000000000'],
            'title' => ['required','string','max:70'],
            'galleries' => ['required','array','min:1','max:5'],
            'galleries.*' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:1024'],
            'safe' => ['nullable','boolean']
        ],[] , [
            'image' => 'تصویر',
            'amount' => 'مبلغ',
            'title' => 'اسم',
            'galleries' => 'گالری تصاویر'
        ]);
        $this->step = 'extra-info';
    }

    public function setExtraInfo()
    {
        $this->validate([
            'description' => ['required','string','max:1000'],
            'dont_show_phone' => ['nullable','boolean'],
            'telegram_id' => ['nullable','string','max:1000'],
            'other_social_id' => [$this->dont_show_phone ? "required" : 'nullable','string','max:50'],
            'extraSocial' => [$this->dont_show_phone ? "required" : 'nullable','string','max:50']
        ],[] , [
            'description' => 'توضیحات',
            'telegram_id' => 'تلگرام',
            'other_social_id' => 'راه ارتباطی دیگر'
        ]);
        $this->step = 'accept-law';
    }

    public function submit()
    {
        $this->validate([
            'category' => ['required',Rule::exists('categories','id')->where('type',Category::ACCOUNT)],
            'image' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:2048'],
            'amount' => ['required','numeric','between:1000,10000000000000000000'],
            'title' => ['required','string','max:70'],
            'galleries' => ['required','array','min:1','max:5'],
            'galleries.*' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:1024'],
            'safe' => ['nullable','boolean'],
            'description' => ['required','string','max:1000'],
            'dont_show_phone' => ['nullable','boolean'],
            'acceptLaw' => ['required','boolean','in:1'],
            'telegram_id' => ['nullable','string','max:1000'],
            'other_social_id' => [$this->dont_show_phone ? "required" : 'nullable','string','max:50'],
            'extraSocial' => [$this->dont_show_phone ? "required" : 'nullable','string','max:50']
        ] , [] , [
            'image' => 'تصویر',
            'amount' => 'مبلغ',
            'title' => 'اسم',
            'galleries' => 'گالری تصاویر',
            'description' => 'توضیحات',
            'acceptLaw' => 'تاییدیه',
            'telegram_id' => 'تلگرام',
            'other_social_id' => 'راه ارتباطی دیگر'
        ]);
        try {
            $data = [
                'title' => $this->title,
                'amount' => $this->amount,
                'category_id' => $this->category,
                'user_id' => auth()->id(),
                'show_phone' => ! $this->dont_show_phone,
                'description' => $this->description,
                'telegram_id' => $this->telegram_id,
                'other_social_id' =>  $this->other_social_id ? ($this->extraSocial .":". $this->other_social_id) : null,
                'safe' => $this->safe,
                'status' => Account::PENDING,
                'image' =>  'media/'.$this->image->store('accounts','media'),
                'gallery' => collect($this->galleries)->map(function ($item) {
                    return 'media/'.$item->store('accounts','media');
                })->implode(',')
            ];
            $account = new Account();
            $account->fill($data)->save();
            $this->step = 'finish';
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            $this->addError('acceptLaw','مشکلی در حین ثبت اگهی وجود دارد لطفا بررسی سپس مجدد تلاش نمایید. ');
        }
    }

    public function updatedGallery($value)
    {
        $this->galleries[] = $value;
        $this->reset('gallery');
    }

    public function removeGallery($key)
    {
        if (isset($this->galleries[$key])) {
            unset($this->galleries[$key]);
        }
    }

    public function finish()
    {
        return redirect()->route('dashboard.sales-ad');
    }
}
