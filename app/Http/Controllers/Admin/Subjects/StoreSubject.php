<?php

namespace App\Http\Controllers\Admin\Subjects;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\Subject;
use Illuminate\Validation\Rule;

class StoreSubject extends BaseComponent
{
    public $title, $category, $body;

    public function mount($action, $id = null)
    {
        if ($action == 'create') {

            $this->create();
        } elseif ($action == 'edit') {
            $this->edit($id);
        } else {
            abort(404);
        }

        $this->data['categories'] = Subject::CATEGORIES;
    }

    public function create()
    {
        $this->setMode(self::MODE_CREATE);
    }

    public function edit($id)
    {
        $this->setMode(self::MODE_UPDATE);
        $this->model = Subject::find($id);

        $this->title = $this->model->title;
        $this->category = $this->model->category;
        $this->body = $this->model->body;
    }

    public function update()
    {
        $this->saveInDatabase($this->model);

        $this->emitNotify('موضوع با موفقیت ویرایش شد');
    }

    public function store()
    {
        $this->saveInDatabase(new Subject());

        $this->emitNotify('موضوع با موفقیت ثبت شد');
        $this->resetInputs();
    }

    private function saveInDatabase(Subject $subject)
    {
        $this->validate(
            [
                'title' => ['required', 'string', 'max:250'],
                'category' => ['required',Rule::in(array_keys(Subject::CATEGORIES))],
                'body' => ['nullable','string','max:3000']
            ],
            [],
            [
                'title' => 'عنوان',
                'category' => 'دسته',
                'body' => 'توضیحات'
            ]
        );

        $subject->title = $this->title;
        $subject->category = $this->category;
        $subject->body = $this->body;
        $subject->save();
    }

    public function resetInputs()
    {
        $this->reset(['title','category','body']);
    }

    public function render()
    {
        return view('admin.subjects.store-subject')->extends('admin.layouts.admin');
    }

    public function delete($id)
    {
        Subject::findOrFail($id)->delete();
        redirect()->route('admin.subjects');
        $this->emitNotify('موضوع با موفقیت حذف شد');
    }
}
