<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Link extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [ "earn", "views" ];

}