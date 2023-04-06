<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\Question\StoreRequest;
use App\Http\Requests\Question\UpdateRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question =  Question::latest('id')
        ->paginate(20);
    
    return view('backend.questions.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        Question::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('questions.index')->with('success', 'Question Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {

        return view('backend.questions.show', compact('question'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('backend.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Question $question)
    {

        $validated = $request->validated();
        $question->update([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('questions.index')->with('success', 'Question Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        
        return redirect()->route('questions.index')->with('success', 'Question Deleted Successfully!');
    }
}
