<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agama extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table        = 'agama';
    protected $guarded    = [];
    protected $primaryKey = 'id';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    /**
     * Get all of the pesertadidiks for the Agama
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ptks(): HasMany
    {
        return $this->hasMany(Ptk::class, 'agama_id');
    }
}
