<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroceriesTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'groceries_id',
        'quantity',
        'total_bage_points',
        'note',
        'status',
        'invoice_number',
    ];

    public function groceries()
    {
        return $this->belongsTo(Groceries::class, 'groceries_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d M Y, H:i');
    }
}
