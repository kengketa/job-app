<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Applicant extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    public const MEDIA_COLLECTION_DOCUMENTS = 'documents';

    protected $fillable = [
        'user_id',
        'announcement_id',
        'application_number',
        'photo',
        'prefix',
        'first_name',
        'last_name',
        'position',
        'address',
        'birthdate',
        'age',
        'phone',
        'birthplace',
        'ethnicity',
        'email',
        'citizen_id',
        'marital_status',
        'nationality',
        'district',
        'province',
        'card_issued_date',
        'expiration_date',
        'military_service',
        'religion',
        'current_occupation',
        'reason_for_leaving',
        'education_and_training_year',
        'school_name',
        'education_degree',
        'grade',
        'additional_course',
        'training',
        'work_experience',
        'organization_name',
        'position_duties',
        'salary',
        'resignation_reason',
        'achievements',
        'experience_gained',
        'talent',
        'reference_person_name',
        'reference_person_lastname',
        'current_position',
        'workplace_and_phone',
        'relationship',
        'signature_applicant',
        'submit_date',
        'signature_recruiter',
        'recruiter_date',
        'signature_payee',
        'payee_date',
        'accepted',
      
    ];
    protected $casts = [
        'create_at' => 'date',
        'updated_at' => 'date',
    ];

    public function type()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Announcement::class, 'announcement_id');
    }


    public function scopeFilter(Builder $query, array $filters): void
    {
        if (isset($filters['user_id']) && $filters['user_id'] != null) {
            $query->where('user_id', $filters['user_id']);
        }
        if (isset($filters['announcement_id']) && $filters['announcement_id'] != null) {
            $query->where('announcement_id', $filters['announcement_id']);
        }
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_DOCUMENTS);
    }

}
