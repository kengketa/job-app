<?php

namespace App\Http\Transformers;


use App\Models\Announcement;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class AnnouncementTransformer extends TransformerAbstract
{
    public $thaiMonths = [
        1 => 'ม.ค.',
        2 => 'ก.พ.',
        3 => 'มี.ค.',
        4 => 'เม.ย.',
        5 => 'พ.ค.',
        6 => 'มิ.ย.',
        7 => 'ก.ค.',
        8 => 'ส.ค.',
        9 => 'ก.ย.',
        10 => 'ต.ค.',
        11 => 'พ.ย.',
        12 => 'ธ.ค.',
    ];
    protected array $availableIncludes = ['documents'];

    public function transform(Announcement $announcement): array
    {
        $startDate = Carbon::parse($announcement->start_date);
        $endDate = Carbon::parse($announcement->end_date) ?? null;
        $data = [
            'id' => $announcement->id,
            'type_id' => $announcement->type_id,
            'category_id' => $announcement->category_id,
            'title' => $announcement->title,
            'position' => $announcement->position,
            'degree' => $announcement->degree,
            'open_position' => $announcement->open_position,
            'start_date' => $startDate->day . ' ' . $this->thaiMonths[$startDate->month] . ' ' . $startDate->year + 543,
            'end_date' => $endDate ? $endDate->day . ' ' . $this->thaiMonths[$endDate->month] . ' ' . $endDate->year + 543 : null,
        ];
        return $data;
    }

    public function includeDocuments(Announcement $announcement)
    {
        $documents = $announcement->getMedia(Announcement::MEDIA_COLLECTION_DOCUMENTS);
        return $this->collection($documents, new AnnouncementDocumentTransformer());
    }
}
