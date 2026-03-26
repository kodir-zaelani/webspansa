<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistic extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $table      = 'statistics';
    protected $primaryKey = 'id';
    protected $guarded    = [];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $createdAt  = ['created_at'];
    protected $updatedAt  = ['updated_at'];


    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }

    public function getStatusLabelAttribute()
    {
        //ADAPUN VALUENYA AKAN MENCETAK HTML BERDASARKAN VALUE DARI FIELD STATUS
        if ($this->status == 0) {
            return '<span class="badge badge-primary">Draft</span>';
        }
        return '<span class="badge badge-success">Published</span>';

    }

    // fungsi scope untuk manampilkan yang status publish
    public function scopePublished($query)
    {
        return $query->where("status", "=", 1);
    }

    // fungsi scope untuk manampilkan yang status publish
    public function scopeDraft($query)
    {
        return $query->where("status", "=", 0);
    }
}