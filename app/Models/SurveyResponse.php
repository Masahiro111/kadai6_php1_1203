<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_compilation_id',
        'question_id',
        'answer_id',
    ];

    public function surveyCompilation()
    {
        return $this->belongsTo(surveyCompilations::class);
    }
}
