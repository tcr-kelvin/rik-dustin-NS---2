<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\QuestionsStorePost;




class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('question', compact('questions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionsStorePost $request)
    {
        $validated = $request->validated();

        $question = new Question();
        $question->title = $request['title'];
        $question->description = $request['description'];

        $question->save();

        return redirect()->action('QuestionsController@index')
            ->with('status', 'Question toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     * questions/6
     */
    public function show(Question $question)
    {
        //
        return view('question.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionsStorePost $request, Question $question)
    {
        //
        $validated = $request->validated();

        //$question = new Question();
        $question->title = $request['title'];
        $question->description = $request['description'];
        $question->save();

        return redirect()->action('QuestionsController@index')
            ->with('status', 'Question gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return redirect()->action('QuestionsController@index')
            ->with('status', 'Question verwijderd');
    }

}
