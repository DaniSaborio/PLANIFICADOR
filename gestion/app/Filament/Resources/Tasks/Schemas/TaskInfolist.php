<?php

namespace App\Filament\Resources\Tasks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TaskInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('due_date')
                    ->date(),
                TextEntry::make('project_id')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
