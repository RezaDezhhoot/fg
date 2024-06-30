<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\AccountInfraction;
use App\Models\InfractionSubject;

class StoreInfractionSubject extends BaseComponent
{
    public  $title;

    public function mount($action , $id = null)
    {
        if ($action == 'create') {
            $this->create();
        } elseif ($action == 'edit') {
            $this->edit($id);
        } else {
            abort(404);
        }
    }

    public function edit($id)
    {
        $this->setMode(self::MODE_UPDATE);
        $this->model = InfractionSubject::query()->findOrFail($id);
        $this->title = $this->model->title;
    }

    public function create()
    {
        $this->setMode(self::MODE_CREATE);
    }

    public function store()
    {
        $this->saveInDatabase(new InfractionSubject());

        $this->emitNotify('موضوع با موفقیت ثبت شد');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->reset(['title']);
    }

    public function update()
    {
        $this->saveInDatabase($this->model);

        $this->emitNotify('موضوع با موفقیت ویرایش شد');
    }

    private function saveInDatabase(InfractionSubject $infractionSubject)
    {
        $this->validate([
            'title' => ['required','string','max:80']
        ] , [],[
            'title'=> 'عنوان'
        ]);
        $data = [
            'title' => $this->title,
        ];
        $infractionSubject->fill($data)->save();
    }


    public function render()
    {
        return view('admin.accounts.store-infraction-subject')->extends('admin.layouts.admin');
    }
}
