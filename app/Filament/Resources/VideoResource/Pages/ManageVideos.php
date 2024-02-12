<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageVideos extends ManageRecords
{
    protected static string $resource = VideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    $video = str_replace("https://youtu.be", "", $data['link']);

                    $data['link'] = $video;

                    return $data;
                }),
        ];
    }
}
