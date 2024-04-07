<?php

namespace App\Models;

use App\Traits\Admin\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $category
 */
class TicketMessage extends Model
{
    protected $table = 'message_tickets';

    use HasFactory , Searchable;

    public $searchAbleColumns = ['title'];

    protected $guarded = ['id'];

    public function scopeSelect2($q)
    {
        return $q->addSelect(['title as text', 'id']);
    }
}
