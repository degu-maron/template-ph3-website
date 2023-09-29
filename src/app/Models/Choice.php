<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillableプロパティで編集可能な要素を限定
    protected $fillable = [
        'question_id',
        'text',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
