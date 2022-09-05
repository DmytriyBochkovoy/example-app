<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nette\Utils\Type;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'type_id',
        'test_id'
    ];

    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(QuestionType::class);
    }
}
