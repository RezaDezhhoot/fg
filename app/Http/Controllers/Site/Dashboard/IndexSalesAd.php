<?php

namespace App\Http\Controllers\Site\Dashboard;

use App\Models\Ticket;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Livewire\Component;

class IndexSalesAd extends Component
{
    public function mount()
    {

        SEOMeta::setTitle('تیکت ها - فارس گیمر');
        OpenGraph::setTitle('تیکت ها - فارس گیمر');
        TwitterCard::setTitle('تیکت ها - فارس گیمر');
        JsonLd::setTitle('تیکت ها - فارس گیمر');
    }
    public function render()
    {
        return view('site.dashboard.index-sales-ad' )->extends('site.layouts.dashboard');
    }
}
