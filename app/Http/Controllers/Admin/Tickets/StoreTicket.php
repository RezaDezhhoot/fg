<?php

namespace App\Http\Controllers\Admin\Tickets;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Setting;
use App\Models\TicketMessage;
use GuzzleHttp\Psr7\MessageTrait;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\BaseComponent;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StoreTicket extends BaseComponent
{
    use AuthorizesRequests;
    public $ticket, $header;
    public $TicketMessages, $subject, $user_id, $content, $file, $cardNumber, $orderId, $productName, $priority, $status, $child = [], $user_name, $answer, $answerFile, $oldSubject, $oldUser;
    public function mount($action, $id = null)
    {
        $this->authorize('show_tickets');

        if ($action == 'create') {
            $this->create();
        } elseif ($action == 'edit') {
            $this->edit($id);
        } else {
            abort(404);
        }
        $this->data['priority'] = Ticket::getPriority();
        $this->data['status'] = Ticket::getStatus();
        $this->data['subject'] = Setting::getSingleRow('subject', []);
        $this->TicketMessages = TicketMessage::get();
    }

    public function create()
    {

        $this->authorize('edit_tickets');

        $this->setMode(self::MODE_CREATE);
    }


    public function store()
    {
        $this->authorize('edit_tickets');
        $this->saveInDatabase(new Ticket());

        $this->emitNotify('تیکت با موفقیت ثبت شد');
        $this->resetInputs();
    }


    public function edit($id)
    {
        $this->authorize('edit_tickets');

        $this->setMode(self::MODE_UPDATE);
        $this->ticket = Ticket::findOrFail($id);
        $this->subject = $this->ticket->subject_id;
        $this->oldSubject = $this->ticket->subject->toArray();
        $this->user_id = $this->ticket->user_id;
        $this->oldUser = $this->ticket->user->toArray();
        $this->user_name = $this->ticket->user->username;
        $this->content = $this->ticket->content;
        $this->file = $this->ticket->file;
        $this->priority = $this->ticket->priority;
        $this->status = $this->ticket->status;
        $this->child = $this->ticket->child;
        $this->cardNumber = $this->ticket->data['cardNumber'];
        $this->productName = $this->ticket->data['productName'];
        $this->orderId = $this->ticket->data['orderId'];
        $this->data['cardNumber'] = $this->ticket->data['cardNumber'];
        $this->data['productName'] = $this->ticket->data['productName'];
        $this->data['orderId'] = $this->ticket->data['orderId'];
    }

    public function update()
    {
        $this->authorize('edit_tickets');

        $this->saveInDatabase($this->ticket);

        $this->emitNotify('تیکت با موفقیت ویرایش شد');
    }

    public function saveInDataBase(Ticket $model)
    {
        $this->validate(
            [
                'subject' => ['required', 'exists:subjects,id'],
                'content' => ['required', 'string', 'max:95000'],
                'file' => ['nullable', 'string', 'max:800'],
                'priority' => ['required', 'in:' . implode(',', array_keys(Ticket::getPriority()))],
                'status' => ['required', 'in:' . implode(',', array_keys(Ticket::getStatus()))],
                'user_id' => ['required', 'exists:users,id']
            ],
            [],
            [
                'subject' => 'موضوع',
                'content' => 'متن',
                'file' => 'فایل',
                'priority' => 'الویت',
                'status' => 'وضعیت',
                'user_id' => ' کاربر',
            ]
        );
        $model->subject_id = $this->subject;
        $model->user_id = $this->user_id;
        $model->content =  $this->ticket->content;
        $model->file =  $this->ticket->file;
        $model->parent_id =  $this->ticket->parent_id;
        $model->sender_id  = $this->ticket->user_id;
        $model->sender_type  = $this->ticket->sender_type;
        $model->priority =  $this->ticket->priority;
        $model->status = $this->status;
        $model->save();
        $this->emitNotify('اطلاعات با موفقیت ثبت شد');
    }

    public function deleteItem()
    {
        $this->ticket->delete();
        return redirect()->route('admin.ticket');
    }

    public function deleteChild($id)
    {
        Ticket::destroy($id);
        $this->ticket->load('child');
    }


    public function newAnswer()
    {
        $this->authorize('edit_tickets');
        $this->validate(
            [
                'answer' => ['required', 'string'],
                'answerFile' => ['nullable', 'max:250', 'string']
            ],
            [],
            [
                'answer' => 'پاسخ',
                'answerFile' => 'فایل'
            ]
        );
        $new = new Ticket();
        $new->subject_id = $this->subject;
        $new->user_id  = $this->user_id;
        $new->parent_id = $this->ticket->id;
        $new->content = $this->answer;
        $new->file = $this->answerFile;
        $new->sender_id = Auth::id();
        $new->sender_type = Ticket::ADMIN;
        $new->priority = $this->priority;
        $new->status = Ticket::ACTIVE;

        $this->ticket->status = Ticket::ACTIVE;
        $this->ticket->save();
        $new->save();
        $this->child->push($new);
        $this->ticket->child->push($new);
        \App\Http\Controllers\Smsir\Facades\Smsir::sendPatern(
            "
            سلام رفیق
            \n\n
            یک پاسخ جدید در ساعت '"
                . jalaliDate($new->created_at, 'Y-m-d H:i:s') .
                "'
            برای درخواست پشتیبانی شما گذاشته شد، لطفا توی اولین فرصت پنلتو چک کن❤️
            \n\n
            FarsGamer.Com
            ",
            $this->ticket->user->mobile,
            jalaliDate($new->created_at, 'Y-m-d H:i:s')
        );
        $this->emitNotify('اطلاعات با موفقیت ثبت شد');
    }


    public function delete($key)
    {
        $this->authorize('delete_tickets');
        $ticket = $this->child[$key];
        $ticket->delete();
        unset($this->child[$key]);
    }

    public function render()
    {
        return view('admin.tickets.store-ticket')->extends('admin.layouts.admin');
    }

    public function addText($id)
    {
        $this->answer = TicketMessage::query()->find($id)->body ?? null;
    }

    public function resetInputs()
    {
        $this->reset(['subject', 'user_id', 'content', 'file', 'priority', 'status']);
    }
}
