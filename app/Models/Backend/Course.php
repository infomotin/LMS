<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;

class Course extends Model
{
    use HasFactory, AuditableTrait;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id','id');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id','id');
    }
}
