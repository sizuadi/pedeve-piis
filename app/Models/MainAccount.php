<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    use HasFactory;

    protected $table="main_account";
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;
}
