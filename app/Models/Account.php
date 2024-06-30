<?php

namespace App\Models;

use App\Traits\Admin\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Account extends Model
{
    use HasFactory , Searchable;

    protected $guarded = ['id'];

    public $searchAbleColumns = ['id'];

    const PENDING = 'pending';
    const PUBLISHED = 'published';
    const NEED_CORRECTION = 'need_correction';

    const CODE = 992560;

    public static function getStatuses()
    {
        return [
            self::PENDING => 'در انتطار تایید',
            self::PUBLISHED => 'تاییده شده',
            self::NEED_CORRECTION => 'نیاز به اصلاح'
        ];
    }

    public function getStatusLabelAttribute(): string
    {
        return self::getStatuses()[$this->status] ?? '';
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function getGalleryAttribute($value)
//    {
//        return json_decode($value , true);
//    }
//
//    public function setGalleryAttribute($value)
//    {
//        $this->attributes['gallery'] = json_encode($value);
//    }

    public function getCodeAttribute()
    {
        return self::CODE + $this->id;
    }
    public function scopePublished($q)
    {
        return $q->where('status',self::PUBLISHED);
    }
}
