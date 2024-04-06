<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum StatusEnum: int implements HasLabel
{
    case Draft = 1;
    case Published = 2;
    case Archived = 3;

    /*
     * Get the values of the enum.
     * Needed for associating the enum values with the database via the migration.
     */

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function published(): bool
    {
        return $this === self::Published;
    }

    public function draft(): bool
    {
        return $this === self::Draft;
    }

    public function archived(): bool
    {
        return $this === self::Archived;
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => 'Brouillon',
            self::Published => 'Publié',
            self::Archived => 'Archive',
        };
    }
}
