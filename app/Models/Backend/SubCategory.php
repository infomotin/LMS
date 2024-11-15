<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
class SubCategory extends Model
{
    use HasFactory,AuditableTrait;
    protected $guarded = [];
}
