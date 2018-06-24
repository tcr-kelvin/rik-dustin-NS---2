<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\ReviewsStorePost;




class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = review::all();
        return view('review', compact('reviews') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reviewsStorePost $request)
    {
        $validated = $request->validated();

        $review = new review();
        $review->title = $request['title'];
        $review->description = $request['description'];

        $review->save();

        return redirect()->action('ReviewsController@index')
            ->with('status', 'Review toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     * reviews/6
     */
    public function show(Review $review)
    {
        //
        return view('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
        return view('review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewsStorePost $request, Review $review)
    {
        //
        $validated = $request->validated();

        //$review = new Review();
        $review->title = $request['title'];
        $review->description = $request['description'];
        $review->save();

        return redirect()->action('ReviewsController@index')
            ->with('status', 'Review gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
        $review->delete();
        return redirect()->action('ReviewsController@index')
            ->with('status', 'Review verwijderd');
    }

}
