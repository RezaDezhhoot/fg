<?php

namespace App\Models;

use App\Traits\Admin\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $category
 */
class Subject extends Model
{
    use HasFactory , Searchable;

    public $searchAbleColumns = ['title'];

    protected $guarded = ['id'];

    const BEFORE_ORDER = 'before_order';
    const AFTER_ORDER = 'after_order';
    const CATEGORIES = [
        self::BEFORE_ORDER => 'قبل سفارش',
        self::AFTER_ORDER => 'بعد سفارش'
    ];

    public function getLabelAttribute()
    {
        return self::CATEGORIES[$this->category] ?? '';
    }

    public function scopeSelect2($q)
    {
        return $q->addSelect(['title as text', 'id']);
    }
}
