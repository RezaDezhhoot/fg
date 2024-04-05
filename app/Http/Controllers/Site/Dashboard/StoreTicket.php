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

class StoreTicket extends Component
{
    use WithFileUploads;

    public $ticketSubject , $orderStep , $subjects = [] , $ticketStep;

    public $acceptBody;

    public $subject;

    public $formSubject , $orderId , $productName , $cardNumber , $priority , $body;

    public $file;


    public function mount()
    {
        SEOMeta::setTitle('تیکت جدید - فارس گیمر');
        OpenGraph::setTitle('تیکت جدید - فارس گیمر');
        TwitterCard::setTitle('تیکت جدید - فارس گیمر');
        JsonLd::setTitle('تیکت جدید - فارس گیمر');
    }
    public function render()
    {
        return view('site.dashboard.store-ticket')->extends('site.layouts.tickets');
    }

    public function updatedOrderStep()
    {
        switch ($this->orderStep){
            case Subject::BEFORE_ORDER:
                $this->subjects = Subject::query()->where('category',Subject::BEFORE_ORDER)->get()->chunk(2)->values()->toArray();
                break;
            case Subject::AFTER_ORDER:
                $this->subjects = Subject::query()->where('category',Subject::AFTER_ORDER)->get()->chunk(2)->values()->toArray();
                break;
        }
    }

    public function submitTicket()
    {
        $this->validate([
            'ticketSubject' => ['required','exists:subjects,id'],
            'formSubject' => ['required','string','max:100'],
            'orderId' => [$this->orderStep == Subject::AFTER_ORDER ?  'required' : 'nullable','string','max:100000'],
            'productName' => [$this->orderStep == Subject::AFTER_ORDER ? 'required' : 'nullable','string','max:200'],
            'cardNumber' => [$this->orderStep == Subject::AFTER_ORDER ?  'required' : 'nullable','string','max:30'],
            'priority' => ['required',Rule::in(array_keys(Ticket::getPriority()))],
            'body' => ['required','string','max:1000']
        ],[],[
            'formSubject' => 'موضوغ',
            'orderId' => 'کد سفارش',
            'productName' => 'نام محصول',
            'cardNumber' => 'شماره کارت',
            'priority' => 'اولویت',
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
        $ticket->fill([
            'user_id' =>  $user_id,
            'content' => $this->body,
            'sender_id' => $user_id,
            'priority' => $this->priority,
            'status' => Ticket::PENDING,
            'sender_type' => Ticket::USER,
            'subject_id' => $this->ticketSubject,
            'data' => [
                'orderId' => $this->orderId,
                'productName' => $this->productName,
                'cardNumber' => $this->cardNumber,
                'formSubject' => $this->formSubject,
            ],
            'file' => $path
        ]);
        $ticket->save();
        redirect()->route('dashboard.tickets');
    }

    public function nextStep($step)
    {
        if ($step == 'subject') {
            $this->validate(['orderStep' => 'required']);
        }
        if ($step == 'form') {
            $this->validate(['acceptBody' => ['required','boolean']]);
        }
        if ($step == 'description') {
            $this->validate(['ticketSubject' => ['required','exists:subjects,id']]);
            $this->subject = Subject::query()->find($this->ticketSubject);
            if (empty($this->subject->body)) {
                $step = 'form';
            }
        }


        $this->ticketStep = $step;
    }
}
