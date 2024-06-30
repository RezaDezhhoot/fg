<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\InfractionSubject;
use Livewire\Component;

class IndexInfractionSubject extends BaseComponent
{
    public function render()
    {
        $items = InfractionSubject::query()
            ->latest()
            ->search($this->search)
            ->paginate($this->perPage);

        return view('admin.accounts.index-infraction-subject' , get_defined_vars())->extends('admin.layouts.admin');
    }

    public function deleteItem($id)
    {
        InfractionSubject::destroy($id);
    }
}
