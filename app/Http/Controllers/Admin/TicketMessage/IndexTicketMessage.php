<?php

namespace App\Http\Controllers\Admin\TicketMessage;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\TicketMessage;

class IndexTicketMessage extends BaseComponent
{
    public function render()
    {
        $items = TicketMessage::query()
            ->latest()
            ->search($this->search)
            ->paginate($this->perPage);

        return view('admin.TicketMessages.index-TicketMessage' , get_defined_vars())->extends('admin.layouts.admin');
    }

    public function delete($id)
    {
        TicketMessage::destroy($id);
    }
}
