<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create()
    {
        return view('survey.create');
    }

    public function show(Survey $survey)
    {
        return view('survey.show', compact('survey'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $survey = Survey::query()
            ->create(
                $validated + [
                    'user_id' => auth()->id(),
                ]
            );

        return redirect()->route('survey.show', $survey);
    }

    public function take(Survey $survey, $slug)
    {
        return view('survey.take', compact('survey'));
    }

    public function takeStore(Survey $survey)
    {
        // dd(request()->all());

        $validated = request()->validate([
            'info.name' => 'required',
            'info.email' => 'required|email',

            'responses.*.question_id' => 'required',
            'responses.*.answer_id' => 'required',
        ]);

        // dd($validated);

        $surveyCompilation = $survey->surveyCompilations()->create($validated['info']);
        $surveyCompilation->responses()->createMany($validated['responses']);

        return view('survey.thank-you');
    }
}
