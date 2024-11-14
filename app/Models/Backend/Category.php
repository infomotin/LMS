<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;

class Category extends Model
{
    use HasFactory,AuditableTrait;
    protected $guarded = [];
}
