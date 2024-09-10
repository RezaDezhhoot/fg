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

    public  $safe = false , $acceptLaw = false , $telegram_id , $other_social_id , $extraSocial;

    public $add_other_social;

    public $file ;

    public $account;

    public $oldImage , $oldGalleries = [];

    public function updatedDontShowPhone()
    {
        $this->reset(['add_other_social','extraSocial']);
    }

    public function mount($action , $id =null)
    {
        SEOMeta::setTitle('آگهی جدید - فارس گیمر');
        OpenGraph::setTitle('آگهی جدید - فارس گیمر');
        TwitterCard::setTitle('آگهی جدید - فارس گیمر');
        JsonLd::setTitle('آگهی جدید - فارس گیمر');

        if ($action == 'edit') {
            $this->account = Account::query()
                ->where('user_id',auth()->id())
                ->findOrFail($id);

            $this->category = $this->account->category_id;
            $this->title = $this->account->title;
            $this->amount = $this->account->amount;
            $this->safe = $this->account->safe;
            $this->telegram_id = $this->account->telegram_id;
            $this->description = $this->account->description;
            $this->dont_show_phone = ! $this->account->show_phone;
            $this->other_social_id = $this->account->other_social_id;
            $this->extraSocial = $this->account->extraSocial;
            $this->add_other_social = $this->account->extraSocial;
            $this->oldImage = $this->account->image;
            $this->oldGalleries = explode(',',$this->account->gallery);
        }

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
            'image' => [ ($this->account && $this->oldImage) ? 'nullable' : 'required' , 'file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:2048'],
            'oldImage' => [...(($this->account && ! $this->image ) ? ['required'] : ['nullable']),'string','max:1000'],
            'amount' => ['required','numeric','between:1000,10000000000000000000'],
            'title' => ['required','string','max:70'],
            'galleries' => [...(sizeof($this->oldGalleries) > 0 ? ['nullable'] : ['required','min:1']),'array','max:5'],
            'oldGalleries' => [...($this->account  ? ['required','min:1'] : ['nullable']),'array','max:5'],
            'galleries.*' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:1024'],
            'safe' => ['nullable','boolean']
        ],[] , [
            'image' => 'تصویر',
            'oldImage' => 'تصویر',
            'amount' => 'مبلغ',
            'title' => 'اسم',
            'galleries' => 'گالری تصاویر',
            'oldGalleries' => 'گالری تصاویر',
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
            'image' => [ ($this->account && $this->oldImage) ? 'nullable' : 'required' , 'file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:2048'],
            'oldImage' => [...(($this->account && ! $this->image ) ? ['required'] : ['nullable']),'string','max:1000'],
            'amount' => ['required','numeric','between:1000,10000000000000000000'],
            'title' => ['required','string','max:70'],
            'galleries' => [...(sizeof($this->oldGalleries) > 0 ? ['nullable'] : ['required','min:1']),'array','max:'.(5 - sizeof($this->oldGalleries))],
            'oldGalleries' => [...($this->account  ? ['required','min:1'] : ['nullable']),'array','max:'.(5 - sizeof($this->galleries))],
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
            'oldImage' => 'تصویر',
            'amount' => 'مبلغ',
            'title' => 'اسم',
            'galleries' => 'گالری تصاویر',
            'oldGalleries' => 'گالری تصاویر',
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
                'extraSocial' => $this->extraSocial,
                'other_social_id' =>  $this->other_social_id,
                'safe' => $this->safe,
                'status' => Account::PENDING,
                'image' =>  $this->image ? ('media/'.$this->image->store('accounts','media')) : $this->oldImage,
                'gallery' =>  collect($this->galleries)->map(function ($item) {
                    return 'media/'.$item->store('accounts','media');
                })->merge($this->oldGalleries)->implode(',')
            ];
            $account = $this->account ?? (new Account());
            $account->fill($data)->save();
            $this->step = 'finish';
        } catch (\Exception $exception) {
            $this->addError('acceptLaw','مشکلی در حین ثبت اگهی وجود دارد لطفا بررسی سپس مجدد تلاش نمایید. ');
        }
    }

    public function updatedGallery($value)
    {
        $this->validate([
            'gallery' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:1024'],
        ],[] , [
            'gallery' => 'گالری'
        ]);
        $this->galleries[] = $value;
        $this->reset('gallery');
    }

    public function updatedImage($value)
    {
        $this->validate([
            'image' => ['required','file','mimes:jpg,jpeg,png,PNG,JPG,JPEG','max:2048'],
        ],[] , [
            'image' => 'تصویر'
        ]);
        $this->reset('oldImage');
    }


    public function removeGallery($key)
    {
        if (isset($this->galleries[$key])) {
            unset($this->galleries[$key]);
        }
    }

    public function removeOldGallery($key)
    {
        if (isset($this->oldGalleries[$key])) {
            unset($this->oldGalleries[$key]);
        }
    }

    public function finish()
    {
        return redirect()->route('dashboard.sales-ad');
    }
}
