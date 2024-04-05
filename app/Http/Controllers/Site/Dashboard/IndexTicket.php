<?php

namespace App\Http\Controllers\Site\Dashboard;

use App\Models\Ticket;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Livewire\Component;

class IndexTicket extends Component
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
        $items = Ticket::query()->where('user_id',auth()->id())
            ->whereNull('parent_id')
            ->limit(100)
            ->latest()
            ->get();
        return view('site.dashboard.index-ticket' , get_defined_vars())->extends('site.layouts.dashboard');
    }
}
