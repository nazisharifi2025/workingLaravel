<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class student extends Model
{
    use Hasfactory;
    use softDeletes;
    public function scopeScore($query){
        $query->where("score", ">=", 40);
    }
}
