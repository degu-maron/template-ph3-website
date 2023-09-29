<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillableプロパティで編集可能な要素を限定
    protected $fillable = [
        'name',
        // 'image',
        // 'description',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
