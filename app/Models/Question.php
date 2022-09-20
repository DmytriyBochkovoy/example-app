<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'type_id',
        'test_id',
        'question_type'
    ];

    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
