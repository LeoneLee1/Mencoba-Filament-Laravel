<?php

namespace App\Filament\Resources\SectionsResource\Pages;

use App\Models\Section;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SectionsResource;

class EditSections extends EditRecord
{
    protected static string $resource = SectionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Section $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
