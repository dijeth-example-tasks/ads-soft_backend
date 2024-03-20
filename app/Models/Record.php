<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property array data
 * @property bool access
 */
class Record extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'data' => 'json',
            'access' => 'bool',
        ];
    }

    public function scopeKeyValue(Builder $query, object $data): void
    {
        collect($data)->each(function ($value, $key) use ($query) {
            $query->whereJsonContains('data->' . $key, $value);
        });
    }
}
