<?php

namespace App\Http\Controllers;

use App\Prepaid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrepaidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prepaids = Prepaid::all();
        return view('prepaid', compact('prepaids') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prepaid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrepaidsStorePost $request)
    {
        $validated = $request->validated();

        $prepaid = new Prepaid();
        $prepaid->name = $request['name'];
        $prepaid->description = $request['description'];
        $prepaid->sms = $request['sms'];
        $prepaid->callmins = $request['callmins'];
        $prepaid->data = $request['data'];
        $prepaid->price = $request['price'];
        $prepaid->save();

        return redirect()->action('PrepaidsController@index')
            ->with('status', 'Prepaid toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prepaid  $prepaid
     * @return \Illuminate\Http\Response
     * prepaids/6
     */
    public function show(Prepaid $prepaid)
    {
        //
        return view('prepaid.show', compact('prepaid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prepaid  $prepaid
     * @return \Illuminate\Http\Response
     */
    public function edit(Prepaid $prepaid)
    {
        //
        return view('prepaid.edit', compact('prepaid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prepaid  $prepaid
     * @return \Illuminate\Http\Response
     */
    public function update(PrepaidsStorePost $request, Prepaid $prepaid)
    {
        //
        $validated = $request->validated();

        //$prepaid = new Prepaid();
        $prepaid->name = $request['name'];
        $prepaid->description = $request['description'];
        $prepaid->sms = $request['sms'];
        $prepaid->callmins = $request['callmins'];
        $prepaid->data = $request['data'];
        $prepaid->price = $request['price'];
        $prepaid->save();

        return redirect()->action('PrepaidsController@index')
            ->with('status', 'Prepaid gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prepaid  $prepaid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prepaid $prepaid)
    {
        //
        $prepaid->delete();
        return redirect()->action('PrepaidsController@index')
            ->with('status', 'Prepaid verwijderd');
    }
}
