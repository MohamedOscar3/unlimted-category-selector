<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ["id"];
    protected $perPage = 1;

    public function parent() {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function children() {
        return $this->hasMany(Category::class,'parent_id');
    }
}
