<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $table = 'representatives';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'telephone','route','created_at','comments'];
}
