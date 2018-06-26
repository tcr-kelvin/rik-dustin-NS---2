<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SimonlysStorePost;

class SimonlysController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simonlys = Simonly::all();
        return view('simonly', compact('simonlys') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('simonly.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimonlysStorePost $request)
    {
        $validated = $request->validated();

        $simonly = new Simonly();
        $simonly->name = $request['name'];
        $simonly->description = $request['description'];
        $simonly->sms = $request['sms'];
        $simonly->callmins = $request['callmins'];
        $simonly->data = $request['data'];
        $simonly->price = $request['price'];
        $simonly->save();

        return redirect()->action('SimonlysController@index')
            ->with('status', 'Simonly toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simonly  $simonly
     * @return \Illuminate\Http\Response
     * simonlys/6
     */
    public function show(Simonly $simonly)
    {
        //
        return view('simonly.show', compact('simonly'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simonly  $simonly
     * @return \Illuminate\Http\Response
     */
    public function edit(Simonly $simonly)
    {
        //
        return view('simonly.edit', compact('simonly'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simonly  $simonly
     * @return \Illuminate\Http\Response
     */
    public function update(SimonlysStorePost $request, Simonly $simonly)
    {
        //
        $validated = $request->validated();

        //$simonly = new Simonly();
        $simonly->name = $request['name'];
        $simonly->description = $request['description'];
        $simonly->sms = $request['sms'];
        $simonly->callmins = $request['callmins'];
        $simonly->data = $request['data'];
        $simonly->price = $request['price'];
        $simonly->save();

        return redirect()->action('SimonlysController@index')
            ->with('status', 'Simonly gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simonly  $simonly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simonly $simonly)
    {
        //
        $simonly->delete();
        return redirect()->action('SimonlysController@index')
            ->with('status', 'Simonly verwijderd');
    }
}
