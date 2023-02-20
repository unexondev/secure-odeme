<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Payment extends Model
{
    
    use HasFactory, HasUuids;


    protected $fillable = [ "owner_id", "link_id", "bank_account_id", "amount" ];

}
