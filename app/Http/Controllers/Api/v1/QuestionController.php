<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Question;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Http\Requests\Question\StoreRequest;
use App\Http\Requests\Question\UpdateRequest;
use App\Http\Resources\QuestionResourceCollection;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): QuestionResourceCollection
    {
        return new QuestionResourceCollection(Question::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        
        $question = Question::create([
            'title' => $request->title,
            'description' => $request->description,
            'sort_number' => $request->sort_number,
            'status' => $request->status
        ]);

        return new QuestionResource($question);
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question): QuestionResource
    {
        return new QuestionResource($question);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
            'status' => $request->status
        ]);

        return new QuestionResource($question);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json(["data" => [
            "success" => 'Question deleted.'
        ]]);
    }
}
