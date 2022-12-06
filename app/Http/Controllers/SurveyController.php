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

        $survey = Survey::query()->create($validated + [
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('survery.show', $survey);
    }
}
