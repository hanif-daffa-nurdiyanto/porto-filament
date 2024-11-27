<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'price', 'quantity', 'attachment'];

    public function getAttachmentAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
}
