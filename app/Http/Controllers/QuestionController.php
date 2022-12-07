<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Survey $survey)
    {
        return view('questions.create', compact('survey'));
    }

    public function store(Survey $survey, Request $request)
    {
        $validated = $request->validate([
            'question.question' => 'required',
        ]);

        $question = $survey->questions()->create($validated['question']);

        return redirect()->route('survey.show', $survey);
    }
}
