<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blogcategory extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table        = 'blogcategories';
    protected $primaryKey   = 'id';
    protected $guarded      = [];


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }

    /**
     * Get all of the blogs for the Postcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'blogcategory_id');
    }

    public function parent()
    {
        return $this->belongsTo(Blogcategory::class, 'parent_id');
    }

    public function child()
    {
        return $this->hasMany(Blogcategory::class, 'parent_id');
    }


    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryCategoryblog');
            $imagePath = public_path() . "/{$directory}" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("/{$directory}" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageThumbUrl = "";

        if (!is_null($this->image)) {
            $directory = config('cms.image.directoryCategoryblog');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() ."/{$directory}" . $thumbnail;
            if(file_exists($imagePath)) $imageThumbUrl = asset("/$directory" . $thumbnail);
        }

        return $imageThumbUrl;
    }
}
