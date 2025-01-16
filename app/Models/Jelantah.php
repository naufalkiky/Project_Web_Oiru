<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Jelantah extends Model
{
    use HasFactory;

    protected $table = 'Total_Jelantah';

    protected $fillable = [
        'id',
        'user_id',
        'berat_jelantah',
        'address',
        'gambar_jelantah',
        'note',
        'status',
        'pick_up_number'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d M Y, H:i');
    }
}
