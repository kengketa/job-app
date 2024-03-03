<?php

namespace App\Http\Transformers;


use App\Models\Announcement;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class AnnouncementTransformer extends TransformerAbstract
{
    protected array $availableIncludes = ['documents'];

    public function transform(Announcement $announcement): array
    {
        $data = [
            'id' => $announcement->id,
            'type_id' => $announcement->type_id,
            'category_id' => $announcement->category_id,
            'title' => $announcement->title,
            'position' => $announcement->position,
            'degree' => $announcement->degree,
            'open_position' => $announcement->open_position,
            'start_date' => Carbon::parse($announcement->start_date)->formatLocalized('l j F Y'),
            'end_date' => $announcement->end_date,
        ];
        return $data;
    }

    public function includeDocuments(Announcement $announcement)
    {
        $documents = $announcement->getMedia(Announcement::MEDIA_COLLECTION_DOCUMENTS);
        return $this->collection($documents, new AnnouncementDocumentTransformer());
    }
}
