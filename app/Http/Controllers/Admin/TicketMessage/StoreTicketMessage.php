<?php

namespace App\Http\Controllers\Admin\TicketMessage;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\TicketMessage;
use Illuminate\Validation\Rule;

class StoreTicketMessage extends BaseComponent
{
    public $title, $body;

    public function mount($action, $id = null)
    {
        if ($action == 'create') {

            $this->create();
        } elseif ($action == 'edit') {
            $this->edit($id);
        } else {
            abort(404);
        }
    }

    public function create()
    {
        $this->setMode(self::MODE_CREATE);
    }

    public function edit($id)
    {
        $this->setMode(self::MODE_UPDATE);
        $this->model = TicketMessage::find($id);

        $this->title = $this->model->title;
        $this->body = $this->model->body;
    }

    public function update()
    {
        $this->saveInDatabase($this->model);

        $this->emitNotify('موضوع با موفقیت ویرایش شد');
    }

    public function store()
    {
        $this->saveInDatabase(new TicketMessage());

        $this->emitNotify('موضوع با موفقیت ثبت شد');
        $this->resetInputs();
    }

    private function saveInDatabase(TicketMessage $TicketMessage)
    {
        $this->validate(
            [
                'title' => ['required', 'string', 'max:250'],
                'body' => ['nullable','string','max:3000']
            ],
            [],
            [
                'title' => 'عنوان',
                'body' => 'توضیحات'
            ]
        );

        $TicketMessage->title = $this->title;
        $TicketMessage->body = $this->body;
        $TicketMessage->save();
    }

    public function resetInputs()
    {
        $this->reset(['title','body']);
    }

    public function render()
    {
        return view('admin.TicketMessages.store-TicketMessage')->extends('admin.layouts.admin');
    }

    public function delete($id)
    {
        TicketMessage::findOrFail($id)->delete();
        redirect()->route('admin.TicketMessages');
        $this->emitNotify('موضوع با موفقیت حذف شد');
    }
}
