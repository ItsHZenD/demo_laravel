<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use Prunable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'author',
        'price',
        'quantity',
    ];

    public function getYearCreatedAtAttribute($value){
        return  $this->created_at->format('d-m-Y');
    }


}
