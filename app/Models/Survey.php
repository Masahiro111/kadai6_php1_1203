<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function surveyCompilations()
    {
        return $this->hasMany(SurveyCompilation::class);
    }

    public function publicUrl()
    {
        return url('/survey/take/' . $this->id . '-' .  $this->title);
    }
}
