<?php

namespace App\Http\Controllers;

use App\Models\Question;
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
            'answers.*.answer' => 'required',
        ]);

        $question = $survey->questions()->create($validated['question']);

        $question->answers()->createMany($validated['answers']);

        return redirect()->route('survey.show', $survey);
    }

    public function delete(Survey $survey, Question $question)
    {
        $question->responses()->delete();
        $question->answers()->delete();
        $question->delete();

        return redirect()->route('survey.show', $survey);
    }
}
