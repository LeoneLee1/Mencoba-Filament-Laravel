<?php

namespace App\Filament\Resources\PartnersResource\Pages;

use App\Models\Partner;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PartnersResource;

class EditPartners extends EditRecord
{
    protected static string $resource = PartnersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Partner $record) {
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
