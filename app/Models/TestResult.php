<?php

namespace App\Models;

use App\Casts\TestResultJson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'answers'
    ];

    protected $casts = [
        'answers' => 'array',
    ];

//    public function questions(): HasMany
//    {
//        return $this->hasMany(Question::class);
//    }
}
