<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'category_id',
        'title',
        'position',
        'degree',
        'employment_type',
        'open_position',
        'start_date',
        'end_date',
    ];
    protected $casts = [
        'create_at' => 'date',
        'updated_at' => 'date',
    ];

    public function type()
    {
        return $this->belongsTo(AnnouncementType::class, 'type_id');
    }

    public function category()
    {
        return $this->belongsTo(AnnouncementCategory::class, 'category_id');
    }
}
