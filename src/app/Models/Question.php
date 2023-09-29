<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillableプロパティで編集可能な要素を限定
    protected $fillable = [
        'content',
        'image',
        'supplement',
        'quiz_id',
    ];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public static function booted(): void
    {
        static::deleted(function ($question) {
            $question->choices()->delete();
        });
    }
}
