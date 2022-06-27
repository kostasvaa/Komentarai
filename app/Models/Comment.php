<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //Nurodomas norimas table
    protected $table='comments';
    //Nurodomos lenteles kurios bus pildomos
    protected $fillable = [
        "user_id",
        "product_id",
        "comment",
    ];
}
