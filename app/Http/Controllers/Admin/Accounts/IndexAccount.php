<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\Account;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexAccount extends BaseComponent
{
    use AuthorizesRequests;

    public $status , $category;

    protected $queryString = ['status' , 'category'];

    public function mount()
    {
        $this->data['status'] = Account::getStatuses();
        $this->data['categories'] = Category::query()->account()->pluck('title','id')->toArray();
    }

    public function render()
    {
        $items = Account::query()
            ->with(['category','user'])
            ->withCount('infractions')
            ->when($this->status , function ($q) {
                $q->where('status', $this->status);
            })
            ->when($this->category , function ($q) {
                $q->where('category_id' , $this->category);
            })
            ->latest()
            ->when(! empty($this->search) , function ($q) {
                $q->search($this->search - Account::CODE);
            })
            ->paginate($this->perPage);

        return view('admin.accounts.index-account' , get_defined_vars())->extends('admin.layouts.admin');
    }

    public function deleteItem($id)
    {
        Account::destroy($id);
    }
}
