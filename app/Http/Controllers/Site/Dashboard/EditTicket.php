<?php

namespace App\Http\Controllers\Site\Dashboard;

use App\Models\Subject;
use App\Models\Ticket;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTicket extends Component
{
    use WithFileUploads;

    public $file;

    public $ticket , $body;

    public function mount($id)
    {
        SEOMeta::setTitle('تیکت  - فارس گیمر');
        OpenGraph::setTitle('تیکت  - فارس گیمر');
        TwitterCard::setTitle('تیکت  - فارس گیمر');
        JsonLd::setTitle('تیکت  - فارس گیمر');
        $this->ticket = Ticket::query()->where('user_id',auth()->id())->findOrFail($id);
    }

    public function submitTicket()
    {
        if ($this->ticket->status != Ticket::PENDING) {
            $this->validate([
                'body' => ['required','string','max:1000']
            ],[],[
                'body' => 'متن'
            ]);
            $user_id = auth()->id();
            $ticket = new Ticket();
            $path = null;
            if ($this->file) {
                $this->validate(['file' => ['image','max:2048']]);
                $path = 'storage/'.$this->file->store('media/tickets','public');
            }
            $ticket->user()->associate(auth()->user());
            $ticket->parent()->associate($this->ticket);
            $ticket->fill([
                'user_id' =>  $user_id,
                'content' => $this->body,
                'sender_id' => $user_id,
                'priority' => $this->ticket->priority,
                'status' => Ticket::ACTIVE,
                'sender_type' => Ticket::USER,
                'subject_id' => $this->ticket->subject_id,
                'file' => $path
            ]);
            $ticket->save();
            $this->ticket->update([
                'status' => Ticket::PENDING
            ]);
            $this->reset(['body','file']);
            $this->ticket->load('child');
        }
        $ticket->user()->associate(auth()->user());
        $ticket->parent()->associate($this->ticket);
        $ticket->fill([
            'user_id' =>  $user_id,
            'content' => $this->body,
            'sender_id' => $user_id,
            'priority' => $this->ticket->priority,
            'status' => Ticket::PENDING,
            'sender_type' => Ticket::USER,
            'subject_id' => $this->ticket->subject_id,
            'file' => $path
        ]);
        $this->ticket->update([
            'status' => Ticket::PENDING
        ]);
        $ticket->save();
        $this->reset(['body','file']);
        $this->ticket->load('child');
    }

    public function closeTicket()
    {
        $this->ticket->update([
            'status' => Ticket::DEACTIVATE
        ]);
    }

    public function render()
    {
        return view('site.dashboard.edit-ticket')->extends('site.layouts.tickets');
    }
}
