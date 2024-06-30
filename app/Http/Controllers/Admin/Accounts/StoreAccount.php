<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Admin\BaseComponent;
use App\Models\Account;
use App\Models\Category;
use Illuminate\Validation\Rule;

class StoreAccount extends BaseComponent
{

    public $title , $description , $image , $fg_depot , $telegram_id , $amount , $category_id , $status , $admin_description;

    public $seo_keywords , $seo_description , $gallery;

    public function mount($action, $id = null)
    {
        if ($action == 'edit') {
            $this->edit($id);
        } else {
            abort(404);
        }
        $this->data['status'] = Account::getStatuses();
        $this->data['categories'] = Category::query()->account()->pluck('title','id')->toArray();
    }
    public function resetInputs()
    {
    }

    public function edit($id)
    {
        $this->setMode(self::MODE_UPDATE);
        $this->model = Account::query()->findOrFail($id);
        $this->title = $this->model->title;
        $this->description = $this->model->description;
        $this->image = $this->model->image;
        $this->fg_depot = $this->model->fg_depot;
        $this->telegram_id = $this->model->telegram_id;
        $this->amount = $this->model->amount;
        $this->category_id = $this->model->category_id;
        $this->status = $this->model->status;
        $this->seo_description = $this->model->seo_description;
        $this->seo_keywords = $this->model->seo_keywords;
        $this->gallery = $this->model->gallery;
        $this->admin_description = $this->model->admin_description;
    }

    public function update()
    {
        $this->saveInDatabase($this->model);
        $this->emitNotify('اکانت با موفقیت ویرایش شد');
    }

    private function saveInDatabase(Account $account)
    {
        $this->validate(
            [
                'title' => ['required', 'string', 'max:250'],
                'image' => ['required', 'string', 'max:250'],
                'description' => ['nullable','string','max:1000'],
                'fg_depot' => ['nullable','boolean'],
                'telegram_id' => ['nullable','string','max:100'],
                'amount' => ['required','numeric','between:1,10000000000000000000'],
                'category_id' => ['required','exists:categories,id'],
                'status' => ['required',Rule::in(array_keys($this->data['status']))],
                'admin_description' => ['nullable','string','max:15000'],
                'seo_keywords' => ['nullable', 'string', 'max:65500'],
                'seo_description' => ['nullable', 'string', 'max:250'],
                'gallery' => ['nullable','string','max:5000']
            ],
            [],
            [
                'title' => 'عنوان',
                'image' => 'تصویر',
                'description' => 'توضیحات',
                'fg_depot' => 'موجود در انبار فارس گیمر',
                'telegram_id' => 'تلگرام',
                'amount' => 'مبلغ',
                'category_id' => 'دسته بندی',
                'status' => 'وضعیت',
                'admin_description' => 'توضیحات',
                'seo_keywords' => 'کلمات کلیدی سئو',
                'seo_description' => 'توضیحات سئو',
                'gallery' => 'گالری'
            ]
        );
        $data = [
            'title' => $this->title,
            'image' => $this->image,
            'description' => $this->description,
            'fg_depot' => $this->fg_depot ?? false,
            'telegram_id' => $this->telegram_id,
            'amount' => $this->amount,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'gallery' => $this->gallery,
            'admin_description' => $this->admin_description
        ];
        $account->fill($data)->save();
    }

    public function render()
    {
        $infractions = $this->model->infractions()->latest()->paginate($this->perPage);

        return view('admin.accounts.store-account' , get_defined_vars())->extends('admin.layouts.admin');
    }
}
