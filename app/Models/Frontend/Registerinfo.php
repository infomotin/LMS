<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;

class Registerinfo extends Model
{
    use HasFactory, AuditableTrait;
    protected $guarded = [];
}
