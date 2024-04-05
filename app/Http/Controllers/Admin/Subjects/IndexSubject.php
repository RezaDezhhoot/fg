<?php

namespace App\Http\Controllers\Admin\Subjects;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\Subject;

class IndexSubject extends BaseComponent
{
    public function render()
    {
        $items = Subject::query()
            ->latest()
            ->search($this->search)
            ->paginate($this->perPage);

        return view('admin.subjects.index-subject' , get_defined_vars())->extends('admin.layouts.admin');
    }

    public function delete($id)
    {
        Subject::destroy($id);
    }
}
