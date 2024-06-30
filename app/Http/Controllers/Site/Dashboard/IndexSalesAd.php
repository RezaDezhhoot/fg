<?php

namespace App\Http\Controllers\Site\Dashboard;

use App\Models\Account;
use App\Models\Ticket;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexSalesAd extends Component
{
    use WithPagination;
    protected $queryString = ['tab'];

    public $tab = 'accounts';

    public function updatedTab()
    {
        $this->resetPage();
    }

    public function mount()
    {

        SEOMeta::setTitle('اکهی ها - فارس گیمر');
        OpenGraph::setTitle('اکهی ها - فارس گیمر');
        TwitterCard::setTitle('اکهی ها - فارس گیمر');
        JsonLd::setTitle('اکهی ها - فارس گیمر');
    }
    public function render()
    {
        $items = [];

        if ($this->tab == 'accounts') {
            $items = Account::query()
                ->with(['category'])
                ->latest()
                ->whereHas('user' , function ($q) {
                    $q->where('id',auth()->id());
                })->paginate(5);
        } else {
            $items = auth()->user()
                ->accounts()
                ->with(['category'])
                ->published()
                ->paginate(5);
        }

        return view('site.dashboard.index-sales-ad' , get_defined_vars())->extends('site.layouts.dashboard');
    }

    public function unsave($id)
    {
        $user = Auth::user();
        $user->accounts()->detach($id);

    }
}
